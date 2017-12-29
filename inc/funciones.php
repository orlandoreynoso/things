<?php 

/*=== Menu generales ======*/
function menus_generales(){
  register_nav_menus(array(
    'menu-redes'=>__('Menu Redes','credie')
  ));
}

add_action('init','menus_generales');


/*=================*/
function create_pagename($pagename){
    $array = array(
        'pagename' => ''.$pagename.''
        );
    return $array;
}

/*=============== Agregar logo =====================*/

function storefront_display_custom_logo() {
?>
<div class="ca-logo">
  <a class="logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/crediempenos.png" alt="<?php echo get_bloginfo( 'name' ); ?>">
  </a>
</div>

<?php
}


function or_slider(){ get_template_part( 'template/cover','slide'); }
add_action( 'homepage', 'or_slider',9);


//add_action( 'init', 'storefront_display_custom_logo' );
/*
function storefront_custom_logo() {
	add_action( 'storefront_header', 'storefront_display_custom_logo',1);
}  */

/*======================================================*/

function or_somos(){   get_template_part( 'template/cover','somos');  }
add_action( 'homepage','or_somos', 15); 

/*
function no_bread(){
	remove_action('woocommerce_breadcrumb');
}
*/
/*
function or_slider(){ get_template_part( 'template/cover','slide'); }
add_action( 'homepage', 'or_slider',9);
*/
function admin_woo(){

wp_register_style('style', get_stylesheet_directory_uri().'/login/style.css', array(), '1.0');
	wp_enqueue_style('style');
}

add_action('login_enqueue_scripts','admin_woo');


/*===== remove_action ===========*/

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
	remove_action( 'homepage','storefront_homepage_content', 10 );
	remove_action( 'homepage','woocommerce_breadcrumb',1);
}

?>