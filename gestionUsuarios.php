<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Zona Admin</title>
        <meta name="viewport" content="width=device-width">
        
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
        
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        
    </head>
    <body>
        <!--Este es el pequeño navegar de la pagina, en cada uno de
        los LI, ponemos una funcion y le pasamos un parametro, dependiendo del parámetro, 
        a la hora de clickear en alguno de ellos, cargará uno u otro, todo gracias a un
        switch creado en javascript
        -->
        <ul class="nav nav-pills">
            <li id="a" onclick="carga(1);" ><a href="#">Inserción Usuario</a></li>
            <li onclick="carga(2);" id="2"><a href="#">Busqueda Usuario</a></li>
            <li onclick="carga(3);" id="3"><a href="#">Borrado Usuario</a></li>
            <li onclick="carga(4);" id="4"><a href="#">Modificado Usuario</a></li>
        </ul>
        
        <div class="container-fluid">            
           
                <div class="span12" id="contenido">
                    
                              
<!--///////////////////// INSERCIÓN USUARIO //////////////////////////////////-->                
                <div  id="insercionUsuario"> <!--Div bloque-->
                    <div class="row-fluid">                        
                        <div class="span8"><!--Dividimos la pantalla en dos, uno de 8 y otro de 4 donde saldrá el mensaje de confirmacion-->
                            <div class="span6"><!--Separamos el formulario en dos div de 6-->   
                                <table>                                
                                    <tr class="control-group"> 
                                        <td><label class="control-label" style="padding-right: 15px;">Usuario:</label></td>
                                        <td><input type="text" class="control" id="Usuario" placeholder="Usuario"></td>
                                    </tr>
                                    <tr class="control-group">
                                        <td><label class="control-label" style="padding-right: 15px;">DNI:</label></td>
                                        <td><input type="text" class="control" id="DNI" placeholder="DNI"></td>
                                    </tr>
                                    <tr class="control-group">
                                        <td><label class="control-label" style="padding-right: 15px;">Departamento:</label></td>
                                        <td><select id="Departamento" class="control">
                                                <option value="0">Seleccione departamento</option>
                                                <option value="Direccion">Dirección</option>
                                                <option value="Comercial">Comercial</option>
                                                <option value="Administracion">Administración</option>
                                                <option value="Cocina">Cocina</option>
                                                <option value="Cafeteria">Cafeteria</option>
                                                <option value="Recepcion">Recepción</option>
                                                <option value="Conserjeria">Conserjeria</option>
                                                <option value="Pisos">Pisos</option>
                                                <option value="Mantenimiento">Mantenimiento</option>
                                            </select></td>
                                    </tr>
                                    <tr class="control-group">
                                        <td><label class="control-label" style="padding-right: 15px;">Contraseña:</label></td>
                                        <td><input type="password" class="control" id="pass" placeholder="Contraseña"></td>
                                    </tr>
     
                                </table>
                            </div>
                                
                                <div class="span6">
                                    <table>
                                    <tr class="control-group">
                                        <td><label class="control-label" style="padding-right: 15px;">Nombre:</label></td>
                                        <td><input type="text" class="control" id="Nombre" placeholder="Nombre"></td>
                                    </tr>
                                    <tr class="control-group">
                                        <td><label class="control-label" style="padding-right: 15px;">1er Apellido:</label></td>
                                        <td><input type="text" class="control" id="Apellido_1" placeholder="1er Apellido"></td>
                                    </tr>
                                    <tr class="control-group">
                                        <td><label class="control-label" style="padding-right: 15px;">2º Apellido:</label></td>
                                        <td><input type="text" class="control" id="Apellido_2" placeholder="2º Apellido"></td>
                                    </tr>
                                    <tr class="control-group">
                                        <td><label class="control-label" style="padding-right: 15px;">Jefe Departamento?:</label></td>
                                        <td><select id="jefe" class="control">
                                                <option value="0">No</option>
                                                <option value="1">Si</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr class="control-group">
                                        <td></td>
                                        <td><button type="submit" class="control btn btn-primary btn-block" id="insertarUsuario">Insertar</button></td>
                                    </tr>
                                    </table>
                                </div>                                   
                        </div>
                        <div class="span4" id="mensaje"></div><!--Aqui cargará el mensaje de confirmación a través de un PHP-->
                    </div>
                </div><!--FIN Div bloque-->
<!--/////////////////////////// FIN INSERCIÓN USUARIO /////////////////////////////-->

