<?php
function logo(){
    $logo = IMAGES.'/metanoiaradio.png';
    echo '<a class="logo" href="';
    echo bloginfo('url');
    echo '"><img src="'.$logo.'" alt="Metanoia Radio"></a>';
}


function showMenu(){
    $args = array(
        'menu'=> '',
        'menu_id' => 'menu-principal', /*Lo que tienen el Ul primero*/
        'menu_class' => 'menu', /* tambien lo que contiene el  Ul primero*/
        "container"=>"",  /*ESto es lo que contiene al menu por ejemplo nav, pero lo quito ya que en el header incluyo el nav para controlarlo.*/
    );
    wp_nav_menu($args);
}


?>
