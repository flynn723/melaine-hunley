<?php
/**
 * Custom template for displaying the archive posts 
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package melaine_hunley
 */

get_header(); ?>
<div class="blog-wrapper blog-archive-wrapper mt-md-4">

  <div class="blog-container blog-archive-container container card mb-4">

    <?php
    get_template_part( 'template-parts/content', 'no-feat-img' ); 
    ?>
    <div class="row">
      <?php if ( have_posts() ) : ?>

        <div class="col">        
          <?php while ( have_posts() ) { the_post(); ?>

            <?php
              get_template_part( 'template-parts/content', 'blog' );
            ?>

          <?php } ?>

        </div>
        <!-- <div class="post-sidebar-col col-12 col-md-3">
            <?php
            // if ( is_active_sidebar( 'post-sidebar' ) ) {
            //     dynamic_sidebar( 'post-sidebar' );
            // } ?>        
        </div> -->

      <?php else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>
    </div>
    
  </div><!-- end of <div class="container"> -->

</div>
<?php get_footer(); ?>
