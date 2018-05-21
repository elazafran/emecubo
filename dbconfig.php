<?php
 $db_host = "db732013555.db.1and1.com";
 $db_name = "db732013555";
 $db_user = "dbo732013555";
 $db_pass = "Pa56word";
 
 try{
  
  $db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
  $db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
 catch(PDOException $e){
  echo $e->getMessage(); 
 }
?>