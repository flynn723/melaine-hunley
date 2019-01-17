<?php
$featured_img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$featured_img = ( isset($featured_img) ) ? $featured_img : 'https://mdbootstrap.com/img/Photos/Others/images/76.jpg';
?>
<!-- Full Page Intro -->
<div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('<?php echo $featured_img; ?>'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
  <!-- Mask & flexbox options-->
  <div class="mask rgba-white-light d-flex justify-content-center align-items-center">

    <div class="container">

      <div class="row">
        <!--Grid column-->
        <div class="col-md-12 black-text">
          <div class="card card-coming-soon p-3 mx-auto">
            <a class="d-block mx-auto" href="<?php echo get_site_url(); ?>" title="<?php bloginfo('name'); ?>" style="display: block;">
                <img class="header-logo my-1 mx-auto" src="<?php echo get_site_url(); ?>/wp-content/themes/melaine-hunley/img/logo/melaine-hunley_1024x512.png" alt="<?php bloginfo('name'); ?> Logo" >
                <h1 style="display: none;" ><?php bloginfo('name'); ?></h1>
            </a>
            <h5 class="my-3  black-text font-weight-bold wow fadeInDown" data-wow-delay="0.3s">Sign up and get early access for when we launch the website</h5>
            <div>
              <!-- WP Form Shortcode goes here! -->
              <?php the_content(); ?>
            </div>
            <!-- <div class="wow fadeInDown" data-wow-delay="0.3s">
              <a class="btn btn-white btn-lg black-text" href="/portfolio" >Portfolio</a>
              <a class="btn btn-outline-white btn-lg" href="/about" >About me</a>
            </div> -->
          </div>
        </div>
        <!--Grid column-->
      </div>

    </div>

  </div>
  <!-- Mask & flexbox options-->
</div>
<!-- Full Page Intro -->