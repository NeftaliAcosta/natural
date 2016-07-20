<?php
/**
 * Template Name: Tienda
 */
 
 namespace Roots\Sage;

use Roots\Sage\Config;
use Roots\Sage\Wrapper;
?>
asdas

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
