<?php session_start(); ?>

<?php
    if($_SESSION["variableLogin"] =="Aceptado" &&
            $_COOKIE["accesoUsuario"] == "Aceptado"){
        include "../includes/control.php";

?>

<?php
    if (isset($_POST["destino"])){
        anadir_productos($_POST);
    }else{
?>

<form action="nuevoproducto.php" method="post" enctype="multipart/form-data">
    <fieldset>

        <legend>Nuevo producto</legend>
        <label>Destino: </label> <input type="text" name="destino"/>
        <br/><br/>

        <label>Fecha: </label> <input type="text" name="fecha"/>
        <br/><br/>

        <label>Capacidad: </label> <input type="text" name="capacidad"/>
        <br/><br/>

        <label>Descripcion: </label><textarea name="descripcion"></textarea>
        <br/><br/>

        <label>Informacion: </label><textarea name="informacion"></textarea>
        <br/><br/>

        <label>Detalles: </label><textarea name="detalles"></textarea>
        <br/><br/>

        <label>Imagen 1: </label> <input type="file" name="imagen_1"/>
        <br/><br/>

        <label>Imagen 2: </label> <input type="file" name="imagen_2"/>
        <br/><br/>

        <label>Imagen 3: </label> <input type="file" name="imagen_3"/>
        <br/><br/>

        <input type="submit" value="guardar"/>

    </fieldset>
</form>

<?php
    }
?>

<?php

    }else{
?>
            <h1>Usuario o contrase�a incorrectos</h1>
<?php
            session_destroy();
        }
?>
