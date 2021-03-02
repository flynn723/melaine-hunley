<?php
$parallax_bg = ( class_exists('acf') ) ? get_field('second_parallax_bg') : array( 'url' => 'https://melaniehunley.com/wp-content/uploads/2019/01/Beach-Sand-Smiling-Couple.jpg' );
$parallax_title = get_field( 'second_parallax_title' );
$parallax_sub_title = get_field( 'second_parallax_sub_title' );
?>
<section class="section-the-blog view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('<?php echo $parallax_bg['url']; ?>'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
  <!-- Mask & flexbox options-->
  <div class="mask d-flex justify-content-center align-items-center">
    <!-- Content -->
    <div class="container">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-md-12 white-text text-center fadeIn wow">
          <h3 class="h1-responsive white-text font-family-pinyon mb-4" ><?php echo $parallax_title; ?></h3>
          <h5 class="text-uppercase white-text wow fadeInDown font-family-rosarivo" data-wow-delay="0.3s"><em><?php echo $parallax_sub_title; ?></em></h5>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Content -->
  </div>
  <!-- Mask & flexbox options-->
</section>
