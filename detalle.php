<?php
include "includes/control.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="css/styles.css">
  <script type="text/javascript" src="scripts/jquery.js"></script>
  <script type="text/javascript" src="scripts/fecha.js"></script>

</head>

<body>
<div class="wrapper">
  <header class="principal">
      <div class="nombre">
        <?php include 'includes/header.php' ?>
      </div>
      <nav id="menu">
        <?php include 'includes/navigation.php' ?>
      </nav>
    </header>

<!-- Abajo: contenido exclusivo de cada página -->
  <main>
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
      <img src="<?php echo $producto['imagen_1']; ?>" width="200" class="detalle" />
      <img src="<?php echo $producto['imagen_2']; ?>" width="200" class="detalle" />
      <img src="<?php echo $producto['imagen_3']; ?>" width="200" class="detalle" />
    </div>
  <div id="siguiente">&rarr;</div>
</div>

<!-- End Carrusel -->

<!-- TRES PESTAÑAS -->
<style type="text/css">
	*{
		margin:0;
		padding:0;
	}
	#contenedor{
		padding:30px;
	}
	div img{
		width:200px;
	}
	.contenido{
		padding:20px;
		border: 1px solid #c0c0c0;
		width:400px;
	}
	.limpia{
		clear:both;
	}
	#pestanas ul li{
		float:left;
		list-style-type:none;
		border:1px solid #c0c0c0;
		border-bottom:none;
		padding:5px;
		position:relative;
		background-color:#ffffff;
		margin-right:3px;
	}
	#contenidoDos, #contenidoTres{
		display:none;
	}
	#uno{
		top:3px;
	}
</style>

<script type="text/javascript" language="javascript">


    function cambiarContenido(pest){

    var pestanas = document.getElementsByTagName("li");


    /* ESTA NO ES LA MANERA CORRECTA DE DECLARAR LA MATRIZ EN ESTE CASO
    var cont = new Array("document.getElementById('contenidoUno')",
    "document.getElementById('contenidoDos')", "document.getElementById('contenidoTres')");
*/

 var cont = [document.getElementById('contenidoUno'),document.getElementById('contenidoDos'), document.getElementById('contenidoTres')];

    for(var indice = 0 ; indice < pestanas.length ; indice++){
      if(
        cont[indice]
      ){
        pestanas[indice].style.top = "0px";
  			cont[indice].style.display = "none";
      }

		}

    pestanas[pest].style.top= "3px";
		cont[pest].style.display = "block";


        grabaCookie(pest);

    }

            function grabaCookie(pestan){

                document.cookie = "pestana=" + pestan;
            }

            function leeCookie (){

                variableCookie= unescape(document.cookie);
                if (variableCookie){

                        var galleta = variableCookie;
                        var valores = variableCookie.split("=");

                cambiarContenido(valores[1]);}

            }



</script>

<!-- <body onload="leeCookie();"> -->
<div onload="leeCookie();" id="contenedor">


  <h2>Fecha</h2>
  <?php echo $producto['fecha']; ?>

  <h2>Capacidad</h2>
  <?php echo $producto['capacidad']; ?>

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

  <footer><?php include 'includes/footer.php' ?></footer>
</div>
</body>
</html>
