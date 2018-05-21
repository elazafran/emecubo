<?php
 include 'head.php';
?> 
<body>

    <script type="text/javascript">

        function getTimeAJAX() {

            //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX    

            var time = $.ajax({

                url: 'datos.php', //indicamos la ruta donde se genera la hora
                    dataType: 'text',//indicamos que es de tipo texto plano
                    async: false     //ponemos el parámetro asyn a falso
            }).responseText;

            //actualizamos el div que nos mostrará la hora actual
            document.getElementById("myWatch").innerHTML = "La fecha que hemos obtenido de datos.php vía AJAX es: "+time;
        }

        //con esta funcion llamamos a la función getTimeAJAX cada segundo para actualizar el div que mostrará la hora
        setInterval(getTimeAJAX,1000);

    </script>
    <?php  
        include 'menu.php';
        
    ?> 
    <header>
		 
		
	</header>
    <div class="signin-form">

        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <h1>Ver datos</h1>
                    <div id='myWatch'></div>

                </div>
            </div>
        </div>
    </div>



</body>
</html>