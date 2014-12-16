<?php
include '../funciones.php';
$conexion = conectaBBDD();

$dni = $_POST["DNI"];
$nombre = $_POST["Nombre"];
$apellido1 = $_POST["Apellido1"];
$apellido2 = $_POST["Apellido2"];
$direccion = $_POST["Direccion"];
$email = $_POST["Email"];
$telefono = $_POST["Telefono"];
$pais = $_POST["Pais"];
$comunidad = $_POST["Comunidad"];
$provincia = $_POST["Provincia"];
$ciudad = $_POST["Ciudad"];
$cp = $_POST["Cp"];

$insercionHuesped = $conexion->query("INSERT INTO `clientes`(`DNI`, `Nombre`, `Apellido1`, `Apellido2`, `Direccion`, `Email`, `Telefono`, `Pais`, `Provincia`, `Comunidad_Autonoma`, `Ciudad`, `CP`, `Fecha_creacion`) VALUES ('$dni','$nombre','$apellido1','$apellido2','$direccion','$email','$telefono','$pais','$comunidad','$provincia','$ciudad','$cp',CURDATE())");


if($insercionHuesped){
    echo '<h2>Empleado insertado correctamente</h2>'
    . '<form method="post">  
            <button class="btn btn-primary" onclick="window.location.reload()">Nuevo registro</button>
        </form>';
}else{
    echo '<h2>ERROR</h2>';
}


?>