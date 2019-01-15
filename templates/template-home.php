<?php
/*
 * Custom template for displaying home page
 *
 * Template Name: Home
 *
 */
get_header(); ?>
<div class="home-wrapper wrapper clearfix" style="background-color: #f7f7f7;" >

  <?php
  get_template_part( 'home-parts/home', 'hero' );

  get_template_part( 'home-parts/home', 'about-portfolio-contact' );

  get_template_part( 'home-parts/home', 'thank-you' );
  ?>

  <?php
  // get_template_part( 'home-parts/home', 'categories' );
  ?>

</div>

<?php get_footer(); ?>