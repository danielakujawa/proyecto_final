<?php session_start(); ?>
<?php
    include "../includes/control.php";
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    $existe = comprueba_usuario($usuario, $contrasena);

    if($existe){
        $_SESSION["variableLogin"] = "Aceptado";
        setcookie("accesoUsuario", "Aceptado");
    }else{
        $_SESSION["variableLogin"] = "sin valor";
        setcookie("accesoUsuario");
    }

    header("Location: index_logado.php");
?>
