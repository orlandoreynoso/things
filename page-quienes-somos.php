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

<div class="site-content">
	<div class="col-full">


	<div class="who-we-are">
		<div class="intro">
			<h2><?php the_title(); ?></h2>
			<p>Somos una empresa que provee servicios financieros para inversión en negocios y necesidades personales y familiares, con garantía prendaria, proveído por un personal capacitado y comprometido con un servicio de excelencia y buscando siempre dar mayores beneficios a un costo accesible. </p>
			<h2>PRINCIPALES SERVICIOS QUE BRINDA CREDIEMPEÑOS</h2>			
		</div>
		<div class="cover-who">
			<?php the_post_thumbnail(); ?>			
		</div>
		<div class="content-who">
			<h2>ESTRATEGIAS Y ACCIONES DE MERCADEO</h2>			
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam obcaecati minima expedita saepe ut, inventore, iste exercitationem repellendus quisquam non, perferendis nesciunt id molestiae cumque porro rerum animi doloremque beatae.</p>
		</div>
	</div>



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
//do_action( 'storefront_sidebar' );
get_footer();


?>