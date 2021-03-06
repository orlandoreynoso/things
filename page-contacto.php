<?php
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

<?php

//global $post;

$pagename = get_query_var('pagename');

?>

	<div id="primary" class="content-area woo-<?php echo  $pagename;?>">
		<main id="main" class="site-main" role="main">
			<?php //  echo "this is page that i brought from store front "; ?>
			<?php while ( have_posts() ) : the_post();

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
	<div class="side-<?php echo  $pagename;?>">
		<?php  dynamic_sidebar('contacto');  ?>
	</div>
<?php
do_action( 'storefront_sidebar' );
get_footer();
