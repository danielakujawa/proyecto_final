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

    <script type="text/javascript" src="../scripts/tres_destinos.js"></script>

  </head>

<body>
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

<!-- main: contenido exclusivo de cada página -->
  <main>
    <!-- INCIO tres destinos (derecha e izquierda) -->
    <div id="contenedor">
      <div id="izquierda">
        <ul>
          <li>
            <img src="../images/imagen0.jpg" />
            <a href="#">Los Roques</a>
          </li>
          <li>
            <img src="../images/imagen1.jpg" />
            <a href="#">La Gran Sabana</a>
          </li>
          <li>
            <img src="../images/imagen2.jpg" />
            <a href="#">Mérida</a>
          </li>
        </ul>
      </div>
      <div id="derecha">
        <h5 style="color:red;">Haga click en el men&uacute; de la izquierda para m&aacute;s informaci&oacute;n</h5>
      </div>
    </div>
    <!-- FIN tres destinos (derecha e izquierda) -->
  </main>
<!-- END contenido exclusivo de cada página -->

  <footer>
    <div id="contenedor">
      <?php include '../includes/footer.php' ?>


    </div>
  </footer>
</div>
</body>
</html>
