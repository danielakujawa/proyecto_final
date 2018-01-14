<?php
include "../includes/control.php";
?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="../css/styles.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="../scripts/fecha.js"></script>
    <script type="text/javascript" src="../scripts/menu.js"></script>
    <script type="text/javascript" src="../scripts/tabs.js"></script>
    <script type="text/javascript" src="../scripts/carrusel.js"></script>
  </head>

<body onload="leeCookie();">

  <header>
    <div class="menu_bar">
      <a href="#" class="bt-menu nombre" style="text-decoration:none;"><span><img src="../images/menu.png" /></span><?php include '../includes/header.php' ?></a>
    </div>
    <nav>
      <div class="oculto-en-movil nombre">
          <?php include '../includes/header.php' ?>
      </div>
      <div class="navi">
        <?php include '../includes/navigation.php' ?>
      </div>
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
