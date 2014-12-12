<?php
include './funciones.php';
$conexion = conectaBBDD();

$id = $_POST["id"];

echo'<div class="span6"><h4>Está seguro que desea borrar al empleado?</h4></div>
            <div class="span6">
                <button class="btn btn-primary" onclick="aceptar('.$id.');" style="padding-left: 10px;padding-right: 10px;" name="a" id="a">Aceptar</button>
                <button class="btn btn" onclick="cancela();">Cancelar</button>
                <input class="text" placeholder="Comentarios" name="comentarios" id="comentarios"/>                
</div>';

?>

<script>
    
    
            function aceptar(_var1){
                var _comen = $('#comentarios').val();
                $('#p').load('borradoUsuario_2.php',{
                id:_var1,
                comentario:_comen
            });             
            }
            
            function cancela(){
                location.href = 'gestionUsuarios.php';                            
            }    
</script>

