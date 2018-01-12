<?php session_start(); ?>

<?php
    if($_SESSION["variableLogin"] =="Aceptado" &&
            $_COOKIE["accesoUsuario"] == "Aceptado"){
        include "../includes/control.php";

?>


<?php

    $id = $_GET["id"];

    borrar_productos($id);

?>

<?php
            }else{

?>

<h1>Usuario o contrase&ntilde;a incorrectos</h1>

<?php
            session_destroy();
        }
?>
