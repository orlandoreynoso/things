<div class="e-menu">
	<nav class="navbar navbar-default" role="navigation">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <div class="lm">
		  	<div class="navbar-brand"><?php logo(); ?></div>
		  </div>	    	
		    <div class="btn-m">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      </div>
	    </div>

	        <?php
	            wp_nav_menu( array(
	                'menu'              => 'primary',
	                'theme_location'    => 'primary',
	                'depth'             => 2,
	                'container'         => 'div',
	                'container_class'   => 'collapse navbar-collapse',
	        		'container_id'      => 'bs-example-navbar-collapse-1',
	                'menu_class'        => 'nav navbar-nav',
	                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	                'walker'            => new wp_bootstrap_navwalker())
	            );
	        ?>
	    </div>
	</nav>
</div>

<?php /*

<div class="e-menu">
		<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-default" role="navigation">
					  <div class="container-fluid">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
			    		  <p class="navbar-brand"></i>Menu <li class="fa fa-angle-double-right"></li>  <li class="fa fa-angle-double-right"></li></p>
					    </div>

					        <?php
					            wp_nav_menu( array(
					                'menu'              => 'primary',
					                'theme_location'    => 'primary',
					                'depth'             => 2,
					                'container'         => 'div',
					                'container_class'   => 'collapse navbar-collapse',
					        		'container_id'      => 'bs-example-navbar-collapse-1',
					                'menu_class'        => 'nav navbar-nav',
					                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					                'walker'            => new wp_bootstrap_navwalker())
					            );
					        ?>
					    </div>
					</nav>
			</div>
		</div>
</div>


*/ ?>