

<?php
        include('funciones.php');
        $conexion = conectaBBDD();
        
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['Apellidos'];
        $direccion = $_POST['Direccion'];
        $dni = $_POST['dni'];
        $email = $_POST['Email'];
        $telefono = $_POST['Telefono'];
        $movil = $_POST['Movil'];
        $pais = $_POST['pais'];
        $ccaa = $_POST['comunidad'];
        $provincia = $_POST['provincia'];
        $ciudad = $_POST['Ciudad'];
        $cp = $_POST['cp'];
        
        $insercionCliente = $conexion->query("INSERT INTO clientes(DNI,Nombre,Apellidos,Direccion,Email,Telefono,Movil,Pais,Provincia,Comunidad_Autonoma,Ciudad,CP,Fecha_creacion)VALUES ('$dni','$nombre','$apellidos','$direccion','$email','$telefono','$movil','$pais','$provincia','$ccaa','$ciudad','$cp',CURDATE())");
        
        if($insercionCliente){
            echo'Cliente añadido correctamente';
        }else{
            echo'ERROR';
        }
        
?>



