<?php
include "../includes/control.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="../css/styles.css">
  <script type="text/javascript" src="../scripts/jquery.js"></script>
  <script type="text/javascript" src="../scripts/fecha.js"></script>
  <script type="text/javascript" src="../scripts/tabs.js"></script>
  <script type="text/javascript" src="../scripts/carrusel.js"></script>

</head>

<body onload="leeCookie();">
<div class="wrapper">
  <header class="principal">
      <div class="nombre">
        <?php include '../includes/header.php' ?>
      </div>
      <nav id="menu">
        <?php include '../includes/navigation.php' ?>
      </nav>
    </header>

<!-- Abajo: contenido exclusivo de cada página -->
  <main>
    <div id="contenedor">
    <?php
        $id = $_GET["id"];
        $producto = detalle_producto($id);
    ?>

    <?php echo "<h1>" .$producto['destino']."</h1>";?>
    <h2>frase sobre el destino</h2>


<!-- Carrusel -->
<div id="visorFotos">
  <div id="anterior">&larr;</div>
    <div id="interna">
      <img src="<?php echo $producto['imagen_1']; ?>" />
      <img src="<?php echo $producto['imagen_2']; ?>" />
      <img src="<?php echo $producto['imagen_3']; ?>" />
    </div>
  <div id="siguiente">&rarr;</div>
</div>
<!-- End Carrusel -->

  <h2>Fecha</h2>
  <?php echo $producto['fecha']; ?>

  <h2>Capacidad</h2>
  <?php echo $producto['capacidad']; ?>

<!-- PESTAÑAS -->
	<div id="pestanas">
		<ul>
      <li id="uno" onClick="cambiarContenido(0);">Descripción</li>
			<li id="dos" onClick="cambiarContenido(1);">Información</li>
			<li id="tres" onClick="cambiarContenido(2);">Detalles</li>
		</ul>
		<div class="limpia"></div>
	</div>
	<div id="contenidoUno" class="contenido">
		<h1>Descripción</h1>
		<?php echo $producto['descripcion'];?>
	</div>
	<div id="contenidoDos" class="contenido">
		<h1>Información</h1>
		<?php echo $producto['informacion']; ?>
	</div>
	<div id="contenidoTres" class="contenido">
		<h1>Detalles</h1>
		<?php echo $producto['detalles']; ?>
	</div>
</div>
<!-- END TRES PESTAÑAS -->
  </main>
<!-- END contenido exclusivo de cada página -->

  <footer><?php include '../includes/footer.php' ?></footer>
</div>
</body>
</html>
