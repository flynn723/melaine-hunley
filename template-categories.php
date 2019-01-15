<?php
/*
 * Custom template for displaying categories
 *
 * Template Name: Categories
 *
 */
get_header(); ?>
<div class="home-wrapper wrapper clearfix" style="background-color: #f7f7f7;" >

  <?php
  get_template_part( 'home-parts/home', 'streak' );
  ?>

  <?php
  get_template_part( 'home-parts/home', 'categories' );
  ?>

</div>

<?php get_footer(); ?>