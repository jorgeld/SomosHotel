<?php
include './funciones.php';
$conexion = conectaBBDD();

$tipoBusqueda = $_POST["tipoBusqueda"] ;
$textoBusqueda = $_POST["textoBusqueda"] ;
$n = 0;


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
            echo'<tr>
                    <td><a data-toggle="modal" href="#modalEmpleado'.$n.'" class="btn btn-primary" id="btn'.$n.'">O</a></td>
                    <td>'.$fila["Nombre"].'</td>
                    <td>'.$fila["Apellido_1"].'</td>
                    <td>'.$fila["Apellido_2"].'</td>
                    <td>'.$fila["Departamento"].'</td>
                    <td>'.$fila["Fecha_alta"].'</td>
                  </tr>';
////////////////////////////////////// MODAL ////////////////////////////////////
                echo'<div id="modalEmpleado'.$n.'" class="modal hide fade in" style="display: none;">
                        <div class="modal-header">
                            <a data-dismiss="modal" class="close">×</a>
                            <h3>'.$fila["Nombre"].' '.$fila["Apellido_1"].'</h3>
                        </div>
                        <div class="modal-body">
                            <p>Nombre completo: '.$fila["Nombre"].' '.$fila["Apellido_1"].' '.$fila["Apellido_2"].'<p>             
                            <p>DNI: '.$fila["DNI"].'<p>             
                            <p>Departamento: '.$fila["Departamento"].'<p>             
                            <p>Fecha de Alta: '.$fila["Fecha_alta"].'<p>             
                        </div>
                        <div class="modal-footer">
                            <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                        </div>
                    </div>';                   
///////////////////////////// FIN MODAL /////////////////////////////////                                   
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
           echo'<tr>
                    <td><a data-toggle="modal" href="#modalEmpleado'.$n.'" class="btn btn-primary" id="btn'.$n.'">O</a></td>
                    <td>'.$fila["Nombre"].'</td>
                    <td>'.$fila["Apellido_1"].'</td>
                    <td>'.$fila["Apellido_2"].'</td>
                    <td>'.$fila["Departamento"].'</td>
                    <td>'.$fila["Fecha_alta"].'</td>
                  </tr>';
////////////////////////////////////// MODAL ////////////////////////////////////
                echo'<div id="modalEmpleado'.$n.'" class="modal hide fade in" style="display: none;">
                        <div class="modal-header">
                            <a data-dismiss="modal" class="close">×</a>
                            <h3>'.$fila["Nombre"].' '.$fila["Apellido_1"].'</h3>
                        </div>
                        <div class="modal-body">
                            <p>Nombre completo: '.$fila["Nombre"].' '.$fila["Apellido_1"].' '.$fila["Apellido_2"].'<p>             
                            <p>DNI: '.$fila["DNI"].'<p>             
                            <p>Departamento: '.$fila["Departamento"].'<p>             
                            <p>Fecha de Alta: '.$fila["Fecha_alta"].'<p>             
                        </div>
                        <div class="modal-footer">
                            <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                        </div>
                    </div>';                   
///////////////////////////// FIN MODAL /////////////////////////////////                                   
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
             echo'<tr>
                    <td><a data-toggle="modal" href="#modalEmpleado'.$n.'" class="btn btn-primary" id="btn'.$n.'">O</a></td>
                    <td>'.$fila["Nombre"].'</td>
                    <td>'.$fila["Apellido_1"].'</td>
                    <td>'.$fila["Apellido_2"].'</td>
                    <td>'.$fila["Departamento"].'</td>
                    <td>'.$fila["Fecha_alta"].'</td>
                  </tr>';
////////////////////////////////////// MODAL ////////////////////////////////////
                echo'<div id="modalEmpleado'.$n.'" class="modal hide fade in" style="display: none;">
                        <div class="modal-header">
                            <a data-dismiss="modal" class="close">×</a>
                            <h3>'.$fila["Nombre"].' '.$fila["Apellido_1"].'</h3>
                        </div>
                        <div class="modal-body">
                            <p>Nombre completo: '.$fila["Nombre"].' '.$fila["Apellido_1"].' '.$fila["Apellido_2"].'<p>             
                            <p>DNI: '.$fila["DNI"].'<p>             
                            <p>Departamento: '.$fila["Departamento"].'<p>             
                            <p>Fecha de Alta: '.$fila["Fecha_alta"].'<p>             
                        </div>
                        <div class="modal-footer">
                            <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                        </div>
                    </div>';                   
///////////////////////////// FIN MODAL /////////////////////////////////                                   
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
            echo'<tr>
                    <td><a data-toggle="modal" href="#modalEmpleado'.$n.'" class="btn btn-primary" id="btn'.$n.'">O</a></td>
                    <td>'.$fila["Nombre"].'</td>
                    <td>'.$fila["Apellido_1"].'</td>
                    <td>'.$fila["Apellido_2"].'</td>
                    <td>'.$fila["Departamento"].'</td>
                    <td>'.$fila["Fecha_alta"].'</td>
                  </tr>';
