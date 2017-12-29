<?php 


function estilos_woo(){
/*


Esta forma hace llamar a los estilos pero del theme  Padre yo del hijo.
wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array('parent-theme'), '4.0.0');

Para el tema hijo, es preciso usar get_stylesheet_directory_uri() para la ruta.



wp_register_style('style', get_stylesheet_directory_uri().'/css/style.css', array(), '1.0');
wp_register_style('estilo', get_stylesheet_directory_uri().'/css/estilo.css', array(), '1.0');
	wp_enqueue_style('style');
	wp_enqueue_style('estilo'); */


	// Registrar los estilos
	wp_register_style('fonts_google', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700,700i|Oswald:400,700', array(), '1.0.0');
	wp_register_style('bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.min.css', array(), '4.0.0');
	wp_register_style('style', get_stylesheet_directory_uri().'/style.css', array(), '1.0');
	wp_register_style('estilo', get_stylesheet_directory_uri().'/css/estilo.css', array(), '7.0');
  wp_register_style('animate', get_stylesheet_directory_uri().'/css/animate.css', array(), '7.0');
	wp_register_style('fontawesome', get_stylesheet_directory_uri().'/css/font-awesome.min.css', array(), '4.7.0');



	//Llamar a los estilos
	wp_enqueue_style('style');
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('estilo');
  wp_enqueue_style('animate');
	wp_enqueue_style('fonts_google' );
	wp_enqueue_style('fontawesome');


	//registrar Js, agregamos al final true para que nuestros Js se cargen en el footer.
	//wp_register_script('analitics', get_template_directory_uri().'/js/google.js', array(), '1.0.0', true );
	wp_register_script('bootstrapjs', get_stylesheet_directory_uri().'/js/bootstrap.js', array('jquery'),'4.0.0', true);
	wp_register_script('popper', get_stylesheet_directory_uri().'/js/popper.min.js', array('jquery'),'4.0.0', true);
  wp_register_script('waypoint', get_stylesheet_directory_uri().'/js/waypoint.js', array('jquery'),'4.0.0', true);
  wp_register_script('smoothscroll', get_stylesheet_directory_uri().'/js/smooth-scroll.js', array('jquery'),'4.0.0', true);
  wp_register_script('scripts', get_stylesheet_directory_uri().'/inc/scripts.js', array('jquery'),'1.0.0', true);
	wp_register_script('menu', get_stylesheet_directory_uri().'/js/menu.js', array('jquery'),'2.0.0', true);

	wp_enqueue_script('jquery');
	//wp_enqueue_script('analitics');
	wp_enqueue_script('popper');
	wp_enqueue_script('bootstrapjs');
	wp_enqueue_script('smoothscroll');
	wp_enqueue_script('waypoint');
	wp_enqueue_script('scripts');
	wp_enqueue_script('menu');


}

add_action('wp_enqueue_scripts','estilos_woo');



?>