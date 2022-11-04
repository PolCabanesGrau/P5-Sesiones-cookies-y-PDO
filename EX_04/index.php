<?php
$conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');

$resultados = $conexion->query("CREATE TABLE pcabanesg8_usuarios (
    usuario varchar(255),
    correo varchar(255) PRIMARY KEY ,
    contrasena varchar(255),
    nacimiento date,
    admin BOOLEAN,
    imagen TEXT
)");


$resultados = $conexion->query('insert into pcabanesg8_usuarios values (usuario, correo, contrasena, nacimiento, admin, imagen)');
values ('poltora799', 'pcabanes@gmail.com', 'demboo', 2003-11-13,TRUE, 'no');
?>