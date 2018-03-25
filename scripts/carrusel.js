var click = 0;

$(document).ready(function(){
  $("#siguiente").click(function(){

    click++;

    if(click<3){
      $("#interna").animate({
        left: "-=100px"
      }, 500);

    }else{

      click=0;
      $("#interna").animate({
        left: "10px"
      }, 500);
    }

  });
  $("#anterior").click(function(){

    if(click>0){
      click--;
      $("#interna").animate({
        left: "+=100px"
      }, 500);

    }else{

      click=2;
      $("#interna").animate({
        left: "-310px"
      }, 500);
    }

  });
});
