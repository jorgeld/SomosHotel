<?php
include './funciones.php';
$conexion = conectaBBDD();

$id = $_POST["id"];

echo'<div class="span6"><h4>Está seguro que desea borrar al empleado?</h4></div>
            <div class="span6">
                <button class="btn btn-primary" style="padding-left: 10px;padding-right: 10px;" name="a" id="a">Aceptar</button>
                <button class="btn btn" onclick="cancela();">Cancelar</button>
                <input class="text" placeholder="Comentarios" name="comentarios" id="comentarios"/>
</div>';
?>

<script>
//         function borrado2(_var1){
//            $('#p').load('borradoUsuario_2.php',{
//                id:_var1
//            });
//        }
            function cancela(){
                location.href = 'zonaAdmin.php';
                    enlaza(2);
            }    
</script>

