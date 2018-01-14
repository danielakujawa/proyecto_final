<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <link rel="stylesheet" href="../css/styles.css">
  <script type="text/javascript" src="../scripts/jquery.js"></script>
  <script type="text/javascript" src="../scripts/fecha.js"></script>
  <script type="text/javascript" src="../scripts/tres_destinos.js"></script>

</head>

<body>
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
