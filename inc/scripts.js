
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

  $('.bxslider').bxSlider({
    auto: true,
    mode: 'fade',
    captions: true,
    slideWidth: 600
  });


/*Tamaños de las pantallas*/

  var div_ancho = $("#masthead").width();
  var div_alto = $("#masthead").height();
  console.log("ancho masthead: "+div_ancho+" alto masthead: "+div_alto);
  
/*==== ver ancho de la pagina*/

var ventana_ancho = $(window).width();
var ventana_alto = $(window).height();

var ancho = (document.body.clientWidth);
var alto = (document.body.clientHeight);

var valor = ventana_alto - div_alto;
console.log("valor: "+valor);
var slider = $("#pre-slider").height();

//slider.height('100vh' - div_alto);

//$('.c-slider').css('height', '100vh');
//calc(100% - 30px);
$('.c-slider').css('height',valor+'px');
$('body .metaslider .flexslider .slides img').css('height',valor+'px');
//$('.c-slider').height(calc('100% - 10%'));

//console.log(valores);
console.log("jugo: "+slider);

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
