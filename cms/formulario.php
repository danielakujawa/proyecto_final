<?php
include "../includes/control.php";


  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $email = $_POST['email'];
  $telefono = $_POST['telefono'];
  $selectOption = $_POST['numero_personas'];


    $sql = "
            INSERT INTO
            solicitud_reservas (nombre, apellidos, email, telefono, numero_personas)
            VALUES ('$nombre','$apellidos','$email','$telefono','$selectOption')";

            $resultado = mysql_query($sql);


 ?>
