<?php

    $host = 'localhost';
    $user = 'root';
    $password = 'erick';
    $db = 'facturacion';

    $conection = @mysqli_connect($host,$user,$password,$db);
    if(!$conection){
        echo "Error en la conexión";

    }else {
       # echo "Conexión exitosa";
    }
    
    ?>