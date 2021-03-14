<?php
$obj = get_queried_object();
$query = new WP_Query();
$all_wp_pages = $query->query(
                  array(
                    'post_type' => 'page',
                    'posts_per_page' => '-1',
                    'orderby' => 'title',
                    'post__not_in' => array( '58' ),
                  )
                );
$page_children = get_page_children($obj->ID, $all_wp_pages); ?>  
<section class="section-portfolio-categories mb-5">
  <div class="container">
    <div class="row row-eq-height fadeIn wow">
        <?php 
        if ( ! empty($page_children) ) {
          foreach ( $page_children as $package_category ) { ?>
            <div class="col col-lg-4 mb-5 mb-lg-0">
              <!-- Card -->
              <div class="card card-package-category-<?php echo $package->ID; ?> h-100">
                <?php
                $package_category_img = wp_get_attachment_url( get_post_thumbnail_id( $package_category->ID ) );
                if ( $package_category_img ) { ?>
                  <!-- Card image -->
                  <a href="<?php the_permalink( $package_category->ID ); ?>" title="<?php echo $package_category->post_title; ?>" class="d-block" >
                    <img class="card-img-top w-100" src="<?php echo $package_category_img; ?>" alt="<?php echo $package_category->post_title; ?>">
                  </a>
                <?php } ?>
                <!-- Card content -->
                <div class="card-body text-center">
                  <!-- Title -->
                  <h4 class="heading-secondary">
                    <a href="<?php the_permalink( $package_category->ID ); ?>" title="<?php echo $package_category->post_title; ?>" class="black-text" ><?php echo $package_category->post_title; ?></a>
                  </h4>
                  <?php if ( $package_category->post_excerpt ) { ?>
                    <p class="card-text"><?php echo $package_category->post_excerpt; ?></p>
                  <?php } ?>
                  <a href="<?php the_permalink( $package_category->ID ); ?>" title="<?php echo $package_category->post_title; ?>" class="btn btn-outline-black ml-0"><?php echo $buttons['default_cta_text']; ?></a>
                  <?php  ?>
                </div>
              </div>
            </div>
          <?php }
        } else { ?>
          <div class="col text-center">
            <p>No package pages.</p>
          </div>
        <?php } ?>
    </div>
  </div>
</section>
