$(document).ready(function(){
  $("#izquierda li").click(function(){
    $("#derecha div").remove();
    $(this).children().clone().insertAfter('#derecha h5').wrapAll('<div>');
    $("#derecha img").css("width", "200px").css("float", "left").css("margin", "10px");
    $("#derecha a").css("fontSize", "25px");
    switch($("#derecha div a").text()){
      case 'Los Roques':
        $("<p>La República Dominicana Vivamus mattis felis id orci rhoncus rhoncus. Integer blandit vel lacus eget accumsan. Donec ultrices dolor augue, id convallis nisi gravida tincidunt. Curabitur sit amet sapien arcu. Curabitur condimentum blandit tortor nec maximus. Nunc non erat id lacus ultricies semper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer id velit mauris. Nullam et velit libero. Cras vitae leo facilisis, efficitur mi id, ultricies neque. Morbi quis gravida odio. Proin ligula nibh, vestibulum nec lacinia sit amet, maximus non velit. Mauris erat ex, malesuada et lectus vitae, mattis feugiat purus.</p>").insertAfter('#derecha a').hide().fadeIn(1000);
        break;
        case 'La Gran Sabana':
        $("<p>Las Islas Fiji lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eleifend risus purus, ut gravida libero sagittis non. Cras non tristique nunc. Suspendisse id condimentum lorem. Vivamus maximus condimentum ligula eget placerat. Suspendisse rutrum hendrerit dictum. Cras quis ligula vitae urna consequat varius et non mauris. Nunc dictum fermentum augue, finibus sollicitudin nisl molestie vitae. Fusce eu enim eget urna imperdiet ullamcorper. Sed quis ligula tempor, feugiat nulla viverra, eleifend lorem. Praesent nisi lacus, cursus mattis metus a, laoreet malesuada magna. Proin scelerisque pellentesque nisl, in vehicula ante vulputate sit amet. Mauris aliquam erat hendrerit justo fringilla, non elementum augue venenatis. Quisque quis ipsum eu nulla semper malesuada eu quis sem. Cras augue leo, euismod ullamcorper varius non, malesuada lobortis mi</p>").insertAfter('#derecha a').hide().fadeIn(1000);
        break;
        case 'Mérida':
        $("<p>Islas Seychelle aenean et lectus mollis, lobortis nibh vel, pretium lacus. Mauris ipsum nunc, faucibus eu leo dapibus, scelerisque facilisis ex. Quisque aliquet velit finibus, venenatis velit non, fermentum arcu. Aliquam lobortis facilisis nisl tincidunt viverra. Mauris ultrices facilisis enim, nec mattis felis consectetur ut. Nulla facilisi. Sed odio ante, suscipit a pharetra nec, iaculis quis dui. Curabitur vehicula lacus in leo viverra porta. Maecenas sit amet scelerisque enim. Suspendisse ante dui, tempor nec nisi sed, interdum tincidunt tellus. Duis non ex eu quam commodo maximus. Nullam suscipit consectetur tellus, sed faucibus risus sodales sit amet. Nam cursus nisi leo, nec cursus velit condimentum ultrices. Mauris at eleifend quam, eget gravida est.</p>").insertAfter('#derecha a').hide().fadeIn(1000);
        break;
      }
    });
  });
