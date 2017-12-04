<div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
       <article class="noticias" id="cover-somos">

<?php

    $args = array(
        'post_type' => 'page',
        'pagename'       => 'quienes-somos',
        'posts_per_page'         => ''.$perpage.'',
    );


?>
    <?php $the_query = new WP_Query($args);  ?>

    <?php

    while ($the_query -> have_posts()){

       $the_query -> the_post();
       ?>
       <h2><?php the_title(); ?></h2>


    <span class="prev-somos anima1"><?php  the_excerpt(); ?></span>
    <a class="leer-mas anima2" href="<?php the_permalink(); ?>">Leer más</a>
      <?php
       }
        wp_reset_postdata();


?>

</article>
</div>
</div>
