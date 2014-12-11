<meta charset="UTF-8">
<?php

include './funciones.php';
$conexion = conectaBBDD();


  $idpppp = $_POST["id"];  

  $nombre = $_POST["nombre"];  

  $apellidos = $_POST["apellidos"];  

  $puesto = $_POST["puesto"];  

  $pass = $_POST["pass"];  


 

$modificarUsuario = $conexion->query("UPDATE empleados SET Nombre='$nombre' WHERE ID='$idpppp'");

if($modificarUsuario){
   echo '<div class="alert alert-success" role="alert"><h3>Modificación Correcta</h3></div>'; 
}else{
   echo '<div class="alert alert-error" role="alert"><h3>Modificación Incorrecta</h3></div>'; 
}

?>