////////////////////////////////////// MODAL ////////////////////////////////////
                echo'<div id="modalEmpleado'.$n.'" class="modal hide fade in" style="display: none;">
                        <div class="modal-header">
                            <a data-dismiss="modal" class="close">×</a>
                            <h3>'.$fila["Nombre"].' '.$fila["Apellido_1"].'</h3>
                        </div>
                        <div class="modal-body">
                            <p>Nombre completo: '.$fila["Nombre"].' '.$fila["Apellido_1"].' '.$fila["Apellido_2"].'<p>             
                            <p>DNI: '.$fila["DNI"].'<p>             
                            <p>Departamento: '.$fila["Departamento"].'<p>             
                            <p>Fecha de Alta: '.$fila["Fecha_alta"].'<p>             
                        </div>
                        <div class="modal-footer">
                            <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                        </div>
                    </div>';                   
///////////////////////////// FIN MODAL /////////////////////////////////                                   
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
            echo'<tr>
                    <td><a data-toggle="modal" href="#modalEmpleado'.$n.'" class="btn btn-primary" id="btn'.$n.'">O</a></td>
                    <td>'.$fila["Nombre"].'</td>
                    <td>'.$fila["Apellido_1"].'</td>
                    <td>'.$fila["Apellido_2"].'</td>
                    <td>'.$fila["Departamento"].'</td>
                    <td>'.$fila["Fecha_alta"].'</td>
                  </tr>';
////////////////////////////////////// MODAL ////////////////////////////////////
                echo'<div id="modalEmpleado'.$n.'" class="modal hide fade in" style="display: none;">
                        <div class="modal-header">
                            <a data-dismiss="modal" class="close">×</a>
                            <h3>'.$fila["Nombre"].' '.$fila["Apellido_1"].'</h3>
                        </div>
                        <div class="modal-body">
                            <p>Nombre completo: '.$fila["Nombre"].' '.$fila["Apellido_1"].' '.$fila["Apellido_2"].'<p>             
                            <p>DNI: '.$fila["DNI"].'<p>             
                            <p>Departamento: '.$fila["Departamento"].'<p>             
                            <p>Fecha de Alta: '.$fila["Fecha_alta"].'<p>             
                        </div>
                        <div class="modal-footer">
                            <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                        </div>
                    </div>';                   
///////////////////////////// FIN MODAL /////////////////////////////////                                   
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
            echo'<tr>
                    <td><a data-toggle="modal" href="#modalEmpleado'.$n.'" class="btn btn-primary" id="btn'.$n.'">O</a></td>
                    <td>'.$fila["Nombre"].'</td>
                    <td>'.$fila["Apellido_1"].'</td>
                    <td>'.$fila["Apellido_2"].'</td>
                    <td>'.$fila["Departamento"].'</td>
                    <td>'.$fila["Fecha_alta"].'</td>
                  </tr>';
////////////////////////////////////// MODAL ////////////////////////////////////
                echo'<div id="modalEmpleado'.$n.'" class="modal hide fade in" style="display: none;">
                        <div class="modal-header">
                            <a data-dismiss="modal" class="close">×</a>
                            <h3>'.$fila["Nombre"].' '.$fila["Apellido_1"].'</h3>
                        </div>
                        <div class="modal-body">
                            <p>Nombre completo: '.$fila["Nombre"].' '.$fila["Apellido_1"].' '.$fila["Apellido_2"].'<p>             
                            <p>DNI: '.$fila["DNI"].'<p>             
                            <p>Departamento: '.$fila["Departamento"].'<p>             
                            <p>Fecha de Alta: '.$fila["Fecha_alta"].'<p>             
                        </div>
                        <div class="modal-footer">
                            <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                        </div>
                    </div>';                   
///////////////////////////// FIN MODAL /////////////////////////////////                                   
            $n++;            
       }echo'</table>';
       break;
       
       case 7:
        $consulta=$conexion->query("SELECT * FROM empleados");
        echo '<table class="table table-hover table-bordered">
             <th>#</th>
             <th>Nombre</th>
             <th>1er Apellido</th>
             <th>2º Apellido</th>
             <th>Puesto</th>
             <th>Fecha Alta</th>';
       while($fila=$consulta->fetch_assoc()){
            echo'<tr>
                    <td><a data-toggle="modal" href="#modalEmpleado'.$n.'" class="btn btn-primary" id="btn'.$n.'">O</a></td>
                    <td>'.$fila["Nombre"].'</td>
                    <td>'.$fila["Apellido_1"].'</td>
                    <td>'.$fila["Apellido_2"].'</td>
                    <td>'.$fila["Departamento"].'</td>
                    <td>'.$fila["Fecha_alta"].'</td>
                  </tr>';
////////////////////////////////////// MODAL ////////////////////////////////////
                echo'<div id="modalEmpleado'.$n.'" class="modal hide fade in" style="display: none;">
                        <div class="modal-header">
                            <a data-dismiss="modal" class="close">×</a>
                            <h3>'.$fila["Nombre"].' '.$fila["Apellido_1"].'</h3>
                        </div>
                        <div class="modal-body">
                            <p>Nombre completo: '.$fila["Nombre"].' '.$fila["Apellido_1"].' '.$fila["Apellido_2"].'<p>             
                            <p>DNI: '.$fila["DNI"].'<p>             
                            <p>Departamento: '.$fila["Departamento"].'<p>             
                            <p>Fecha de Alta: '.$fila["Fecha_alta"].'<p>             
                        </div>
                        <div class="modal-footer">
                            <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                        </div>
                    </div>';                   
///////////////////////////// FIN MODAL /////////////////////////////////                                   
            $n++;                
       }echo'</table>';
       break; 
       
}   
?>



