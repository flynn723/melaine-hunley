<?php
$obj = get_queried_object();
var_dump($obj);
$terms = array();
// $taxonomy = get_taxonomy( 'gallery_category' );
// $terms = get_terms( array( 'taxonomy' => 'gallery_category',
//           'orderby' => 'name',
//           'order' => 'ASC',
//           'hide_empty' => false,
//           // 'include' => '6, 7, 8'
//           'parent' => 0 )
//         );
// var_dump( $terms );
?>
<section class="section-portfolio-categories mb-5">

  <div class="container">
    <div class="row row-eq-height fadeIn wow">
        
        <?php 

        if ( ! empty($terms) ) {

          foreach ( $terms as $term ) { ?>
            <div class="col col-lg-4 mb-5 mb-lg-0">

              <!-- Card -->
              <div class="card card-gallery-category-<?php echo $term->term_id; ?> h-100">
                <?php
                $term_img = ( class_exists('acf') ) ? get_field( 'featured_image', $term ) : array( 'url' => 'https://placehold.it/400x400' );
                if ( $term_img ) { ?>
                  <!-- Card image -->
                  <a href="/gallery_category/<?php echo $term->slug; ?>" title="<?php echo $term->name; ?>" class="d-block" >
                    <img class="card-img-top w-100" src="<?php echo $term_img['url']; ?>" alt="<?php echo $term_img['alt']; ?>">
                  </a>
                <?php } ?>
                <!-- Card content -->
                <div class="card-body text-center">
                  <!-- Title -->
                  <h4 class="card-title text-uppercase">
                    <a href="/gallery_category/<?php echo $term->slug; ?>" title="<?php echo $term->name; ?>" class="black-text" ><?php echo $term->name; ?></a>
                  </h4>
                  <?php if ( $term->description ) { ?>
                    <p class="card-text"><?php echo $term->description; ?></p>
                  <?php } ?>
                  <a href="<?php echo $term->slug; ?>" title="<?php echo $term->name; ?>" class="btn btn-outline-black ml-0">Read More...</a>
                </div>

              </div>
              
            </div>

          <?php }
        } ?>

    </div>
  </div>

</section>
