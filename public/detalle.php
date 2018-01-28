<?php
include "../includes/control.php";
?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/fontello.css">

    <script src="http://code.jquery.com/jquery-latest.js"></script>

    <script type="text/javascript" src="../scripts/fecha.js"></script>
    <script type="text/javascript" src="../scripts/menu.js"></script>
    <script type="text/javascript" src="../scripts/tabs.js"></script>
    <script type="text/javascript" src="../scripts/carrusel.js"></script>
  </head>

<body onload="leeCookie();">
  <header>
    <div class="contenedor">
      <h1>Vzlaneando</h1>
      <input type="checkbox" id="btn-menu">
      <label for="btn-menu" class="icon-menu"></label>
      <nav class="menu">
        <ul>
          <li><a href="home.php">Inicio</a></li>
          <li class="submenu"><a href="#">Destinos<span class="icon-angle-down"></span></a>
            <ul>
              <li><a href="detalle.php?id=1">Los Roques</a></li>
              <li><a href="detalle.php?id=2">Mérida</a></li>
              <li><a href="detalle.php?id=3">Monte Roraima</a></li>
            </ul>
          </li>
          <li><a href="contacto.php">Contacto</a></li>
          <li><a href="../cms/index.php">Login</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
      <section id="bienvenidos" class="top-50">
        <?php echo "<h2>" .$producto['destino']."</h2>";?>
      </section>

    <div id="contenedor">
    <?php
        $id = $_GET["id"];
        $producto = detalle_producto($id);
    ?>
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
		<?php echo
     $producto['detalles']; ?>
	</div>
</div>
<!-- END TRES PESTAÑAS -->

<!--formulario -->

<form class="formulario-registro" name="formulario" method="post" action="../cms/formulario.php">
  <h2 class="formulario-titulo">Reserva tu cupo</h2>
  <div class="contenedor-inputs">
      <input name="nombre" type="text" placeholder="Nombre" class="input-48" required>
      <input name="apellidos" type="text" placeholder="Apellidos" class="input-48" required>
      <input name="email" type="text" placeholder="Email" class="input-100" required>
      <input name="telefono" type="text" placeholder="Teléfono" class="input-100" required>
      <label for="personas">¿Cuántas personas viajarán?</label>
      <div class="select">
        <select name="numero_personas" form="personas_formulario" required>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
        </select>
      </div>
      <input type="submit" value="reservar" class="boton-enviar" required>
  </div>
</form>
<!--END formulario -->

  <section id="info">
    <h3>¡Conoce nuestros próximos destinos!</h3>
    <div class="contenedor">
        <div class="info-des">
          <img src="../images/amazonas02.jpg" alt="">
          <h4>Amazonas</h4>
        </div>
        <div class="info-des">
          <img src="../images/chichirivichedelacosta01.jpg" alt="">
          <h4>Chichiriviche de la Costa</h4>
        </div>
        <div class="info-des">
          <img src="../images/gransabana01.jpg" alt="">
          <h4>La Gran Sabana</h4>
        </div>
        <div class="info-des">
          <img src="../images/margarita01.jpg" alt="">
          <h4>Isla de Margarita</h4>
        </div>
    </div>
  </section>

  </main>

  <footer>
    <div class="contenedor">
      <?php include '../includes/footer.php' ?>
    </div>
  </footer>
  <script src="../scripts/menu.js"></script>
</body>
</html>
