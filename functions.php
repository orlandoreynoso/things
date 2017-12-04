<?php 
/* devuelve el directorio de stilo de css, y se le asigna a temppath */
define('TEMPPATH',get_bloginfo('stylesheet_directory'));
/*En esto concatenamos la carpeta images*/
define('IMAGES',TEMPPATH. "/images");
//define('HOME',bloginfo('url' ));
// Esto es para aderir una imágen destacada.
add_theme_support('post-thumbnails');
//add_image_size( $name, $width, $height, $crop );
/*========== incluyendo los estilo que uso ===============*/
//include (TEMPLATEPATH. '/inc/estilos.php');
//add_image_size( $name, $width, $height, $crop );
the_post_thumbnail('thumbnail',1024,1024,true);       // Tamaño de la miniatura 150x150 píxeles 
the_post_thumbnail('medium',300,300, true);          // Tamaño de la mediano 300x300 píxeles
the_post_thumbnail('large');
the_post_thumbnail('pastorales', 751, 422, true);
the_post_thumbnail('comunidades', 1100, 404, true);
the_post_thumbnail('full'); // La resolución original
//set_post_thumbnail_size(1024,1024,true );

function menus_generales(){
  register_nav_menus(array(
    'menu-redes'=>__('Menu Redes','credie')
  ));
}

add_action('init','menus_generales');


function estilos_woo(){
/*
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

function admin_woo(){

wp_register_style('style', get_stylesheet_directory_uri().'/login/style.css', array(), '1.0');
	wp_enqueue_style('style');
}

add_action('login_enqueue_scripts','admin_woo');

/*==== modificando el header==========*/

if (function_exists('register_sidebar')) {
    register_sidebar(
        array(
            'name' => 'Buscador woo',
            'id' => 'buscador_woo'
    ));
}


add_action( 'init', 'deletear' );

function deletear(){
	remove_action('storefront_header','storefront_skip_links',0);
	remove_action('storefront_header','storefront_social_icons',10);
	remove_action('storefront_header','storefront_site_branding',20);
	remove_action('storefront_header','storefront_secondary_navigation',30);
	remove_action('storefront_header','storefront_product_search',40);
	remove_action( 'storefront_header', 'storefront_site_branding', 20 );
	//remove_action('storefront_header','storefront_primary_navigation_wrapper',42);
	//remove_action('storefront_header','storefront_primary_navigation',50);
	//remove_action('storefront_header','storefront_header_cart',60);
	//remove_action('storefront_header','storefront_primary_navigation_wrapper_close',68);

}
/*

add_action( 'init', 'storefront_custom_logo' );

function storefront_custom_logo() {
	add_action( 'storefront_header', 'storefront_display_custom_logo',1);
}  */

function storefront_display_custom_logo() {
?>
<div class="ca-logo">
  <a class="logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/crediempenos.png" alt="<?php echo get_bloginfo( 'name' ); ?>">
  </a>
</div>

<?php
}


/*======================================================*/
  //include(get_stylesheet_directory().'/inc/menu-redes.php');
  //include(get_stylesheet_directory().'/inc/menus.php');
  include(get_stylesheet_directory() . '/libs/totop.php' );
  include(get_stylesheet_directory() . '/libs/entradas.php' );
  include(get_stylesheet_directory().'/inc/widgets.php');
/*==============================================================*/

/*
remove_action('storefront_header','storefront_skip_links',0);
remove_action('storefront_header','storefront_social_icons',10);
remove_action('storefront_header','storefront_site_branding',20);
remove_action('storefront_header','storefront_secondary_navigation',30);
remove_action('storefront_header','storefront_product_search',40);
remove_action('storefront_header','storefront_primary_navigation_wrapper',42);
remove_action('storefront_header','storefront_primary_navigation',50);
remove_action('storefront_header','storefront_header_cart',60);
remove_action('storefront_header','storefront_primary_navigation_wrapper_close',68);

*/
/*
remove_action( 'storefront_header', 'storefront_skip_links',                       0 );
remove_action( 'storefront_header', 'storefront_secondary_navigation',             30 );
remove_action( 'storefront_header', 'storefront_primary_navigation_wrapper',       42 );
remove_action( 'storefront_header', 'storefront_primary_navigation',               50 );
remove_action( 'storefront_header', 'storefront_primary_navigation_wrapper_close', 68 );


add_action( 'storefront_header', 'storefront_site_branding',                    50 );
add_action( 'storefront_header', 'storefront_secondary_navigation',             40 );
add_action( 'storefront_header', 'storefront_primary_navigation_wrapper',       30 ); */

					/**
			 * Functions hooked into storefront_header action
			 *
			 * @hooked storefront_skip_links                       - 0
			 * @hooked storefront_social_icons                     - 10
			 * @hooked storefront_site_branding                    - 20
			 * @hooked storefront_secondary_navigation             - 30
			 * @hooked storefront_product_search                   - 40
			 * @hooked storefront_primary_navigation_wrapper       - 42
			 * @hooked storefront_primary_navigation               - 50
			 * @hooked storefront_header_cart                      - 60
			 * @hooked storefront_primary_navigation_wrapper_close - 68
			 */
			//do_action( 'storefront_header' ); 

?>
