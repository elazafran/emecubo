-- // lo primero de todo es activar los eventos
SET GLOBAL event_scheduler=on;
-- // Insertamos cada 30 s datos en la tabla
CREATE DEFINER=`root`@`localhost` EVENT `programadoinser30segundos` ON SCHEDULE EVERY 30 SECOND STARTS '2018-05-16 00:00:00' ENDS '2018-05-16 09:00:00' ON COMPLETION NOT PRESERVE ENABLE DO INSERT INTO ejemplobd.fechas(fecha,valor) VALUES ( NOW(),50 )

/* Creamos un tipo medida sensor para no tener problemas con foreign key */
INSERT INTO `tipomedidasensor` (`nombre`, `fechaconfigsensor`, `idsensor`, `idtiposensor`, `marcasensor`, `modelosensor`, `idestacion`, `nombre_descriptivo`, `dimension`, `valor_max`, `valor_min`, `valores_error`, `observacion`, `fechareglaaviso`) VALUES ('AN1', '2018-04-12 00:00:00', 'AN1', '2', 'ANEMO KMS', 'MODELO - 1 ', 'STC1', NULL, NULL, '60', '-40', '-99', NULL, NULL);

-- // Insertamos
INSERT INTO `medidasensor` (`fecha_medida`, `nombre`, `fechaconfigsensor`, `idsensor`, `tiposensor`, `marcasensor`, `modelosensor`, `idestacion`, `valor`) VALUES ('2018-05-16 00:00:01', 'AN1', '2018-04-12 00:00:00', 'AN1', '2', 'ANEMO KMS', 'MODELO - 1 ', 'STC1', '32')


-- //Creación de evento para minutos
    CREATE EVENT `mievento` ON SCHEDULE EVERY 1 MINUTE STARTS '2018-05-14 08:31:28' ON COMPLETION PRESERVE ENABLE DO INSERT INTO ejemplobd.fechas(fecha,valor) VALUES ( NOW(),50 )
    CREATE EVENT `e_Insertarcada1min` ON SCHEDULE EVERY 1 MINUTE STARTS '2018-05-14 08:31:28' ON COMPLETION PRESERVE ENABLE DO INSERT INTO ejemplobd.fechas(fecha,valor) VALUES ( NOW(),50 )
  

    CREATE DEFINER=`root`@`localhost` EVENT `mievento` ON schedule every 30 second STARTS '2018-05-14 08:31:28' ON COMPLETION PRESERVE ENABLE DO INSERT INTO ejemplobd.fechas(fecha,valor) VALUES ( NOW(),RAND(20) * 30 )
    INSERT INTO ejemplobd.fechas(fecha,valor) VALUES ( NOW(),25 )
    -- //INSERT INTO ejemplobd.fechas(fecha,valor) VALUES ( NOW(),$media_temperatura )
    
    -- // Introducir aleatorio 
    -- Return a random decimal number >= 5 and <10:
    -- RAND()*(10-5)+5;

    -- Return a random number >= 5 and <=10:
    -- SELECT FLOOR(RAND()*(10-5+1)+5);

    -- Insertamos cada 30 segundos dos medidas,  
    CREATE EVENT e_IntroducirAleatorio 
    ON schedule every 30 second DO INSERT INTO ejemplobd.fechas(fecha,valor) VALUES ( NOW(),RAND()*(10)+20);

    -- cada 10 minutos sacamos un promedio de las medidas
    CREATE EVENT e_Promedio10
    ON schedule every 10 MINUTE DO INSERT INTO ejemplobd.fechas(fecha,valor) SELECT AVG(valor) FROM fechas

    -- creamos una tabla temporal con los datos y el promedio es lo que guardamos
    create temporary table PROMEDIOS_5MINUTALES
    (Id_Sensor Text,Fecha_Dato datetime, Valor_Promedio decimal);
    insert into PROMEDIOS_5MINUTALES values
    ('NA00001','2018-05-15 09:29:59',30),
    ('NA00001','2018-05-15 09:18:00',20),
    ('NA00001','2018-05-15 09:09:00',25),
    ('NA00001','2018-05-15 09:29:00',26),
    ('NA00001','2018-05-15 09:17:00',23);

   -- guardamos un promedio con el rango de valor en el que se ha recogido el valor
    INSERT INTO fechas (fecha,valor)
    select concat(sec_to_time(franja_dato * 1800), ' - ', sec_to_time((franja_dato+1) * 1800 - 1)) as franja_horario,
       count(franja_dato) as conteo
    from (select time_to_sec(timediff(Fecha_Dato, cast(date(Fecha_Dato) as datetime))) div 1800 as franja_dato
          from PROMEDIOS_5MINUTALES) t
    group by franja_dato
    order by franja_dato;

---------------------------------------------------------------------------------------------------------------------

    CREATE EVENT e_IntroducirAleatorio 
    ON schedule every 30 second DO INSERT INTO ejemplobd.fechas(fecha,valor) VALUES ( NOW(),50)

    CREATE EVENT e_Borra1hora
    ON SCHEDULE AT now() + INTERVAL 3 HOUR
    -- //DO DELETE from fechas WHERE fecha < now()
    DO DELETE from fechas WHERE UNIX_TIMESTAMP(fecha) < (UNIX_TIMESTAMP()-6*3600)

    -- //select * from fechas where fecha < (UNIX_TIMESTAMP()-6*3600), interval 3 minute ;
    select * from fechas where fecha < date_sub(now(), interval 3 minute);

    


    




    $total = mysql_num_rows(mysql_query("SELECT valor FROM fechas WHERE fecha< INTERVAL 3 MINUTE"));
    if($total==0){
        echo 'No guardamos';
    }else{
        echo 'Hay un total de '.$total.' usuarios';
    }
