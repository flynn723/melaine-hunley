<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package melaine_hunley
 */
get_header();

$sub_title = ( class_exists('acf') ) ? get_field( 'sub_title' ) : "Install Advanced Custom Fields plugin."; ?>

<div class="template-page">

    <?php
    if ( wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ) {
        get_template_part( 'template-parts/content', 'hero' );
    } else { ?>

        <div class="container pt-5 mb-5">
          <div class="row">
            <div class="col text-center">
              <h1 class="font-family-pinyon" ><?php the_title(); ?></h1>
              <h3 class="text-uppercase font-family-rosarivo" ><?php echo $sub_title; ?></h3>  
            </div>
          </div>
        </div>

    <?php }

    if ( have_posts() ) : ?>
                
        <?php while ( have_posts() ) { the_post(); ?>

            <div class="container mb-5">
                <div class="row">
                    <div class="col">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>

        <?php } ?>

    <?php else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>

</div>

<?php get_footer(); ?>