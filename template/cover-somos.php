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

	$pagename = get_the_ID();

	$the_query = new WP_Query(create_pagename('inicio'));

	if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			?>
			<?php the_content(); ?>
			<?php
		}

		wp_reset_postdata();
	} else {
		echo "No encontramos contenido de: ".$pagename."";
	}
		?>
		</div>
	</div>
	  <div class="col-full">
		<div class="content-area">
			<div class="site-main">