<header class="banner">
  <div class="container-fliud mybg">
    <!--<a class="brand" href="<? esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>-->
    <!--<nav class="nav-primary">
      <?php/*
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;*/
      ?>
    </nav>-->
		<div class="container">
							
				<nav class="navbar navbar-default" role="navigation"> 
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
					  <div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse"
								data-target=".navbar-ex1-collapse">
						  <span class="sr-only">Desplegar navegación</span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/logo.png" alt="logo natural producs international" class="img-responsive mylogo"></a>
						<?php /*if ( function_exists( 'jetpack_the_site_logo' ) ) jetpack_the_site_logo(); */?>
					  </div>
					  
						<div class="collapse navbar-collapse navbar-ex1-collapse" id="navbar-collapse-3">
							<ul class="nav navbar-nav elementos">
								<?php /* Primary navigation */
									wp_nav_menu( array(
									  'menu' => 'Menu principal',
									  'depth' => 2,
									  'container' => false,
									  'menu_class' => 'nav navbar-nav ',
									  //Process nav menu using our custom nav walker
									  'walker' => new wp_bootstrap_navwalker())
									);
								?>
						   </ul>
						</div>
  
 
				</nav>
									
		</div>
	
  </div>
</header>
