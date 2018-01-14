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
