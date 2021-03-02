<?php
/**
 * Custom template for displaying the archive gallery
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package melaine_hunley
 */

get_header(); ?>

<div class="template-archive-gallery">

  <?php
  if ( wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ) {
    get_template_part( 'template-parts/content', 'hero' );
  }
  ?>    

  <div class="container mb-5">
    <div class="row">

      <div class="col">

        <?php if ( have_posts() ) {

          while ( have_posts() ) { the_post();

            get_template_part( 'template-parts/content', 'blog' ); ?>

            <hr class="mb-4">

          <?php }

        } else { 

          get_template_part( 'template-parts/content', 'none' );

        } ?>  

      </div>

      <?php if ( is_active_sidebar( 'post-sidebar' ) ) { ?>

        <div class="col-md-4 col-lg-3">
          <?php dynamic_sidebar( 'post-sidebar' ); ?>
        </div>

      <?php } ?>

    </div>

  </div>

</div>
<?php get_footer(); ?>
