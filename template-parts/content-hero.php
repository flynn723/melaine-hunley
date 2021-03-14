<?php
/**
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package melaine_hunley
 */

$feat_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

$sub_title = ( class_exists('acf') ) ? get_field( 'sub_title' ) : "Install Advanced Custom Fields plugin.";
?>
<!-- Full Page Intro -->
<section class="section-hero view jarallax mb-5" data-jarallax='{"speed": 0.2}' style="background-image: url('<?php echo $feat_img_url; ?>'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
  <!-- Mask & flexbox options-->
  <div class="mask d-flex justify-content-center align-items-center">
    <!-- Content -->
    <div class="container">
      <!--Grid row-->
      <div class="row">
        <div class="col-md-12 white-text text-center wow fadeInDown" data-wow-delay="0.3s">
          <h1 class="pt-5 white-text font-family-pinyon mb-5">
            <?php the_title(); ?>
          </h1>
          <h3 class="text-uppercase white-text heading-secondary"><em><?php echo $sub_title; ?></em></h3>
        </div>
      </div>

    </div>

  </div>

</section>
<!-- Full Page Intro -->