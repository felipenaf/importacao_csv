<?php

  function conexao(){
      
    $con = new PDO('mysql:host=localhost;dbname=php;charset=utf8', 'root', '123');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $con->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");
  
    return $con;
  }
  
?>