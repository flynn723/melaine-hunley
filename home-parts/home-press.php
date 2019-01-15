
<section class="home-press-section section pb-5 wow fadeIn" style="background: #fff;">
  <div class="container pt-4">
    <!--Projects section v.4-->
    <div class="section-heading text-center pt-4 m-0">
      <h2 class="section-heading m-0 pink-text"><strong>In The Press</strong></h2>
    </div>
    <p class="section-description text-center mb-3">Top publications talk about Melaine Hunley.</p>

    <!--Grid row-->
    <div class="row mt-4">

    <?php 
    $counter = 1;
    $args = array(
        'post_type' => 'press_item',
        'orderby'          => 'date',
        'order'            => 'ASC',
        'posts_per_page'   => 6,
        // 'category_name'  => 'carousel'
    );

    // The Query
    $pressQuery = new WP_Query( $args );

    if ( $pressQuery->have_posts() ) {
          // The Loop
      while ( $pressQuery->have_posts() ) { $pressQuery->the_post(); ?>

          <?php if ( $counter % 2 ) { ?>

            <div class="col-12 col-md-4 mb-4">
              <img class="img-fluid w-100 rounded z-depth-1-half" alt="<?php the_title_attribute(); ?>" src="<?php echo the_post_thumbnail_url(); ?>" >
              <div class="mx-auto">
                <!-- <a href="<?php the_permalink(); ?>" class="pink-text" title="<?php the_title_attribute(); ?>">
                  <h5>
                    <i class="fa fa-plane pr-2"></i><?php the_category(); ?></h5>
                </a> -->
                <h3 class="my-3 font-weight-400">
                  <strong><?php the_title(); ?></strong>
                </h3>
                <!-- <div><?php // the_content(); ?></div> -->
                <p><?php the_excerpt(); ?></p>
                <a class="btn btn-white" href="/testimonials" title="<?php the_title_attribute(); ?>" >
                  <i class="fa fa-angle-right left"></i> <?php _e('Read More'); ?></a>
              </div>
            </div>

          <?php } else { ?>

            <div class="col-12 col-md-4 mb-4">
              <div class="card card-image" style="background-image: url('<?php echo the_post_thumbnail_url();?>');">
                <div class="text-black text-center d-flex align-items-center rgba-white-strong py-5 px-4" style="    background-color: rgba(255, 255, 255, 0.9);" >
                  <div class="mx-auto">
                    <!-- <a href="/testimonials" class="pink-text" title="<?php the_title_attribute(); ?>">
                      <h5>
                        <i class="fa fa-plane pr-2"></i><?php get_the_category(); ?></h5>
                    </a> -->
                    <h3 class="mt-4 mb-3 font-weight-400">
                      <strong><?php the_title(); ?></strong>
                    </h3>
                    <!-- <div><?php // the_content(); ?></div> -->
                    <p><?php the_excerpt(); ?></p>
                    <a class="btn btn-white" href="/testimonials" title="<?php the_title_attribute(); ?>" >
                      <i class="fa fa-angle-right left"></i> <?php _e('Read More'); ?></a>
                  </div>
                </div>
              </div>
            </div>

          <?php } ?>

          <?php
          $counter++;
      }
      wp_reset_postdata();
    } ?>

    </div>
    <!--Grid row-->

  </div>
</section>