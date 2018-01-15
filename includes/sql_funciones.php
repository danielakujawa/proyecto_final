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

    move_uploaded_file($_FILES["imagen_1"]["tmp_name"],
            "../images/".$_FILES["imagen_1"]["name"]);
    move_uploaded_file($_FILES["imagen_2"]["tmp_name"],
            "../images/".$_FILES["imagen_2"]["name"]);
    move_uploaded_file($_FILES["imagen_3"]["tmp_name"],
            "../images/".$_FILES["imagen_3"]["name"]);


    $sql = "
            INSERT INTO
            productos (destino, fecha, capacidad, descripcion, informacion,
            detalles, imagen_1, imagen_2, imagen_3)
            VALUES ('".$data["destino"]."','".$data["fecha"]."','".$data
            ["capacidad"]."','".$data["descripcion"]."','".$data["informacion"]."','".$data
            ["detalles"]."','../images/".$_FILES["imagen_1"]["name"]."',
            '../images/".$_FILES["imagen_2"]["name"]."','../images/".$_FILES["imagen_3"]["name"]."')"
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

/* actualizar productos con imagen 1, 2 y 3 */
function actualizar_productos($id, $data){

    if(($_FILES["imagen_1"]["name"]) or ($_FILES["imagen_2"]["name"]) or
  ($_FILES["imagen_3"]["name"])){

        move_uploaded_file($_FILES["imagen_1"]["tmp_name"],
            "../images/".$_FILES["imagen_1"]["name"]);
        move_uploaded_file($_FILES["imagen_2"]["tmp_name"],
            "../images/".$_FILES["imagen_2"]["name"]);
        move_uploaded_file($_FILES["imagen_3"]["tmp_name"],
            "../images/".$_FILES["imagen_3"]["name"]);

        $sql = "
            UPDATE
                productos
            SET
                destino='".$data["destino"]."', fecha='".$data["fecha"]."', "
                . "capacidad='".$data["capacidad"]."', descripcion='".$data["descripcion"]."', "
                . "informacion='".$data["informacion"]."', "
                . "detalles='".$data["detalles"]."', "
                . "imagen_1='../images/".$_FILES["imagen_1"]["name"]."', "
                . "imagen_2='../images/".$_FILES["imagen_2"]["name"]."', "
                . "imagen_3='../images/".$_FILES["imagen_3"]["name"]."'


            WHERE id = ".$id."
                                ";

    }else{

        $sql = "

          UPDATE
            productos
        SET
            destino='".$data["destino"]."', fecha='".$data["fecha"]."', "

            . "capacidad='".$data["capacidad"]."', descripcion='".$data["descripcion"]."', "
            . "informacion='".$data["informacion"]."', "
            . "detalles='".$data["detalles"]."', "
            . "imagen_1='../images/".$_FILES["imagen_1"]["name"]."', "
            . "imagen_2='../images/".$_FILES["imagen_2"]["name"]."', "
            . "imagen_3='../images/".$_FILES["imagen_3"]["name"]."'

        WHERE id = ".$id."
                            ";

    }


    mysql_query($sql);
    header("Location: index_logado.php");
/* FIN actualizar productos con imagen 1, 2 y 3*/

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
