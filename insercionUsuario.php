<meta charset="UTF-8">
<?php

include './funciones.php';
$conexion = conectaBBDD();

$Usuario = $_POST["Usuario"];
$DNI = $_POST["DNI"];
$Nombre = $_POST["Nombre"];
$Apellido1 = $_POST["Apellido1"];
$Apellido2 = $_POST["Apellido2"];
$Departamento = $_POST["Departamento"];
$Jefe = $_POST["Jefe"];
$pass = $_POST["pass"];



$insercionUsuario = $conexion->query("INSERT INTO `empleados`(`Usuario`,`DNI`,`Nombre`,`Apellido_1`,`Apellido_2`,`Departamento`,`Jefe`,`pass`,`Fecha_alta`) VALUES ('$Usuario','$DNI','$Nombre','$Apellido1','$Apellido2','$Departamento','$Jefe','$pass',CURDATE())");


if($insercionUsuario){
    echo '<h2>Empleado insertado correctamente</h2>'
    . '<form method="post">  
            <button class="btn btn-primary" onclick="window.location.reload()">Nuevo registro</button>
        </form>';
}else{
    echo '<h2>ERROR</h2>';
}

////////////////////////////////////// MODAL ////////////////////////////////////
                echo'<div id="modalEmpleado" class="modal hide fade in" style="display: none;">
                        <div class="modal-header">
                            <a data-dismiss="modal" class="close">×</a>
                            <h3>Borrado Usuario</h3>
                        </div>
                        <div class="modal-body">
                            <h4>El usuario ha sido borrado correctamente</h4>             
                        </div>
                        <div class="modal-footer">
                            <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                        </div>
                    </div>';                   
///////////////////////////// FIN MODAL /////////////////////////////////

?>
