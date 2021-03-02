<?php
/*
 * Custom template for displaying testimonials page
 *
 * Template Name: Testimonials
 *
 */
get_header();

$sub_title = ( class_exists('acf') ) ? get_field( 'sub_title' ) : "Install Advanced Custom Fields plugin."; ?>

<div class="template-testimonials page-wrapper">

  <?php
  if ( wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ) {
    get_template_part( 'template-parts/content', 'hero' );
  } else {
    get_template_part( 'template-parts/content', 'no-feat-img' );
  }

  if ( have_posts() ) {

    while ( have_posts() ) { the_post();

      get_template_part( 'template-parts/content', 'testimonials' );

    }

  } else {

    get_template_part( 'template-parts/content', 'none' );

  }

  get_template_part( 'template-parts/content', 'book-now' ); ?>

</div>

<?php get_footer(); ?>