<?php
$host = 'localhost';
$usuario = 'root';
$contraseña = '';
$db = 'my_proyecto';

$conexion = new mysqli($host,$usuario,$contraseña,$db );
if ( $conexion -> connect_errno) {
    echo " Se experimentan fallas de conexión ";
    exit();
}
?>