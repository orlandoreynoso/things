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
	<div class="side-credie">
		<div class="titulo_entradas"><h3>síguenos en:</h3></div>
			<div class="recientes">
							<?php // get_sidebar(); ?>
							<iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fmasportusprendas&width=292&height=590&colorscheme=light&show_faces=true&header=true&stream=true&show_border=true&appId=165911470135594" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:590px;" allowTransparency="true"></iframe>
			</div>
		</div>
	</div>
<?php
do_action( 'storefront_sidebar' );
get_footer();
