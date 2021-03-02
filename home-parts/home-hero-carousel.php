<?php
$feat_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$sub_title = ( class_exists('acf') ) ? get_field( 'sub_title' ) : "Install Advanced Custom Fields plugin.";  
?>
<style>
#home-hero-carousel .view {
  height: calc(100vh - 90px) !important;
  background-size: cover;
  background-position: center;
}
.admin-bar #home-hero-carousel .view {
  height: calc(100vh - 122px) !important;  
}
</style>
<section id="section-home-hero-carousel" >
  <?php
  // check if the repeater field has rows of data
  if( have_rows('carousel') ) { ?>
    <div id="home-hero-carousel" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        <?php
        $i = 0;
        while ( have_rows('carousel') ) { the_row(); ?>
            <li data-target="#home-hero-carousel" data-slide-to="<?php echo $i; ?>" <?php if ($i === 0) { ?>class="active"<?php } ?>></li>
          <?php $i++;
        } ?>
      </ol>
      <div class="carousel-inner" role="listbox">
      <?php
      $i = 0;
      while ( have_rows('carousel') ) { the_row();
        $image = get_sub_field('image'); // var_dump($image); ?>
          <div class="carousel-item <?php if ($i === 0) { ?>active<?php } ?>">
            <div class="view w-100" style="background-image: url('<?php echo $image['url']; ?>');" >
              <!-- <img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="Wedding" /> -->
              <div class="d-flex justify-content-center align-items-center mask rgba-black-slight">
                <div class="text-center">
                  <h1 class="white-text font-family-pinyon mb-3" data-wow-delay="0.3s"><?php the_title(); ?></h1>
                  <?php if ($sub_title) { ?>
                    <h4 class="text-uppercase white-text font-weight-bold mb-3 font-family-rosarivo" data-wow-delay="0.3s">
                      <em><?php echo $sub_title; ?></em>
                    </h4>
                  <?php } ?>
                  <div class="wow fadeInDown" data-wow-delay="0.3s">
                    <a class="btn btn-white btn-lg black-text" href="/portfolio" >Portfolio</a>
                    <a class="btn btn-outline-white btn-lg" href="/packages/booking" >Book Me</a>
                  </div>
                </div>          
              </div>
            </div>
          </div>
        <?php $i++;
      } ?>
      </div>
      <a class="carousel-control-prev" href="#home-hero-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#home-hero-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  <?php } else { ?>
    <div class="text-center">
      <h3>Carousel images missing...</h3>
    </div>
  <?php } ?>
  <?php // echo do_shortcode('[floslider id="861" title="' . get_the_title() . '"]'); ?>

</section>