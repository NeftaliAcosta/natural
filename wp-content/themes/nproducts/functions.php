<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');






add_filter('excerpt_length', 'mqw_largo_excerpt');
function mqw_largo_excerpt($largo) {
           return 20;
}

add_filter( "the_excerpt", "add_class_to_excerpt" );
function add_class_to_excerpt( $excerpt ) {
    return str_replace('<p', '<p class="myexcerpt"', $excerpt);
}


// Cambiar texto de "read more"
function wpdocs_excerpt_more( $more ) {
    return sprintf( '... <br><br><a class="read-more btnblog" href="%1$s">%2$s</a>', 
        get_permalink( get_the_ID() ),
        __( 'Leer más.', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


//Registrar el menú lateral

register_nav_menu( 'secundary', __( 'Menu lateral', 'nProducts Theme' )  ); 




add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);


@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );


//Quitar productos relacionados
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);