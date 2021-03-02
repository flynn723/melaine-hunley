<style>
.section-content-package .card.gradient-card .card-image {
  background-size: cover;
  background-position: center;
}
/*.section-content-package .card.gradient-card,
.section-content-package .card.gradient-card .card-image {
  height: 100%;
}
.section-content-package .card.gradient-card:focus-within .card-image {
  width: 7rem;
  height: 7rem;
}*/
.section-content-package .card.gradient-card.active .third-content-title,
.section-content-package .card.gradient-card:focus-within .third-content-title {
  margin-left: 128px;
}
.section-content-package .card.gradient-card.active .third-content,
.card.gradient-card:focus-within .third-content {
      min-height: 55px;
}
</style>

<section class="section-content-package container-fluid mb-5">


  <div class="row">
    <div class="container">

      <?php
      $content = get_the_content();
      if ( $content ) { ?>
        <div class="row mb-5">
          <div class="col col-lg-8 offset-lg-2">
            <?php the_content(); ?>        
          </div>
        </div>
      <?php } ?>

      <?php if( have_rows('packages') ) { ?>

        <div class="row justify-content-center"><!-- row-eq-height -->

          <?php
          // $mask_colors = array( 'blue', 'purple', 'peach', 'aqua' );
          $mask_colors = array( 'black', 'black', 'black', 'black' );
          $inc = 0;
          $packages = get_field_object('packages');
          $count = count( $packages['value'] );
          while ( have_rows('packages') ) { the_row(); 

            // $img = 'https://melaniehunley.com/wp-content/uploads/2019/02/adult-blur-business.jpg';
            $img = get_sub_field('image');
            $title = get_sub_field('title');
            $content = get_sub_field('content'); ?>

            <div class="col-md-6 mb-4">

              <div class="card gradient-card <?php echo ($count === 1) ? "active": ""; ?>">

                  <div class="card-image" style="background-image: url('<?php echo $img['url']; ?>')">

                    <a href="#!">
                      <div class="text-white d-flex mask <?php echo $mask_colors[$inc]; ?>-gradient-rgba">
                        <div class="first-content align-self-center p-3">
                          <h3 class="card-title text-uppercase font-family-rosarivo mb-0"><?php echo $title; ?></h3>
                          <p class="lead mb-0">See details.</p>
                        </div>
                        <div class="second-content align-self-center mx-auto text-center">
                          <i class="far fa-money-bill-alt fa-3x"></i>
                        </div>
                      </div>
                    </a>

                  </div>

                  <div class="third-content ml-auto mr-4 mb-2">
                    <h3 class="third-content-title text-uppercase font-family-rosarivo text-right mb-0" ><?php echo $title; ?></h3>
                    <!-- <h4 class="font-weight-bold float-right">$175 - $300</h4> -->
                  </div>

                  <div class="card-body pb-0">
                    <h4 class="text-uppercase font-weight-bold mt-0 mb-3">Details</h4>
                    <div class="card-text">
                      <?php echo $content; ?>
                    </div>
                    <a href="/packages/booking" class="btn btn-outline-black btn-book-now m-0 mb-4" title="Book Now" >Book Now</a>
                  </div>

              </div>

            </div>

            <?php $inc++;
          } ?>

        </div>

      <?php } else { ?>
        
        <div class="row">
          <div class="col text-center">
            <p>There are no packages, yet. Please add some packages.</p>
          </div>
        </div>

      <?php } ?>
  
      <div class="row"></div>

    </div>
  </div>
</section>

<script>
(function($) {
$(document).ready(function() {

  $('.gradient-card').on('click', function() {
    $('.gradient-card').removeClass('active');
    $(this).addClass('active');
  });

});
})(jQuery);  
</script>

<?php
$content_footer = get_field( 'content_footer' );
if ( $content_footer ) { ?>

  <section class="section-package-content-footer container-fluid mb-5">
    <div class="row">
      <div class="container">

        <div class="row">
          <div class="col col-lg-8 offset-lg-2 text-center">

            <?php echo $content_footer; ?>

          </div>
        </div>

      </div>
    </div>
  </section>

<?php } ?>