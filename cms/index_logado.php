<?php session_start(); ?>

<?php
    if($_SESSION["variableLogin"] == "Aceptado" &&
            $_COOKIE["accesoUsuario"] == "Aceptado"){
        include "../includes/control.php";

?>

<?php   echo ("<table><tr class='cabecera'><td>ID</td><td>Destino</td>"
            . "<td class='btn'>Ver</td><td class='btn'>Editar</td>"
            . "<td class='btn'>Borrar</td><td class='btn'>Nuevo</td></tr>");

    $productos = listado_productos();
    while ($row = mysql_fetch_array($productos)){

        echo ("<tr>\n");
        echo ("\t <td>".$row["id"]."</td>\n");
        echo ("\t <td>".$row["destino"]."</td>\n");
        echo ("\t <td class='btn'><a href='../detalleproducto."
                . "php?id=".$row["id"]."'><img src='../images/ver.png'></td>\n");
        echo ("\t <td class='btn'><a href='editarproducto."
                . "php?id=".$row["id"]."'><img src='../images/editar.png'></td>\n");
        echo ("\t <td class='btn'><a href='borrarproducto."
                . "php?id=".$row["id"]."'><img src='../images/eliminar.png'></td>\n");
        echo ("\t <td class='btn'><a href='nuevoproducto."
                . "php?id=".$row["id"]."'><img src='../images/nuevo.png'></td>\n");
        echo ("</tr>\n");
    }

        echo ("</table>");
?>
<?php       }else{

?>
            <h1>Usuario o contrase&ntilde;a incorrectos</h1>
<?php

session_destroy();
header("Location: index.php");
        }
?>
