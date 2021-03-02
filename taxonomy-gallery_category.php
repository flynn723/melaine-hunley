<?php
/**
 * Custom template for displaying the taxonomy
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package melaine_hunley
 */

get_header(); ?>

<style>
.pagination.pg-black .page-item.active .page-link {
    background-color: black;
}
</style>

<div class="template-taxonomy-gallery_category">

  <?php
  // if ( wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ) {
    // get_template_part( 'template-parts/content', 'hero' );
    // get_template_part( 'template-parts/content-gallery', 'breadcrumb' );
  // } else {
    get_template_part( 'template-parts/content-gallery', 'breadcrumb' );
    get_template_part( 'template-parts/content', 'no-feat-img' ); 
  // } ?>    

  <div class="container mb-5">

    <?php get_template_part( 'template-parts/content-gallery-category', 'children' ); ?>

    <div class="row">

      <div class="col">

        <?php if ( have_posts() ) {
 
            // get_template_part( 'template-parts/content-gallery', 'category' );
            get_template_part( 'template-parts/content-gallery-category', 'images' );

        } else { 

          get_template_part( 'template-parts/content', 'none' );

        } ?>  

      </div>

      <?php /* if ( is_active_sidebar( 'post-sidebar' ) ) { ?>

        <div class="col-md-4 col-lg-3">
          <?php dynamic_sidebar( 'post-sidebar' ); ?>
        </div>

      <?php } */ ?>

    </div>

  </div>

  <?php get_template_part( 'template-parts/content-book', 'now' ); ?>

</div>
<?php get_footer(); ?>
