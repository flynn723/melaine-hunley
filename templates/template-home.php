<?php
/*
 * Custom template for displaying home page
 *
 * Template Name: Home
 *
 */
get_header(); ?>

<div class="template-home" >
  <?php
  get_template_part( 'home-parts/home', 'hero-carousel' );
  // get_template_part( 'template-parts/content', 'instagram' );
  ?>
</div>

<?php get_footer(); ?>