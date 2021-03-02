<?php
$section_title = get_field('third_parallax_title');
$section_bg = get_field('third_parallax_bg');
?>
<!-- Full Page Intro -->
<section class="section-home-thank-you view jarallax mb-5" data-jarallax='{"speed": 0.2}' style="background-image: url('<?php echo $section_bg["url"]; ?>'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
  <!-- Mask & flexbox options-->
  <div class="mask d-flex justify-content-center align-items-center">
    <!-- Content -->
    <div class="container">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-md-12 white-text text-center fadeIn wow">
          <h3 class="h1-responsive white-text wow fadeInDown font-family-pinyon" data-wow-delay="0.3s"><em><?php echo $section_title; ?></em></h3>
        </div>

      </div>

    </div>

  </div>

</section>