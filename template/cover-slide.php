			</main>
		</div>
	</div>
<?php /*
		</main>
	</div><!-- .primary -->
</div><!-- col-full -->
*/ ?>


<?php /*

<div class="c-slider" id="pre-slider">
	  <div class="slide">
	          <?php
	           // Este es para la pagina oficial echo do_shortcode("[metaslider id=188]");
	          ?>
	          <?php //echo do_shortcode("[metaslider id=92]");     ?>
	          <?php  echo do_shortcode("[metaslider id=49]");     ?>
	  </div>
</div>

*/ ?>


 <div class="c-slider" id="pre-slider">
	<div class="bxslider">
 	<?php 

    $args = array(
        'post_type' => 'banner',
        'posts_per_page'         => 4,
        'orderby' => 'date',
        'order' => 'DESC'
    );


 	?>
 	<?php $the_query = new WP_Query($args);  ?>
 	<?php while ($the_query -> have_posts()): $the_query -> the_post() ?>
	  <div><?php the_post_thumbnail('full'); ?></div>
 	<?php endwhile; wp_reset_postdata(); ?>
	</div>
  </div>

<?php 

/*		<div class="col-full">
			<div class="content-area">
				<div class="site-main">

				*/
 ?>				






