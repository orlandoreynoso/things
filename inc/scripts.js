
$ = jQuery.noConflict();
/*
var waypoint = new Waypoint({
	element: document.getElementById('px-offset-waypoint'),
	handler: function(direction) {
		notify('I am 20px from the top of the window')
	},
	offset: 20
})
*/

$(document).ready(function() {



/*==== ver ancho de la pagina*/

var ancho = (document.body.clientWidth);
var alto = (document.body.clientHeight);

console.log("el ancho es: "+ ancho +  " Y el alto " + alto);

/*=======================================*/

/*
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 300) {
      nav.removeClass('normal').addClass('efecto');
    } else {
      nav.removeClass('efecto').addClass('normal');
    }
  });

*/
if(ancho >= 1360)
{
  $("#cover-somos .prev-somos").addClass('animated fadeInLeft');
  $("#cover-somos .leer-mas").addClass('animated fadeInRight');
  $("#cover-portada .afiche").addClass('animated fadeInUp');
} /*== Fin del if, para calculos de anchos mayores a 1360*/
else{

  $(window).scroll(function(){

    var cover = $(window).scrollTop();

if(cover >= 65){
    $("#cover-somos .prev-somos").addClass('animated fadeInLeft');
    $("#cover-somos .leer-mas").addClass('animated fadeInRight');
    $("#cover-portada .afiche").addClass('animated fadeInUp');
  }
  else{
    $("#cover-somos .prev-somos").removeClass('animated fadeInLeft');
    $("#cover-somos .leer-mas").removeClass('animated fadeInRight');
    $("#cover-portada .afiche").removeClass('animated fadeInUp');
  }

    var y = $(window).scrollTop();
    var divis = $("#caja1").offset();
    //divis  = divis.top;

    /*
    var divone = $("#div1").offset();
    divone = divone.top;  */
  /*
    $("#demo").html("y : " + y + "2 : " + divis + "1 : " + divone);
    $("#datosup").html("y : " + y + "2 : " + divis + "1 : " + divone);
    $("#datosmedio").html("y : " + y + "2 : " + divis + "1 : " + divone);
    $("#datosx").html("y : " + y + "2 : " + divis + "1 : " + divone);  */
  /*
    if( y >= 300){
      $("#caja1").addClass("animated fadeInUp");
      $("#caja2").addClass("animated fadeInUp");
      $("#caja3").addClass("animated fadeInUp");
    }
    else{
      $("#caja1").removeClass("animated fadeInUp");
      $("#caja2").removeClass("animated fadeInUp");
      $("#caja3").removeClass("animated fadeInUp");
    } */

  });


}  /* fin de la comprobación para tamaños menos a 1360 pixles de ancho*/



/*=====================================*/
/*
$('#caja1 .anima1').waypoint(function() {
	$('#caja1 .anima1').addClass('animated fadeInUp');
}, {
	offset: '60%'
});
*/


	var nombre = "orlando reynoso";
    console.log("Cargado completamente ");
  // alert(nombre);
	$(window).scroll(function() {
		/* Act on the event */
		var scroll = $(window).scrollTop();
		if(scroll >= 350){
			//console.log("llego a 300px");
		}
		else{

				}
	});
});

smoothScroll.init({
    speed: 700, // Integer. How fast to complete the scroll in milliseconds
    easing: 'easeInOutQuad', // Easing pattern to use
    updateURL: false, // Boolean. Whether or not to update the URL with the anchor hash on scroll
    offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
    callbackBefore: function ( toggle, anchor ) {}, // Function to run before scrolling
    callbackAfter: function ( toggle, anchor ) {} // Function to run after scrolling
});
