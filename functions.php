<?php
/* devuelve el directorio de stilo de css, y se le asigna a temppath */
define('TEMPPATH',get_bloginfo('stylesheet_directory'));
/*En esto concatenamos la carpeta images*/
define('IMAGES',TEMPPATH. "/images");
//define('HOME',bloginfo('url' ));

//add_image_size( $name, $width, $height, $crop );
/*========== incluyendo los estilo que uso ===============*/
//include (TEMPLATEPATH. '/inc/estilos.php');

/*======================================================*/
	//include(get_stylesheet_directory().'/inc/menu-redes.php');
	//include(get_stylesheet_directory().'/inc/menus.php');
	include(get_stylesheet_directory().'/libs/totop.php');
	include(get_stylesheet_directory().'/libs/entradas.php');
	include(get_stylesheet_directory().'/inc/widgets.php');
	include(get_stylesheet_directory().'/inc/medidasthumb.php');
	/* contenido somos, slider, admin_woo, remove_actions, LOGO, */
	include(get_stylesheet_directory().'/inc/funciones.php');
	/*== carga de estilos y js ===*/
	include(get_stylesheet_directory().'/inc/estilos.php');

if (function_exists('register_sidebar')) {
    register_sidebar(
        array(
            'name' => 'Buscador woo',
            'id' => 'buscador_woo'
    ));
}

if (function_exists('register_sidebar')) {
    register_sidebar(
        array(
            'name' => 'Categorias productos',
            'id' => 'catprod',
    ));
}

?>
