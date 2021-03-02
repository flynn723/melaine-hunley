
<section class="section-latest-news container-fluid py-5">
  <div class="row">
    <div class="container">
      <div class="row row-eq-height fadeIn wow">
          
          <?php 
          $args = array(
              'post_type' => 'post',
              'orderby'          => 'date',
              'posts_per_page'   => 3,
          );

          $query = new WP_Query( $args );

          if ( $query->have_posts() ) {

            while ( $query->have_posts() ) { $query->the_post(); ?>
              <div class="col col-lg-4 mb-5">

                <!-- Card -->
                <div class="card h-100">
                  <?php
                  $feat_img = get_the_post_thumbnail_url();
                  if ( $feat_img ) { ?>
                    <!-- Card image -->
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="d-block" >
                      <img class="card-img-top w-100" src="<?php echo $feat_img; ?>" alt="<?php the_title_attribute(); ?>" >
                    </a>
                  <?php } ?>
                  <!-- Card content -->
                  <div class="card-body">
                    <!-- Title -->
                    <h4 class="card-title text-uppercase">
                      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="black-text" ><?php the_title(); ?></a>
                    </h4>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="btn btn-outline-black ml-0">Read More...</a>
                  </div>

                </div>
                
              </div>

            <?php }
          }
          wp_reset_postdata(); ?>

      </div>
    </div>
  </div>
</section>
