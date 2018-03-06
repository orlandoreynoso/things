<?php

	/*
	  <div class="container">
	    <section class="cover-publicidad">
	      <?php get_template_part( 'template/cover','somos' )?>
	    </section>
	  </div>
	*/
?>

	<div class="pre-somos">
		<div class="pre-contenido">

			<?php

			          $args = array(
			          'post_type'=> 'somos',
			          'post_per_page' => 1

			          );

			?>
<?php $the_query = new WP_Query($args); ?>
		<?php

	$pagename = get_the_ID();

?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<?php the_content(); ?>
<?php endwhile; wp_reset_postdata();?>
<?php
//	$the_query = new WP_Query(create_pagename('inicio'));
/*
	if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			?>
			<?php // the_content(); ?>
			<?php
		}

		wp_reset_postdata();
	} else {
		echo "No encontramos contenido de: ".$pagename."";
	} */
		?>

		</div>
		<a class="btn-somos" href="<?php echo esc_url( home_url( '/' ) ); ?>quienes-somos">ingresar</a>
	</div>
	  <div class="col-full">
		<div class="content-area">
			<div class="site-main">
