<?php
function menus_generales(){
  register_nav_menus(array(
    'menu-redes'=>__('Menu Redes','credie')
  ));
}

add_action('init','menus_generales');



?>
