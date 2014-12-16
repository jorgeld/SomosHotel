<?php
session_start();
?>
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
        
        <style> label{padding-right: 15px;}</style>
    </head>
    <body>
       <?php
        include('./funciones.php');
        $conexion = conectaBBDD();        
        $usu = $_SESSION['usuario_sesion'];
        ?>    
        <!--///// MENU NAVEGADOR ////////////-->
        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                <a class="brand active" href="index.php">SomosHotel</a>
                <ul class="nav">
                    <li><a><?php echo $usu; ?></a></li>
                    <li><a href="gestionUsuarios.php">GESTIÓN EMPLEADOS</a></li>
                    <li><a href="gestionClientes.php">GESTIÓN CLIENTES</a></li>
                    <li><a href="gestionHabitaciones.php">GESTIÓN HABITACIONES</a></li>
                </ul>
            </div>          
        </div>
        <!--///////// FIN MENU /////////////////-->
        <div class="navbar">
            <div class="navbar-inner">
                <a class="brand active" href="index.php">Gestión de Clientes</a>
                <ul class="nav">
                    <li><a href="#" onclick="cargaTipoCliente(1);">GESTIÓN EMPLEADOS</a></li>
                    <li><a href="#" onclick="cargaTipoCliente(2);">GESTIÓN CLIENTES</a></li>
                    <li><a href="#" onclick="cargaTipoCliente(3);">GESTIÓN HABITACIONES</a></li>
                </ul>
            </div>
        </div> 
        
        
               
        <div class="container-fluid">
            <div class="row-fluid" id="huespedes" name="huespedes">
                <!--////// MENÚ PILLS HUESPEDES //////-->
                <ul class="nav nav-pills">
                    <li onclick="cargaOpcionesHuespedes(1);" ><a href="#">Inserción</a></li>
                    <li onclick="cargaOpcionesHuespedes(2);" ><a href="#">Busqueda</a></li>
                    <li onclick="cargaOpcionesHuespedes(3);" ><a href="#">Borrado</a></li>
                    <li onclick="cargaOpcionesHuespedes(4);" ><a href="#">Modificado</a></li>
                </ul>
                <!--////// FIN MENU PILLS CLIENTES-->
                
                <!--////////// INSERCION /////////////////-->
                <div class="row-fluid" id="insercionHuespedes">
                    
                    <div class="span4">
                        <table>
                            <tr class="control-group"> 
                                <td><label class="control-label">DNI:</label></td>
                                <td><input type="text" class="control" id="DNI" placeholder="DNI"></td>
                            </tr>
                            <tr class="control-group"> 
                                <td><label class="control-label">Nombre:</label></td>
                                <td><input type="text" class="control" id="nombre" placeholder="Nombre"></td>
                            </tr>
                            <tr class="control-group"> 
                                <td><label class="control-label">Primer Apellido:</label></td>
                                <td><input type="text" class="control" id="apellido1" placeholder="Primer Apellido"></td>
                            </tr>
                            <tr class="control-group"> 
                                <td><label class="control-label">Segundo Apellido:</label></td>
                                <td><input type="text" class="control" id="apellido2" placeholder="Segundo Apellido"></td>
                            </tr>
                        </table>
                    </div><!--dividimos la el formulario en 3-->
                    <div class="span4">
                        <table>
                            <tr class="control-group"> 
                                <td><label class="control-label">Dirección:</label></td>
                                <td><input type="text" class="control" id="direccion" placeholder="Dirección"></td>
                            </tr>
                            <tr class="control-group"> 
                                <td><label class="control-label">Email:</label></td>
                                <td><input type="email" class="control" id="email" placeholder="Email"></td>
                            </tr>
                            <tr class="control-group"> 
                                <td><label class="control-label">Teléfono:</label></td>
                                <td><input type="text" class="control" id="telefono" placeholder="Teléfono"></td>
                            </tr>
                            <tr class="control-group"> 
                                <td><label class="control-label">País:</label></td>
                                <td><select name="pais" id="pais">
                                        <option value="AF">Afganistán</option>
                                        <option value="AL">Albania</option>
                                        <option value="DE">Alemania</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antártida</option>
                                        <option value="AG">Antigua y Barbuda</option>
                                        <option value="AN">Antillas Holandesas</option>
                                        <option value="SA">Arabia Saudí</option>
                                        <option value="DZ">Argelia</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaiyán</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="BH">Bahrein</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BE">Bélgica</option>
                                        <option value="BZ">Belice</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermudas</option>
                                        <option value="BY">Bielorrusia</option>
                                        <option value="MM">Birmania</option>
                                        <option value="BO">Bolivia</option>
                                        <option value="BA">Bosnia y Herzegovina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BR">Brasil</option>
                                        <option value="BN">Brunei</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BI">Burundi</option>
                                        <option value="BT">Bután</option>
                                        <option value="CV">Cabo Verde</option>
                                        <option value="KH">Camboya</option>
                                        <option value="CM">Camerún</option>
                                        <option value="CA">Canadá</option>
                                        <option value="TD">Chad</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CY">Chipre</option>
                                        <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
                                        <option value="CO">Colombia</option>
                                        <option value="KM">Comores</option>
                                        <option value="CG">Congo</option>
                                        <option value="CD">Congo, República Democrática del</option>
                                        <option value="KR">Corea</option>
                                        <option value="KP">Corea del Norte</option>
                                        <option value="CI">Costa de Marfíl</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="HR">Croacia (Hrvatska)</option>
                                        <option value="CU">Cuba</option>
                                        <option value="DK">Dinamarca</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egipto</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="AE">Emiratos Árabes Unidos</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="SI">Eslovenia</option>
                                        <option value="ES" selected>España</option>
                                        <option value="US">Estados Unidos</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ET">Etiopía</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="PH">Filipinas</option>
                                        <option value="FI">Finlandia</option>
                                        <option value="FR">Francia</option>
                                        <option value="GA">Gabón</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GI">Gibraltar</option>
                                        <option value="GD">Granada</option>
                                        <option value="GR">Grecia</option>
                                        <option value="GL">Groenlandia</option>
                                        <option value="GP">Guadalupe</option>
                                        <option value="GU">Guam</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GY">Guayana</option>
                                        <option value="GF">Guayana Francesa</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GQ">Guinea Ecuatorial</option>
                                        <option value="GW">Guinea-Bissau</option>
                                        <option value="HT">Haití</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HU">Hungría</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IQ">Irak</option>
                                        <option value="IR">Irán</option>
                                        <option value="IE">Irlanda</option>
                                        <option value="BV">Isla Bouvet</option>
                                        <option value="CX">Isla de Christmas</option>
                                        <option value="IS">Islandia</option>
                                        <option value="KY">Islas Caimán</option>
                                        <option value="CK">Islas Cook</option>
                                        <option value="CC">Islas de Cocos o Keeling</option>
                                        <option value="FO">Islas Faroe</option>
                                        <option value="HM">Islas Heard y McDonald</option>
                                        <option value="FK">Islas Malvinas</option>
                                        <option value="MP">Islas Marianas del Norte</option>
                                        <option value="MH">Islas Marshall</option>
                                        <option value="UM">Islas menores de Estados Unidos</option>
                                        <option value="PW">Islas Palau</option>
                                        <option value="SB">Islas Salomón</option>
                                        <option value="SJ">Islas Svalbard y Jan Mayen</option>
                                        <option value="TK">Islas Tokelau</option>
                                        <option value="TC">Islas Turks y Caicos</option>
                                        <option value="VI">Islas Vírgenes (EEUU)</option>
                                        <option value="VG">Islas Vírgenes (Reino Unido)</option>
                                        <option value="WF">Islas Wallis y Futuna</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italia</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japón</option>
                                        <option value="JO">Jordania</option>
                                        <option value="KZ">Kazajistán</option>
                                        <option value="KE">Kenia</option>
                                        <option value="KG">Kirguizistán</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="LA">Laos</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LV">Letonia</option>
                                        <option value="LB">Líbano</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libia</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lituania</option>
                                        <option value="LU">Luxemburgo</option>
                                        <option value="MK">Macedonia, Ex-República Yugoslava de</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MY">Malasia</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MV">Maldivas</option>
                                        <option value="ML">Malí</option>
                                        <option value="MT">Malta</option>
                                        <option value="MA">Marruecos</option>
                                        <option value="MQ">Martinica</option>
                                        <option value="MU">Mauricio</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="YT">Mayotte</option>
                                        <option value="MX">México</option>
                                        <option value="FM">Micronesia</option>
                                        <option value="MD">Moldavia</option>
                                        <option value="MC">Mónaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="MS">Montserrat</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NI">Nicaragua</option>
                                        <option value="NE">Níger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NU">Niue</option>
                                        <option value="NF">Norfolk</option>
                                        <option value="NO">Noruega</option>
                                        <option value="NC">Nueva Caledonia</option>
                                        <option value="NZ">Nueva Zelanda</option>
                                        <option value="OM">Omán</option>
                                        <option value="NL">Países Bajos</option>
                                        <option value="PA">Panamá</option>
                                        <option value="PG">Papúa Nueva Guinea</option>
                                        <option value="PK">Paquistán</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Perú</option>
                                        <option value="PN">Pitcairn</option>
                                        <option value="PF">Polinesia Francesa</option>
                                        <option value="PL">Polonia</option>
                                        <option value="PT">Portugal</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="QA">Qatar</option>
                                        <option value="UK">Reino Unido</option>
                                        <option value="CF">República Centroafricana</option>
                                        <option value="CZ">República Checa</option>
                                        <option value="ZA">República de Sudáfrica</option>
                                        <option value="DO">República Dominicana</option>
                                        <option value="SK">República Eslovaca</option>
                                        <option value="RE">Reunión</option>
                                        <option value="RW">Ruanda</option>
                                        <option value="RO">Rumania</option>
                                        <option value="RU">Rusia</option>
                                        <option value="EH">Sahara Occidental</option>
                                        <option value="KN">Saint Kitts y Nevis</option>
                                        <option value="WS">Samoa</option>
                                        <option value="AS">Samoa Americana</option>
                                        <option value="SM">San Marino</option>
                                        <option value="VC">San Vicente y Granadinas</option>
                                        <option value="SH">Santa Helena</option>
                                        <option value="LC">Santa Lucía</option>
                                        <option value="ST">Santo Tomé y Príncipe</option>
                                        <option value="SN">Senegal</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leona</option>
                                        <option value="SG">Singapur</option>
                                        <option value="SY">Siria</option>
                                        <option value="SO">Somalia</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="PM">St Pierre y Miquelon</option>
                                        <option value="SZ">Suazilandia</option>
                                        <option value="SD">Sudán</option>
                                        <option value="SE">Suecia</option>
                                        <option value="CH">Suiza</option>
                                        <option value="SR">Surinam</option>
                                        <option value="TH">Tailandia</option>
                                        <option value="TW">Taiwán</option>
                                        <option value="TZ">Tanzania</option>
                                        <option value="TJ">Tayikistán</option>
                                        <option value="TF">Territorios franceses del Sur</option>
                                        <option value="TP">Timor Oriental</option>
                                        <option value="TG">Togo</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">Trinidad y Tobago</option>
                                        <option value="TN">Túnez</option>
                                        <option value="TM">Turkmenistán</option>
                                        <option value="TR">Turquía</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UA">Ucrania</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistán</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VE">Venezuela</option>
                                        <option value="VN">Vietnam</option>
                                        <option value="YE">Yemen</option>
                                        <option value="YU">Yugoslavia</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabue</option>
                                    </select></td>
                            </tr> 
                        </table>
 
                    </div><!--dividimos la el formulario en 3-->
                    <div class="span4">
                        <table>
                            <tr class="control-group"> 
                                <td><label class="control-label">Comunidad Autónoma:</label></td>
                                <td><select name="comunidad" id="comunidad">
                                        <option value="0">Escoja una de estas opciones</option>
                                        <option value="Andalucía">Andalucía</option>
                                        <option value="Aragón">Aragón</option>
                                        <option value="Principado de Asturias">Principado de Asturias</option>
                                        <option value="Islas Baleares">Islas Baleares</option>
                                        <option value="País Vasco">País Vasco</option>
                                        <option value="Canarias">Canarias</option>
                                        <option value="Cantabria">Cantabria</option>
                                        <option value="Castilla-La Mancha">Castilla-La Mancha</option>
                                        <option value="Castilla y León">Castilla y León</option>
                                        <option value="Cataluña">Cataluña</option>
                                        <option value="Extremadura">Extremadura</option>
                                        <option value="Galicia">Galicia</option>
                                        <option value="Comunidad de Madrid">Comunidad de Madrid</option>
                                        <option value="Región de Murcia">Región de Murcia</option>
                                        <option value="Comunidad Foral de Navarra">Comunidad Foral de Navarra</option>
                                        <option value="La Rioja">La Rioja</option>
                                        <option value="Comunidad Valenciana">Comunidad Valenciana</option>
                                        <option value="Ceuta">Ceuta</option>
                                        <option value="Melilla">Melilla</option>
                                    </select></td>
                            </tr>
                            <tr class="control-group"> 
                                <td><label class="control-label">Provincia:</label></td>
                                <td><select name="provincia" id="provincia">
                                        <option value='0'>(Seleccionar)</option>
                                        <option value='Alava'>Álava</option>
                                        <option value='Albacete'>Albacete</option>
                                        <option value='Alicante'>Alicante/Alacant</option>
                                        <option value='Almeria'>Almería</option>
                                        <option value='Asturias'>Asturias</option>
                                        <option value='Avila'>Ávila</option>
                                        <option value='Badajoz'>Badajoz</option>
                                        <option value='Barcelona'>Barcelona</option>
                                        <option value='Burgos'>Burgos</option>
                                        <option value='Caceres'>Cáceres</option>
                                        <option value='Cadiz'>Cádiz</option>
                                        <option value='Cantabria'>Cantabria</option>
                                        <option value='Castellon'>Castellón/Castelló</option>
                                        <option value='Ceuta'>Ceuta</option>
                                        <option value='Ciudad Real'>Ciudad Real</option>
                                        <option value='Cordoba'>Córdoba</option>
                                        <option value='Cuenca'>Cuenca</option>
                                        <option value='Girona'>Girona</option>
                                        <option value='Las Palmas'>Las Palmas</option>
                                        <option value='Granada'>Granada</option>
                                        <option value='Guadalajara'>Guadalajara</option>
                                        <option value='Guipuzcoa'>Guipúzcoa</option>
                                        <option value='Huelva'>Huelva</option>
                                        <option value='Huesca'>Huesca</option>
                                        <option value='Islas Baleares'>Illes Balears</option>
                                        <option value='Jaen'>Jaén</option>
                                        <option value='La Coruña'>A Coruña</option>
                                        <option value='La Rioja'>La Rioja</option>
                                        <option value='Leon'>León</option>
                                        <option value='Lleida'>Lleida</option>
                                        <option value='Lugo'>Lugo</option>
                                        <option value='Madrid'>Madrid</option>
                                        <option value='Malaga'>Málaga</option>
                                        <option value='Melilla'>Melilla</option>
                                        <option value='Murcia'>Murcia</option>
                                        <option value='Navarra'>Navarra</option>
                                        <option value='Ourense'>Ourense</option>
                                        <option value='Palencia'>Palencia</option>
                                        <option value='Pontevedra'>Pontevedra</option>
                                        <option value='Salamanca'>Salamanca</option>
                                        <option value='Segovia'>Segovia</option>
                                        <option value='Sevilla'>Sevilla</option>
                                        <option value='Soria'>Soria</option>
                                        <option value='Tarragiba'>Tarragona</option>
                                        <option value='Santa Cruz de Tenerife'>Santa Cruz de Tenerife</option>
                                        <option value='Teruel'>Teruel</option>
                                        <option value='Toledo'>Toledo</option>
                                        <option value='Valencia'>Valencia/Valéncia</option>
                                        <option value='Valladolid'>Valladolid</option>
                                        <option value='Vizcaya'>Vizcaya</option>
                                        <option value='Zamora'>Zamora</option>
                                        <option value='Zaragoza'>Zaragoza</option>
                                    </select></td>
                            </tr>
                            <tr class="control-group"> 
                                <td><label class="control-label">Ciudad:</label></td>
                                <td><input type="text" class="control" id="ciudad" placeholder="Ciudad"></td>
                            </tr>
                            <tr class="control-group"> 
                                <td><label class="control-label">CP:</label></td>
                                <td><input type="text" class="control" id="cp" placeholder="Código Postal"></td>
                            </tr>
                            <tr>
                                <td><label class="control-label">Insertar:</label></td>
                                <td><button class="control btn btn-block btn-inverse" id="btnInsertarHuesped" name="btnInsertarHuesped">Click</button></td>
                            </tr>
                        </table>
                    </div><!--dividimos la el formulario en 3-->                    
                    
                <div class="row-fluid" id="mensajeInsercionHuespedes"></div>                
                <!--////////// FIN INSERCION /////////////-->
            </div>
            
            
            
            <div class="row-fluid" id="empresas" name="empresas">e</div>
            <div class="row-fluid" id="agencias" name="agencias">a</div>
        </div>
                    
                    
                    <div id="DivInsercion" class="row-fluid"></div> 
                </div>

                <script>
                    function cargaTipoCliente(_var1){
                        switch(_var1){
                            case 1:
                                $('#huespedes').show("fast");
                                $('#empresas,#agencias').hide();break;
                            case 2:
                                $('#empresas').show("fast");
                                $('#huespedes,#agencias').hide();break;
                            case 3:
                                $('#agencias').show("fast");
                                $('#empresas,#huespedes').hide();break;
                        }
                    }
                    
                    $(document).ready(function(){
                        $('#empresas,#agencias').hide();
                        
                    $('#btnInsertarHuesped').on('click',function(){
                    var _DNI = $('#DNI').val();
                    var _nombre = $('#nombre').val();
                    var _apellido1 = $('#apellido1').val();
                    var _apellido2 = $('#apellido2').val();
                    var _direccion = $('#direccion').val();
                    var _email = $('#email').val();
                    var _telefono = $('#telefono').val();
                    var _pais = $('#pais').val();
                    var _comunidad = $('#comunidad').val();
                    var _provincia = $('#provincia').val();
                    var _ciudad = $('#ciudad').val();
                    var _cp = $('#cp').val();
                    
                    $('#mensajeInsercionHuespedes').load('PHP/insercionHuesped.php',{
                       DNI : _DNI,
                       Nombre: _nombre,
                       Apellido1: _apellido1,
                       Apellido2: _apellido2,
                       Direccion: _direccion,
                       Email: _email,
                       Telefono: _telefono,
                       Pais: _pais,
                       Comunidad: _comunidad,
                       Provincia: _provincia,
                       Ciudad: _ciudad,
                       Cp: _cp
                    });
                });
                        
                        
                        
                    });

                        
                        
                        
                       
                
                    
                    
                </script>
                
                
                
    </body>
</html>

<?php 
?>



