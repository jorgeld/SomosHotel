
<?php
include './funciones.php';
$conexion = conectaBBDD();

$tipoBusqueda = $_POST["tipoBusquedaBorrado"] ;
$textoBusqueda = $_POST["textoBusquedaBorrado"] ;
$n = 0;

echo'<div id=p class="row-fluid"></div>';
switch ($tipoBusqueda){
    case 1: 
       $consulta=$conexion->query("SELECT * FROM empleados WHERE Nombre = '$textoBusqueda'");
       echo '<table class="table table-hover table-bordered">
             <th>#</th>
             <th>Nombre</th>
             <th>1er Apellido</th>
             <th>2º Apellido</th>
             <th>Departamento</th>
             <th>Fecha Alta</th>';
       while($fila=$consulta->fetch_assoc()){ 
           $id = $fila["ID"];
            echo'<tr>
                    <td><a class="btn btn-primary" id="btn'.$n.'" onclick="borrado('.$id.');">X</a></td>
                    <td>'.$fila["Nombre"].'</td>
                    <td>'.$fila["Apellido_1"].'</td>
                    <td>'.$fila["Apellido_2"].'</td>
                    <td>'.$fila["Departamento"].'</td>
                    <td>'.$fila["Fecha_alta"].'</td>
                  </tr>';                                  
            $n++;            
       }echo'</table>';
       break;
    
    case 2:
       $consulta=$conexion->query("SELECT * FROM empleados WHERE Apellido_1 = '$textoBusqueda'");
        echo '<table class="table table-hover table-bordered">
             <th>#</th>
             <th>Nombre</th>
             <th>1er Apellido</th>
             <th>2º Apellido</th>
             <th>Puesto</th>
             <th>Fecha Alta</th>';
       while($fila=$consulta->fetch_assoc()){
           $id = $fila["ID"];
           echo'<tr>
                    <td><a class="btn btn-primary" id="btn'.$n.'" onclick="borrado('.$id.');">X</a></td>
                    <td>'.$fila["Nombre"].'</td>
                    <td>'.$fila["Apellido_1"].'</td>
                    <td>'.$fila["Apellido_2"].'</td>
                    <td>'.$fila["Departamento"].'</td>
                    <td>'.$fila["Fecha_alta"].'</td>
                  </tr>';                                   
            $n++;           
                
       }echo'</table>';
       break;

    case 3:
        $consulta=$conexion->query("SELECT * FROM empleados WHERE DNI = '$textoBusqueda'");
        echo '<table class="table table-hover table-bordered">
             <th>#</th>
             <th>Nombre</th>
             <th>1er Apellido</th>
             <th>2º Apellido</th>
             <th>Puesto</th>
             <th>Fecha Alta</th>';
       while($fila=$consulta->fetch_assoc()){
           $id = $fila["ID"];
             echo'<tr>
                    <td><a class="btn btn-primary" id="btn'.$n.'" onclick="borrado('.$id.');">X</a></td>
                    <td>'.$fila["Nombre"].'</td>
                    <td>'.$fila["Apellido_1"].'</td>
                    <td>'.$fila["Apellido_2"].'</td>
                    <td>'.$fila["Departamento"].'</td>
                    <td>'.$fila["Fecha_alta"].'</td>
                  </tr>';                                 
            $n++;             
       }echo'</table>';
       break;
        

    case 4:
        $consulta=$conexion->query("SELECT * FROM empleados WHERE Departamento = '$textoBusqueda'");
        echo '<table class="table table-hover table-bordered">
             <th>#</th>
             <th>Nombre</th>
             <th>1er Apellido</th>
             <th>2º Apellido</th>
             <th>Puesto</th>
             <th>Fecha Alta</th>';
       while($fila=$consulta->fetch_assoc()){
           $id = $fila["ID"];
            echo'<tr>
                    <td><a class="btn btn-primary" id="btn'.$n.'" onclick="borrado('.$id.');">X</a></td>
                    <td>'.$fila["Nombre"].'</td>
                    <td>'.$fila["Apellido_1"].'</td>
                    <td>'.$fila["Apellido_2"].'</td>
                    <td>'.$fila["Departamento"].'</td>
                    <td>'.$fila["Fecha_alta"].'</td>
                  </tr>';                                  
            $n++;            
       }echo'</table>';
       break;
       
    case 5:
        $consulta=$conexion->query("SELECT * FROM empleados WHERE Fecha_alta = '$textoBusqueda'");
        echo '<table class="table table-hover table-bordered">
             <th>#</th>
             <th>Nombre</th>
             <th>1er Apellido</th>
             <th>2º Apellido</th>
             <th>Puesto</th>
             <th>Fecha Alta</th>';
       while($fila=$consulta->fetch_assoc()){
           $id = $fila["ID"];
            echo'<tr>
                    <td><a class="btn btn-primary" id="btn'.$n.'" onclick="borrado('.$id.');">X</a></td>
                    <td>'.$fila["Nombre"].'</td>
                    <td>'.$fila["Apellido_1"].'</td>
                    <td>'.$fila["Apellido_2"].'</td>
                    <td>'.$fila["Departamento"].'</td>
                    <td>'.$fila["Fecha_alta"].'</td>
                  </tr>';                                  
            $n++;            
       }echo'</table>';
       break;
       
       case 6:
        $consulta=$conexion->query("SELECT * FROM empleados WHERE Jefe = 1 ");
        echo '<table class="table table-hover table-bordered">
             <th>#</th>
             <th>Nombre</th>
             <th>1er Apellido</th>
             <th>2º Apellido</th>
             <th>Puesto</th>
             <th>Fecha Alta</th>';
       while($fila=$consulta->fetch_assoc()){
           $id = $fila["ID"];
            echo'<tr>
                    <td><a class="btn btn-primary" id="btn'.$n.'" onclick="borrado('.$id.');">X</a></td>
                    <td>'.$fila["Nombre"].'</td>
                    <td>'.$fila["Apellido_1"].'</td>
                    <td>'.$fila["Apellido_2"].'</td>
                    <td>'.$fila["Departamento"].'</td>
                    <td>'.$fila["Fecha_alta"].'</td>
                  </tr>';                                 
            $n++;            
       }echo'</table>';
       break;
       
       case 7:
        $consulta=$conexion->query("SELECT * FROM empleados");
        echo '
             <table class="table table-hover table-bordered">
             <th>#</th>
             <th>Nombre</th>
             <th>1er Apellido</th>
             <th>2º Apellido</th>
             <th>Puesto</th>
             <th>Fecha Alta</th>';
       while($fila=$consulta->fetch_assoc()){
           $id = $fila["ID"];
            echo'<tr>
                    <td><a class="btn btn-primary" id="btn'.$n.'" onclick="borrado('.$id.');">X</a></td>
                    <td>'.$fila["Nombre"].'</td>
                    <td>'.$fila["Apellido_1"].'</td>
                    <td>'.$fila["Apellido_2"].'</td>
                    <td>'.$fila["Departamento"].'</td>
                    <td>'.$fila["Fecha_alta"].'</td>
                  </tr>';                                  
            $n++;                
       }echo'</table>';
       break;       
}   
?>
<script>
         function borrado(_var1){
            $('#p').load('borradoUsuario_1.php',{
                id:_var1
            });
        }
                
</script>