<?php
/*
 * Custom template for displaying home 2 page
 *
 * Template Name: Home 2
 *
 */
get_header(); ?>

<div class="template-home" >

  <?php
  get_template_part( 'home-parts/home', 'hero' );

  get_template_part( 'home-parts/home', 'about-portfolio-contact' );

  get_template_part( 'home-parts/home', 'the-portfolio' );

  // get_template_part( 'home-parts/home', 'galleries' );
  get_template_part( 'home-parts/home', 'gallery-categories' );

  get_template_part( 'home-parts/home', 'the-blog' );

  get_template_part( 'home-parts/home', 'latest-news' );

  get_template_part( 'home-parts/home', 'thank-you' );

  // get_template_part( 'template-parts/content', 'instagram' );
  ?>

</div>

<?php get_footer(); ?>