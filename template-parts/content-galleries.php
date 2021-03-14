<section class="section-portfolio-categories mb-5 pb-5">
  <div class="container">
    <div class="row fadeIn wow">
        <?php 
        $args = array(
            'post_type' => 'gallery',
            'orderby'          => 'date',
            // 'posts_per_page'   => 3,
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) { $query->the_post(); ?>
            <div class="col col-lg-4 mb-5">
              <div class="card-gallery-category-<?php echo $term->term_id; ?> h-100">
                <?php
                $feat_img = get_the_post_thumbnail_url();
                if ( $feat_img ) { ?>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="d-block" >
                    <img class="card-img-top w-100" src="<?php echo $feat_img; ?>" alt="<?php the_title_attribute(); ?>" >
                  </a>
                <?php } ?>
                <div class="text-center">
                  <h4 class="card-title heading-secondary">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="black-text"><?php the_title(); ?></a>
                  </h4>
                  <p class="card-text mb-0"><?php the_excerpt(); ?></p>
                </div>
              </div>
            </div>
          <?php }
        } ?>
    </div>
  </div>
</section>
