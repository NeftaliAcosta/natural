<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!--
Desarrollador: Neftalí Acosta
URL: http://neftaliacosta.com/project/naturalproducts/
Contacto: hola@neftaliacosta.com
Tel: 2291391667
Powered by: Serviciosdinamicos.com.mx & Gubynetwork.com

-->
<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
	


		<?php if ( is_front_page()  ) {
			
			 echo do_shortcode("[metaslider id=25]"); 
			 include 'sec.php';
			//echo "<img src='wp-content/uploads/2016/05/tiendahome.png' class='img-responsive' >";
		}
		?>
	<?php if (is_shop()) {
			
			 //echo do_shortcode("[metaslider id=25]"); 
			echo "<img src='../wp-content/uploads/2016/05/tiendahome.png' class='img-responsive'>";
		}
		?>
 
		

    <div class="wrap container-fluid " role="document">
	
		
	  
        <main class="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <?php /*if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; */?>


	</div>
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>

  <script src="<?php bloginfo( 'template_url' ); ?>/js/myjs.js"></script> 
</html>
