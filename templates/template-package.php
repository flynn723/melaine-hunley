<?php
/*
 * Custom template for displaying package page
 *
 * Template Name: Package
 *
 */
get_header(); 
$show_feat_img = ( class_exists('acf') ) ? get_field( 'show_feat_img' ) : true; ?>

<div class="template-package">

  <?php
  if ( wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) && $show_feat_img ) {

    get_template_part( 'template-parts/content', 'hero' );
    get_template_part( 'template-parts/content-packages', 'breadcrumb' );

  } else {
    
    get_template_part( 'template-parts/content-packages', 'breadcrumb' );
    get_template_part( 'template-parts/content', 'no-feat-img' );
    
  }

	if ( have_posts() ) :

		while ( have_posts() ) { the_post();

			get_template_part( 'template-parts/content', 'package' );

		}

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif;

	get_template_part( 'template-parts/content', 'book-now' ); ?>

</div>

<?php get_footer(); ?>