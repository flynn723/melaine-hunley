 <?php
/**
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package melaine_hunley
 */

$feat_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

$sub_title = ( class_exists('acf') ) ? get_field( 'sub_title' ) : "Install Advanced Custom Fields plugin."; ?>

<section class="section-hero-contact view jarallax mb-5" data-jarallax='{"speed": 0.2}' style="background-image: url('<?php echo $feat_img_url; ?>'); background-repeat: no-repeat; background-size: cover; background-position: center center;">

  <div class="mask rgba-black-strong d-flex justify-content-center align-items-center py-5">

    <div class="container-fluid py-5">
      <div class="row">
        <div class="container">

          <div class="row mb-5">
            <div class="offset-lg-6 col-lg-6 col-md-12 white-text">
              <h1 class="white-text font-family-pinyon mb-5" >
                <?php the_title(); ?>
              </h1>
              <p class="mb-0"><a href="mailto:mhunley@hotmail.com" title="Email" class="white-text" ><i class="fa fa-envelope"></i> mhunley@hotmail.com</a></p>
              <p class="mb-0"><a href="tel:1-310-714-9074" title="Call" class="white-text" ><i class="fa fa-phone"></i> (310) 714-9074</a></p>              
            </div>
          </div>

          <div class="row mb-5" >
            <div class="ninja-forms-col offset-lg-6 col-lg-6 col-md-12 white-text" style="display: none;" >
              <?php echo do_shortcode('[ninja_form id=1]'); ?>
            </div>
          </div>

          <div class="row">
            <div class="col col-lg-8 offset-lg-2 text-center">
              <a href="/packages/booking" class="d-inline-block btn btn-outline-white btn-book-now mx-auto" title="Book Now" >Book Now</a>   
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>

</section>