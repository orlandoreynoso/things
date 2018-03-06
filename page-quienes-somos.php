<?php
/*
Template Name: Quienes somos
Template Post Type: post, page, product, peregrinaciones, boletines, pastorales, somos
*/
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package storefront
 */

get_header(); ?>

<?php global $post; ?>

<?php while ( have_posts() ) : the_post(); ?>

	</div>
	</div>

<div class="site-content">
	<div class="col-full">


	<div class="who-we-are">
<?php

          $args = array(
          'post_type'=> 'somos',
          'post_per_page' => -1

          );

?>

          <?php $the_query = new WP_Query($args); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>


<?php

//$sluge = get_post_field( 'post_name', get_post() );

//echo get_page_children(get_the_ID(),'somos');
//echo get_post_type();
//echo get_the_title();
?>


	<div class="intro">
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
		<h2>
		<?php echo get_post_meta( get_the_ID(), 'info_somos_servicios_titulo', true ); ?>
		</h2>

	<div class="who-services">
		<div class="contenido-servicios">
			<?php echo get_post_meta( get_the_ID(), 'servicios_contenido', true ); ?>
		</div>
		<div class="services">
			<div class="services-one">
				<h3>
				<?php echo get_post_meta( get_the_ID(), 'info_somos_titulo_give', true ); ?>
				</h3>
				<div class="img-services">
				<?php echo get_post_meta( get_the_ID(), 'img_servicio_empenar', true ); ?>
				</div>
				<!-- div class="ingresar">
					<span>Ingresa para mas detalles</span>
				</div -->
			</div>
			<div class="services-two">
				<h3>
				<?php echo get_post_meta( get_the_ID(), 'info_somos_titulo_buy', true ); ?>
				</h3>
				<div class="img-services">
				<?php echo get_post_meta( get_the_ID(), 'img_servicio_comprar', true ); ?>
				</div>
				<!-- div class="ingresar">
					<span>Ingresa para mas detalles</span>
				</div -->
			</div>
		</div>
	</div>


<?php endwhile; wp_reset_postdata();?>

	</div>

	</div>



	<div id="primary" class="content-area credi_<?php echo $post->post_name;  ?>">
		<main id="main" class="site-main" role="main">
			<?php

				do_action( 'storefront_page_before' );

				get_template_part( 'content', 'page' );

				/**
				 * Functions hooked in to storefront_page_after action
				 *
				 * @hooked storefront_display_comments - 10
				 */
				do_action( 'storefront_page_after' );

			endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//do_action( 'storefront_sidebar' );
get_footer();


?>
