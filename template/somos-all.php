        <div class="list">
        <div class="todo">
          <a class="ir-agrupacion" href="<?php the_permalink(); ?>">
            <div class="thumb" >    
              <?php
              if(has_post_thumbnail()){
              the_post_thumbnail('full');
              }
              else{ ?>
              <img class="attachment-full size-full wp-post-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pluma.jpg" alt="">
              <?php }       ?>
            </div>
            <h5><?php the_title(); ?></h5>
          </a>
          <!--div class="exe"><?php // excerpt('15'); ?> </div -->
        </div>
        </div>
        <?php endwhile; wp_reset_postdata();?>