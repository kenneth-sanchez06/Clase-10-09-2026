<?php
$host = 'localhost';
$user = 'root';
$password = '12345678';
$dbName= 'crud_app';
$conexion = new mysqli($host,$user, $password, $dbName);
if ($conexion ->conect_error )
    {
        die('Error en conexion', $conexion->conect_error);
    } else{
        echo "<h1>Conexion realizada</h1>";
    }

// generar sql
// codigo de php para conectarse a base de datos
// captura de conexion exitosa