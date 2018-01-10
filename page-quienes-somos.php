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
<?php while ( have_posts() ) : the_post(); ?>

	</div>
	</div>
	<div class="who-we-are">
		<div class="cover-who">
			<?php the_post_thumbnail(); ?>			
		</div>
		<div class="content-who">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam obcaecati minima expedita saepe ut, inventore, iste exercitationem repellendus quisquam non, perferendis nesciunt id molestiae cumque porro rerum animi doloremque beatae.</p>
		</div>
	</div>

<div class="site-content">
	<div class="col-full">
		
	<div id="primary" class="content-area">
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
do_action( 'storefront_sidebar' );
get_footer();
