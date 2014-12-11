<?php
session_start();
?>

<?php

        include('./funciones.php');
        $conexion = conectaBBDD();
        
        if(isset($_POST['usuario'])&& isset($_POST['pass'])){
          $usuario = $_POST['usuario'] ;
          $pass = $_POST['pass'];
        }
        
        $_SESSION['usuario_sesion']=$usuario;
        
        $usuarioSeleccionado = $conexion->query("SELECT * FROM empleados WHERE Usuario = '$usuario' && pass = $pass ");
            $numeroFilas = $usuarioSeleccionado->num_rows;
      
        if($numeroFilas > 0){
            header("Location: zonaAdmin.php");
        }else{
            echo "Revise los campos introducidos"; // Aqui meteremos un modal para informar
        }
