<?php 

// Esto es para aderir una imágen destacada.
add_theme_support('post-thumbnails');


//add_image_size( $name, $width, $height, $crop );
the_post_thumbnail('thumbnail',1024,1024,true);       // Tamaño de la miniatura 150x150 píxeles
the_post_thumbnail('medium',300,300, true);          // Tamaño de la mediano 300x300 píxeles
the_post_thumbnail('large');
the_post_thumbnail('pastorales', 751, 422, true);
the_post_thumbnail('comunidades', 1100, 404, true);
the_post_thumbnail('full'); // La resolución original
//set_post_thumbnail_size(1024,1024,true );


?>