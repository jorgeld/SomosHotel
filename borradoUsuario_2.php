<?php
include './funciones.php';
$conexion = conectaBBDD();

$id = $_POST["id"];
$comentario = $_POST["comentario"];

$consulta = $conexion->query("SELECT * FROM empleados WHERE ID = $id");
$fila=$consulta->fetch_assoc();
$idusus = $fila["ID"];
$usuario = $fila["Usuario"];
$dni = $fila["DNI"];
$nombre = $fila["Nombre"];
$apellido1 = $fila["Apellido_1"];
$apellido2 = $fila["Apellido_2"];
$departamento = $fila["Departamento"];
$jefe = $fila["Jefe"];
$pass = $fila["pass"];
$alta = $fila["Fecha_alta"];


$insercion_H= $conexion->query("INSERT INTO `empleados_historico`(`DNI`,`Nombre`,`Apellido_1`,`Apellido_2`,`Departamento`,`Jefe`,`Comentarios`,`Fecha_alta`,`Fecha_baja`) VALUES ('$dni','$nombre','$apellido1','$apellido2','$departamento','$jefe','$comentario','$alta',CURDATE())");
$borrado = $conexion->query("DELETE FROM `empleados` WHERE ID=$id");
if($borrado){
    header("location:gestionUsuarios.php");
}


?>


