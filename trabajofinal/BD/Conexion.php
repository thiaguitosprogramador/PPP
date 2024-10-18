<?php
    $host = "localhost";
    $usuario = "root";
    $contrasena = ""; 
    $base_datos ="base2";


    $conexion = new mysqli($host,$usuario, $contrasena, $base_datos);

    if($conexion->connect_error){
    }else{
    echo "Conexion exitosa <br>";
    }
?>