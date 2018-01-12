<?php

function comprueba_usuario($usuario, $contrasena){
    $sql = "
            SELECT COUNT(id) as count
            FROM
                usuarios
            WHERE usuario = '".mysql_real_escape_string($usuario)."'
            and contrasena = '".mysql_real_escape_string($contrasena)."'

            ";

            $resultado = mysql_query($sql);
            $row = mysql_fetch_array($resultado);


            if($row["count"]==1){
                return true;
            }else{
                return false;
            }
}


function listado_productos(){
    $sql = "
            SELECT
                    *
            FROM
                productos
            ORDER BY
                productos.id ASC
           ";

    $resultado = mysql_query($sql);

    return $resultado;
    }


function anadir_productos($data){

    move_uploaded_file($_FILES["imagen"]["tmp_name"],
            "images/".$_FILES["imagen"]["name"]);


    $sql = "
            INSERT INTO
            productos (titulo, texto, descripcion, imagen)
            VALUES ('".$data["titulo"]."','".$data["texto"]."','".$data
            ["descripcion"]."','images/".$_FILES["imagen"]["name"]."')"
            . "";

            mysql_query($sql);
            header("Location: index_logado.php");

}

function producto($id){

    $sql = "

            SELECT
            *
            FROM
                productos
            WHERE id = ".$id."

            ";

            $resultado = mysql_query($sql);
            return mysql_fetch_array($resultado);
}


function actualizar_productos($id, $data){
    if($_FILES["imagen"]["name"] ){

        move_uploaded_file($_FILES["imagen"]["tmp_name"],
            "images/".$_FILES["imagen"]["name"]);

        $sql = "
            UPDATE
                productos
            SET
                titulo='".$data["titulo"]."', texto='".$data["texto"]."', "
                . "descripcion='".$data["descripcion"]."', "
                . "imagen='images/".$_FILES["imagen"]["name"]."'

            WHERE id = ".$id."
                                ";


    }else{

        $sql = "
            UPDATE
                productos
            SET
                titulo='".$data["titulo"]."', texto='".$data["texto"]."', "
                . "descripcion='".$data["descripcion"]."'

            WHERE id = ".$id."
                                ";

    }

            mysql_query($sql);
            header("Location: index_logado.php");

}


function borrar_productos($id){

$sql = "

            DELETE

            FROM
                productos
            WHERE id = ".$id."

            ";
            mysql_query($sql);
            header("Location: index_logado.php");

}

function detalle_producto($id){

$sql = "

            SELECT
            *
            FROM
                productos
            WHERE id = ".$id."

            ";

            $resultado = mysql_query($sql);
            return mysql_fetch_array($resultado);

}

?>
