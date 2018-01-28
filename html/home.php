<!doctype html>
<html lang="es">
  <head>
    <title>Prueba</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,
initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/fontello.css">

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="../scripts/fecha.js"></script>

  </head>

  <body>
    <header>
      <div class= "contenedor">
          <h1>Vzlaneando</h1>
          <input type="checkbox" id="menu-bar">
          <label class="icon-menu" for="menu-bar"></label>
          <nav class="menu">
              <a href="">Inicio</a>
              <a href="">Destinoss</a>
              <a href="">Contacto</a>
              <a href="">Login</a>
          </nav>
      </div>
    </header>

    <main>
      <section id="banner">
          <img src="img/merida01.jpg">
          <div class="contenedor">
              <h2>Mascotas y niños felices</h2>
              <p>Cuál es la mejor mascota para usted?</p>
              <a href="#">Leer más</a>
          </div>
      </section>

      <section id="bienvenidos">
          <h2>BIENVENIDOS A VENEZUELA</h2>
          <P>Lorem ipsum dolor sit amet</P>
      </section>

      <section id="destinos">
          <h3>Lo último de nuestro blog</h3>
          <div class="contenedor">
              <article>
                  <img src="img/merida01.jpg"alt="">
                  <h4><a href="#destino-seleccionado">Los Roques</a></h4>
              </article>
              <article>
                  <img src="img/roques01.jpg"alt="">
                  <h4><a href="#destino-seleccionado">La Gran Sabana</a></h4>
              </article>
              <article>
                  <img src="img/roraima01.jpg"alt="">
                  <h4><a href="#destino-seleccionado">Mérida</a></h4>
              </article>
          </div>
      </section>

      <section id="destino-x">
        <h5 id="destino-seleccionado" style="padding-top:50px;"></h5>
          <script type="text/javascript" src="../scripts/tres_destinos.js"></script>
      </section>

      <section id="info">
          <h3>Para muchos de nosotros las Mascotas
            no son simples compañeros, son mienbros de la familia</h3>
          <div class="contenedor">
              <div class="info-pet">
                <img src="img/merida02.jpg" alt="">
                <h4>Destinos</h4>
              </div>
              <div class="info-pet">
                <img src="img/roques02.jpg" alt="">
                <h4>Destinos</h4>
              </div>
              <div class="info-pet">
                <img src="img/roraima02.jpg" alt="">
                <h4>Destinos</h4>
              </div>
              <div class="info-pet">
                <img src="img/merida03.jpg" alt="">
                <h4>Destinos</h4>
              </div>
          </div>
      </section>
    </main>

    <footer>
      <div class="contenedor">
          <?php include '../includes/footer.php' ?>
      </div>
    </footer>
  </body>
</html>
