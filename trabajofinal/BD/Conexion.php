<?php
    $host = "localhost";
    $usuario = "root";
    $contrasena = ""; 
    $base_datos ="";


    $conexion = new mysqli($host,$usuario, $contrasena, $base_datos);

    if($conexion->connect_error){
    }else{
    echo "Conexion exitosa <br>";
    }
?>