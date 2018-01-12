<?php session_start(); ?>

<?php
    if($_SESSION["variableLogin"] =="Aceptado" &&
            $_COOKIE["accesoUsuario"] == "Aceptado"){
        include "../includes/control.php";

?>


<?php

    $id = $_GET["id"];

    $producto = producto($id);

    if (isset($_POST["destino"])){
        actualizar_productos($id, $_POST);
    }else{

?>

<form action="editarproducto.php?id=<?php echo $id ?>"
      method="post" enctype="multipart/form-data">
    <fieldset>

        <legend>Editar producto<?php echo $id ?></legend>
        <label>Destino: </label> <input type="text" name="Destino"
            value="<?php echo $producto['destino'];?>"/><br/><br/>

            <label>Fecha: </label> <input type="text" name="fecha"
                value="<?php echo $producto['fecha'];?>"/><br/><br/>

                <label>Capacidad: </label> <input type="text" name="capacidad"
                    value="<?php echo $producto['capacidad'];?>"/><br/><br/>

        <label>Descripcion: </label><textarea name="descripcion">
            <?php echo $producto['descripcion'];?>
        </textarea><br/><br/>

        <label>Informacion: </label><textarea name="informacion">
            <?php echo $producto['informacion'];?>
        </textarea><br/><br/>

            <label>Detalles: </label><textarea name="detalles">
                <?php echo $producto['detalles'];?>
            </textarea>
        <br/><br/>

        <label>Imagen 1: </label> <input type="file" name="imagen_1" value=""/>
        <br/><br/>

        <label>Imagen actual: </label><img src="<?php
        echo $producto['imagen_1']; ?>" width="150" /><br/><br/>

        <label>Imagen 2: </label> <input type="file" name="imagen_2" value=""/>
        <br/><br/>

        <label>Imagen actual: </label><img src="<?php
        echo $producto['imagen_2']; ?>" width="150" /><br/><br/>

        <label>Imagen 3: </label> <input type="file" name="imagen_3" value=""/>
        <br/><br/>

        <label>Imagen actual: </label><img src="<?php
        echo $producto['imagen_3']; ?>" width="150" /><br/><br/>

        <input type="submit" value="guardar"/>

    </fieldset>
</form>

<?php
    }
?>

<?php

    }else{
?>
            <h1>Usuario o contrase&ntilde;a incorrectos</h1>
<?php
            session_destroy();
        }
?>
