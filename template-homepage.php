<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */

get_header(); ?>

<div class="container">
  <div class="slide">
      <div class="row">
        <div class="col-md-12">
          <?php
           // Este es para la pagina oficial echo do_shortcode("[metaslider id=188]");
          ?>
          <?php
            echo do_shortcode("[metaslider id=92]");
          ?>
        </div>
      </div>
  </div>
</div>

<div class="container">
  <section class="cover-publicidad">
    <?php get_template_part( 'template/cover','somos' )?>
  </section>
</div>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
				<?php // echo "Este ya es mi homepage"; ?>
			<?php
			/**
			 * Functions hooked in to homepage action
			 *
			 * @hooked storefront_homepage_content      - 10
			 * @hooked storefront_product_categories    - 20
			 * @hooked storefront_recent_products       - 30
			 * @hooked storefront_featured_products     - 40
			 * @hooked storefront_popular_products      - 50
			 * @hooked storefront_on_sale_products      - 60
			 * @hooked storefront_best_selling_products - 70
			 */
			do_action( 'homepage' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
