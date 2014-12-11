<?php

function conectaBBDD(){
    $conexion = new mysqli('localhost','root','','hotel');
    $consulta = $conexion->query("SET NAMES UTF8");
    return $conexion;
}

function limpia($palabras){
    $palabras = trim($palabras, "'");
    $palabras = trim($palabras, "=");
    $palabras = trim($palabras, '"');
}

?>

