<?php
/*
Template Name: Pastorales archive
Template Post Type: post, page, product, Pastorales
 */
 get_header();

?>


 <section class="contenido-home">
   <div class="container">
     <div class="row">
         <div class="col-xs-12 col-md-8 contenido-general">

        <!-- ************** CONTENIDO DESPLEGABLE PARA EL BLOG ***  -->

  <article class="conten">
    <div class="mapeo"><?php // dimox_breadcrumbs(); ?></div>
        <h2> plantilla Pastorales categoria..okok</h2>
<!-- *********************************** -->

     <div class="contenido">
           <div class="info">
     <h2 class="titulo"><span>Próximos pastorales</span></h2>

<?php 

global $wpdb;


 $the_query = new WP_Query( array('posts_per_page'=>4,
                                 'post_type' => 'pastorales',
                                 'order' => 'DESC',
                                 'orderby' => 'date',
                                 'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
                            ); 
                            ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<div class="col-xs-12 file">
<a href="<?php echo $file; ?>" class="file-title" target="_blank">
<i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo get_the_title(); ?>
</a>
<div class="file-description"><?php the_content(); ?></div>
</div>
<?php
endwhile;

$big = 999999999; // need an unlikely integer
 echo paginate_links( array(
    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $the_query->max_num_pages
) );

wp_reset_postdata();


 ?>

            </div>
      </div>
<!-- **************************************** -->
  </article>

        <!-- ************** FIN DEL CONTENIDO BLOG ***************  -->

         </div>
        <div class="col-xs-12 col-md-4 contenido-laterales">
          <?php include (TEMPLATEPATH . '/libs/lateral.php'); ?>
        </div>
     </div>
   </div>
 </section>

<?php
  get_footer();
?>