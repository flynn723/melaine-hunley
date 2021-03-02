<?php
$feat_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

$sub_title = ( class_exists('acf') ) ? get_field( 'sub_title' ) : "Install Advanced Custom Fields plugin.";  
?>
<!-- Full Page Intro -->
<section class="section-home-hero view jarallax mb-5" data-jarallax='{"speed": 0.2}' style="background-image: url('<?php echo $feat_img_url; ?>'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
  <!-- Mask & flexbox options-->
  <div class="mask d-flex justify-content-center align-items-center">
    <!-- Content -->
    <div class="container">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-md-12 white-text text-center wow fadeInDown">
          <h1 class="white-text font-family-pinyon mb-3" data-wow-delay="0.3s"><?php the_title(); ?></h1>
          <h4 class="text-uppercase white-text font-weight-bold mb-3 font-family-rosarivo" data-wow-delay="0.3s"><em><?php echo $sub_title; ?></em></h4>
          <div class="wow fadeInDown" data-wow-delay="0.3s">
            <a class="btn btn-white btn-lg black-text" href="/portfolio" >Portfolio</a>
            <a class="btn btn-outline-white btn-lg" href="/packages/booking" >Book Me</a>
          </div>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Content -->
  </div>
  <!-- Mask & flexbox options-->
</section>
<!-- Full Page Intro -->