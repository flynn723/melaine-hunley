<div class="container pt-4">
  <!--Projects section v.4-->
  <section class="section pb-5 wow fadeIn">

    <h2 class="section-heading mb-0 pink-text"><strong>Our Latest</strong></h2>
    <!-- <p class="section-description mb-3"></p> -->

    <!--Grid row-->
    <div class="row mt-4">

      <?php 
      $args = array(
          'post_type' => 'post',
          'orderby'          => 'date',
          'order'            => 'ASC',
          'posts_per_page'   => 3,
          // 'category_name'  => 'carousel'
      );

      // The Query
      $homeblogQuery = new WP_Query( $args );

      if ( $homeblogQuery->have_posts() ) {

        while ( $homeblogQuery->have_posts() ) { $homeblogQuery->the_post(); ?>

            <div class="col-md-4 mb-4">
              <div class="card card-image" style="background-image: url('<?php echo the_post_thumbnail_url();?>');">
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                  <div>
                    <!-- <a href="<?php the_permalink(); ?>" class="pink-text" title="<?php the_title_attribute(); ?>">
                      <h5>
                        <i class="fa fa-plane pr-2"></i><?php get_the_category(); ?></h5>
                    </a> -->
                    <h3 class="mb-4 mt-4">
                      <strong><?php the_title(); ?></strong>
                    </h3>
                    <p><?php the_excerpt(); ?></p>
                    <a class="btn btn-pink" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                      <i class="fa fa-angle-right left"></i> <?php _e('Read More'); ?></a>
                  </div>
                </div>
              </div>
            </div>

        <?php }
        wp_reset_postdata();
      } ?>

    </div>
    <!--Grid row-->

  </section>
  <!--Projects section v.4-->
</div>