<!--/////////////////////////////// BUSQUEDA USUARIO ////////////////////////////////-->                
                <div id="busquedaUsuario">
                    <div class="span4">

                            <table>
                                <tr class="control-group">
                                    <td class="control-label" style="padding-right: 15px;">Tipo Búsqueda</td>
                                    <td class="control">                            
                                        <select id="seleccion">
                                            <option value="1">Nombre</option>
                                            <option value="2">Apellido</option>
                                            <option value="3">DNI</option>
                                            <option value="4">Departamento</option>
                                            <option value="5">Fecha alta contrato</option>
                                            <option value="6">Jefes Departamento</option>
                                            <option value="7">Todos</option>
                                            
                                        </select>
                                    </td>
                                </tr>
                                <tr class="control-group"> 
                                    <td class="control-label" style="padding-right: 15px;">Texto a buscar</td>
                                    <td class="control"><input type="text" class="form-control" id="TextoBuscador" placeholder=""></td>
                                </tr>
                                <tr class="control-group">
                                    <td class="control-label" style="padding-right: 15px;"></td>
                                    <td><button type="submit" class="btn btn-primary" id="botonBuscador">Buscar Usuario</button></td>
                                </tr>
                            </table>

                        
                    </div>
                    <div class="span8" id="listaBusqueda">
                    </div>
                        
                    
                </div>
                <!--//////////////////////////// FIN BUSQUEDA USUARIO ////////////////////////////-->

                <!--////////////////////////// BORRADO USUARIO ////////////////////////////////////////-->
                
                <div  id="borradoUsuario">
                    <div class="span4">
                        <div class="row-fluid">
                        <table>
                            <tr class="control-group">
                                <td class="control-label" style="padding-right: 15px;">Tipo Búsqueda</td>
                                <td class="control">                            
                                    <select id="seleccionBorrado">
                                        <option value="1">Nombre</option>
                                        <option value="2">Apellido</option>
                                        <option value="3">DNI</option>
                                        <option value="4">Departamento</option>
                                        <option value="5">Fecha alta contrato</option>
                                        <option value="6">Jefes Departamento</option>
                                        <option value="7">Todos</option>

                                    </select>
                                </td>
                            </tr>
                            <tr class="control-group"> 
                                <td class="control-label" style="padding-right: 15px;">Texto a buscar</td>
                                <td class="control"><input type="text" class="form-control" id="TextoBuscadorBorrado" placeholder=""></td>
                            </tr>
                            <tr class="control-group">
                                <td class="control-label" style="padding-right: 15px;"></td>
                                <td><button type="submit" class="btn btn-primary" id="botonBuscadorBorrado">Buscar Usuario</button></td>
                            </tr>                            
                        </table>
                        </div>
                        <div class="row-fluid" id="confirmacionBorrado" style="padding-top: 20px;">
                            <h3>Está seguro que quiere borrar al empleado?</h3>
                            <div class="span2"></div>
                            <div class="span8">                                
                                <button class="btn btn-primary">Aceptar</button>
                                <button class="btn">Cancelar</button>   
                            </div>
                            <div class="span2"></div>
                        </div>
                    </div>
                    <div class="span8" id="listaBusquedaBorrado"></div>   
                    
<!--                    <legend>Borrado de Usuario</legend>
                    <form method="post">
                        <label>Id:</label><input type="text" class="form-control" id="idBorrado" placeholder="ID">                    
                    </form>
                    <a data-toggle="modal" href="#example"><button type="submit" class="btn btn-primary" id="borrarUsuario">Borrar Usuario</button></a>
                    <div id="DivBorrado" class="row-fluid"></div>-->
                </div>
                
 <!--//////////////////////////// FIN BORRADO USUARIO /////////////////////////////-->   
 
                </div> <!--fin div contenido--> 
        </div> <!--fin div container--> 
 
 
 
<!--////////////////////////////////////// MODAL ////////////////////////////////////-->
                    <div id="modalEmpleadorrrrrrr" class="modal hide fade in" style="display: none;">
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
                    </div>
                    
<!--///////////////////////////// FIN MODAL /////////////////////////////////-->
            

        <script>
            function carga(_var1){
                switch(_var1){
                    case 1: 
                        $('#insercionUsuario').show("fast");
                        $('#busquedaUsuario,#borradoUsuario').hide();break;
                        $( '#a' ).addClass( 'active' );
                    case 2: 
                        $('#busquedaUsuario').show("fast");
                        $('#insercionUsuario,#borradoUsuario').hide();break;               
                    case 3: 
                        $('#borradoUsuario').show("fast");
                        $('#insercionUsuario,#busquedaUsuario').hide();break;          
                }
            }
            
            $(document).ready(function(){
                
                $('#insercionUsuario,#busquedaUsuario,#borradoUsuario').hide();
                $('#confirmacionBorrado').hide();
                
                // Script para la busqueda de empleados
                $('#botonBuscador').on('click',function (){
                    var _tipoBusqueda = $('#seleccion').val();
                    var _textoBusqueda = $('#TextoBuscador').val();
                    $('#listaBusqueda').load('busquedaUsuarios.php',{
                        tipoBusqueda : _tipoBusqueda,
                        textoBusqueda : _textoBusqueda
                    });
                });
                
                // Script para el borrado
                $('#botonBuscadorBorrado').on('click',function (){
                    var _tipoBusquedaBorrado = $('#seleccionBorrado').val();
                    var _textoBusquedaBorrado = $('#TextoBuscadorBorrado').val();
                    $('#listaBusquedaBorrado').load('borradoUsuario.php',{
                        tipoBusquedaBorrado : _tipoBusquedaBorrado,
                        textoBusquedaBorrado : _textoBusquedaBorrado
                    });
                });
                
                
                // Script para la inserción de empleados
                $('#insertarUsuario').on('click',function(){
                    var _Usuario = $('#Usuario').val();
                    var _DNI = $('#DNI').val();
                    var _Nombre = $('#Nombre').val();
                    var _Apellido1 = $('#Apellido_1').val();
                    var _Apellido2 = $('#Apellido_2').val();
                    var _Departamento = $('#Departamento').val();
                    var _Jefe = $('#jefe').val();
                    var _pass = $('#pass').val();
                    $('#mensaje').load('insercionUsuario.php',{
                       Usuario : _Usuario,
                       DNI : _DNI,
                       Nombre: _Nombre,
                       Apellido1: _Apellido1,
                       Apellido2: _Apellido2,
                       Departamento: _Departamento,
                       Jefe: _Jefe,
                       pass: _pass
                    });
                });
                

            
            });
            

        </script>
        
        
        
    </body>
</html>


