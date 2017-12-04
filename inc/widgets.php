<?php
/*==== n Widget=====*/

if (function_exists('register_sidebar')) {
    register_sidebar(
        array(
            'name' => 'Pie de página',
            'id' => 'footer-page',
            'before_widget' => '<div class="direccion">',
            'after_widget'  => '</div>',
    ));
}

if (function_exists('register_sidebar')) {
    register_sidebar(
        array(
            'name' => 'Añadir carreta',
            'id' => 'hook-carreta'
    ));
}

if (function_exists('register_sidebar')) {
    register_sidebar(
        array(
            'name' => 'Categorias productos',
            'id' => 'catprod',
            'before_widget' => '<div class="categorias-productos">',
            'after_widget'  => '</div>',
    ));
}

if (function_exists('register_sidebar')) {
    register_sidebar(
        array(
            'name' => 'formulario',
            'id' => 'formulario'
    ));
}

if (function_exists('register_sidebar')) {
    register_sidebar(
        array(
            'name' => 'contacto',
            'id' => 'contacto'
    ));
}

if (function_exists('register_sidebar')) {
    register_sidebar(
        array(
            'name' => 'Empeñar',
            'id' => 'empenar'
    ));
}

?>
