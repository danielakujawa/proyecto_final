<!doctype html>
<html lang="es">
  <head>
    <title>Vzlaneando: Inicio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,
initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/fontello.css">

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="../scripts/fecha.js"></script>
  </head>

  <body>
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
      <section id="banner">
          <img src="../images/amazonas01.jpg">
          <div class="contenedor">
              <h2>Venezuelandiando</h2>
              <p>Excursiones por Venezuela</p>
          </div>
      </section>

      <section id="bienvenidos">
          <h2>BIENVENIDOS A VENEZUELA</h2>
          <P>Lorem ipsum dolor sit amet</P>
      </section>

      <section id="destinos">
          <h3>Nuestros destinos:</h3>
          <div class="contenedor">
              <article>
                  <img src="../images/roques03.jpg"alt="">
                  <h4><a href="#destino-seleccionado">Los Roques</a></h4>
              </article>
              <article>
                  <img src="../images/roraima02.jpg"alt="">
                  <h4><a href="#destino-seleccionado">Roraima</a></h4>
              </article>
              <article>
                  <img src="../images/merida02.jpg"alt="">
                  <h4><a href="#destino-seleccionado">Mérida</a></h4>
              </article>
          </div>
      </section>

      <section id="destino-x">
        <h5 id="destino-seleccionado" style="padding-top:50px;"></h5>
          <script type="text/javascript" src="../scripts/tres_destinos.js"></script>
      </section>

      <section id="mapa">
        <h3>Encuentra nuestros destinos en el mapa</h3>
        <div class="contenedor">
          <iframe src="https://snazzymaps.com/embed/43892" width="100%" height="450px" style="border:none;"></iframe>
        </div>
      </section>


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
