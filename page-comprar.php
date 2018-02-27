<?php
/*
Template Name: Comprar
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

	get_header();
?>


<?php while ( have_posts() ) : the_post(); ?>

	</div>
	</div>

<div class="site-content">
	<div class="col-full <?php echo strtolower(get_the_title()); ?>-area">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

	<div class="content-buy">
		<?php echo "Estamos en pagina de comprar"; ?>
		<h2 class="titulo"><?php the_title(); ?></h2>
		<div class="intro">
			<div class="foto">
			<?php // the_post_thumbnail('full'); ?>
			</div>
			<div class="contenido">
			<?php the_content(); ?>
			</div>
		</div>
	</div>

			<?php

				//do_action( 'storefront_page_before' );

			//	get_template_part( 'content', 'page' );

				/**
				 * Functions hooked in to storefront_page_after action
				 *
				 * @hooked storefront_display_comments - 10
				 */
				//do_action( 'storefront_page_after' );

			endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<div id="secondary">
	<?php red(); ?>
</div>
<?php
remove_action( 'storefront_sidebar', 'storefront_get_sidebar',  10 );

get_footer();

?>
