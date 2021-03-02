<?php
/*
 * Custom template for displaying portfolio page
 *
 * Template Name: Portfolio
 *
 */
get_header();
$show_feat_img = ( class_exists('acf') ) ? get_field( 'show_feat_img' ) : true; ?>

<div class="template-portfolio">

  <?php
  if ( wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) && $show_feat_img ) {

    get_template_part( 'template-parts/content', 'hero' );

  } else {

    get_template_part( 'template-parts/content', 'no-feat-img' );

  }

  if ( have_posts() ) {

    while ( have_posts() ) { the_post();

      get_template_part( 'template-parts/content', 'gallery-categories' );
      // get_template_part( 'template-parts/content', 'galleries' );

    }

  } else {

      get_template_part( 'template-parts/content', 'none' );

  }

  get_template_part( 'template-parts/content', 'book-now' ); ?>

</div>

<?php get_footer(); ?>