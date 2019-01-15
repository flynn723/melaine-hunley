<style>
/*.home-products-carousel-multi-section {
    margin-top: 92px;
}*/
.home-products-carousel-multi-section {
  background: #fff;
}
.home-products-carousel-multi-section .card img {
    margin: 0 auto;
    max-width: 200px;
}
</style>
<!--Section: Products v.5-->
<section class="home-products-carousel-multi-section section pb-5 wow fadeIn">
  <div class="container" >
  
    <h2 class="section-heading m-0 pt-4 pink-text">
      <strong><?php _e('Radical HOT PICKS!', 'melaine-hunley'); ?></strong>
    </h2>
    <p class="section-description mb-3"><?php _e('Radical Results And Nothing Less', 'melaine-hunley'); ?></p>

    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

      <!--Controls-->
      <div class="controls-top">
        <a class="btn-floating primary-color" href="#multi-item-example" data-slide="prev">
          <i class="fa fa-chevron-left"></i>
        </a>
        <a class="btn-floating primary-color" href="#multi-item-example" data-slide="next">
          <i class="fa fa-chevron-right"></i>
        </a>
      </div>

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li class="primary-color" data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li class="primary-color" data-target="#multi-item-example" data-slide-to="1"></li>
        <!-- <li class="primary-color" data-target="#multi-item-example" data-slide-to="2"></li> -->
      </ol>

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <?php

        $args = array(
          'post_type' => 'product',
          'posts_per_page' => 6,
          // 'orderby' => 'date',
          // 'order' => 'ASC'
        );
        $query = new WP_Query( $args );

        $columnCount = 3;
        $carousel_items = array_chunk( $query->get_posts(), $columnCount) ;

        $inc = 0;
        foreach($carousel_items as $carousel_item) { ?>

        <?php
        // echo '<pre>';
        // var_dump($carousel_items);
        // echo '</pre>';
        ?>
    
          <div class="carousel-item <?php echo ($inc == 0)? 'active' : ''; ?>">

            <?php
            $inc2 = 0;
            foreach( $carousel_item as $card ) {
              $_product = wc_get_product( $card->ID );
              // var_dump($_product):
              ?>

              <div class="col-md-4 <?php echo (($inc2 % 3) != 0)? 'clearfix d-none d-md-block' : ''; ?>">

                <div class="card card-ecommerce">

                  <!--Card image-->
                  <div class="view overlay">
                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($card->ID) ); ?>" class="img-fluid w-100" alt="<?php echo $card->post_title; ?>">
                    <a href="<?php echo get_permalink($card->ID); ?>" title="<?php echo $card->post_title; ?>">
                      <div class="mask rgba-white-slight waves-effect waves-light"></div>
                    </a>
                  </div>

                  <!--Card content-->
                  <div class="card-body text-left no-padding">
                    <!--Category & Title-->
                    <!-- <a href="#category" class="text-muted">
                      <h5>Blouse</h5>
                    </a> -->
                    <h4 class="card-title ellipsis">
                      <a href="<?php echo get_permalink($card->ID); ?>" title="<?php echo $card->post_title; ?>" class="pink-text "><?php echo $card->post_title; ?></a>
                    </h4>
                    <!--Description-->
                    <!-- <p class="card-text"><?php // echo $_product->post->post_excerpt; ?></p> -->
                    <!--Card footer-->
                    <?php
                    // $rating_count = $_product->get_rating_count();
                    // $review_count = $_product->get_review_count();
                    $average = $_product->get_average_rating();     
                    ?> 
                    <div class="woocommerce row">
                      <div class="col text-center">
                        <?php
                        if ($average){
                          echo '<div class="star-rating pink-text mb-2" title="'.sprintf(__( 'Rated %s out of 5', 'woocommerce' ), $average).'" style="float: none;" ><span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'woocommerce' ).'</span></div>';
                        } ?>
                      </div>
                    </div>
                    <div class="card-footer px-0">
                      <span class="float-left my-2">

                        <?php if( $_product->is_on_sale() ) {
                          echo '<span class="woocommerce-Price-amount amount sale-price mr-2" data-original="<span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>' . $_product->get_sale_price() . '" data-price="' . $_product->get_sale_price() . '" title="Original price:' . $_product->get_sale_price() . '" >$' . $_product->get_sale_price() . '</span>';

                          echo '<strike class="woocommerce-Price-amount amount regular-price" data-original="<span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>' . $_product->get_regular_price() . '" data-price="' . $_product->get_regular_price() . '" title="Original price:' . $_product->get_regular_price() . '" >$' . $_product->get_regular_price() . '</strike>';
                        } else {
                          echo '<span class="woocommerce-Price-amount amount sale-price" data-original="<span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>' . $_product->get_price() . '" data-price="' . $_product->get_price() . '" title="Original price:' . $_product->get_price() . '" >$' . $_product->get_price() . '</span>';
                        } ?>

                      </span>
                      <span class="float-right py-2">
                        <a href="<?php the_permalink( $card->ID ); ?>" title="<?php echo $card->post_title; ?>" class="pink-text text-right" >
                          View More
                        </a>
                      </span>
                    </div>

                  </div><!--Card content-->

                </div>


              </div>

            <?php
              $inc2++;
            } ?>

          </div><!-- carousel-item -->

          <?php
          $inc++; 
        }


        // if ( $query->have_posts() ) {
        //   while ( $query->have_posts() ) { $query->the_post(); ?>
            <?php // if ( $query->current_post == 0 || ($query->current_post % 3) == 0 ) { ?>
              <!-- <div class="carousel-item active"> -->
            <?php // } ?>
            <?php
          // }
        // } ?>

      </div>
      <!--Slides-->

    </div>

  </div>

</section>

