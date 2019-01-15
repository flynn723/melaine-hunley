<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
  return;
}
?>
 <!-- card-cascade narrower -->
<div product-id="<?php echo get_the_ID(); ?>" <?php post_class( 'card card-product card-ecommerce mt-1 mb-4' ); ?>>

  <!--Card image-->
  <div class="view overlay" style="position: relative;">
    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>" class="product-img img-fluid w-100" alt="<?php echo $product->name; ?>">
    <!-- <a href="<?php echo get_permalink(get_the_ID()); ?>" title="<?php echo $product->name; ?>"> -->
      <div class="mask rgba-white-slight waves-effect waves-light"></div>
    <!-- </a> -->
    <a class="card-overlay-quick-link btn btn-outline-pink" title="Quick View" href="javascript:void(0);" data-toggle="modal" data-target="#modalLRFormDemo" >Quick View</a>
  </div>

  <!--Card content-->
  <div class="card-body no-padding">
    <!--Category & Title-->
    <!-- <a href="" class="text-muted">
      <h5>Accessories</h5>
    </a> -->
    <h4 class="card-title ellipsis pink-text mb-2">
      <a href="<?php echo get_permalink(get_the_ID()); ?>" title="<?php echo $product->name; ?>" class="pink-text"><?php echo $product->name; ?></a>
    </h4>

    <!--Description-->
    <?php
    // $pos = strpos($product->short_description, ' ', 200);
    // $short_desc = substr($product->short_description, 0, $pos) . '...'; 
    ?>
    <!-- <p class="card-text"><?php // echo $short_desc; ?></p> -->

    <?php
    // $rating_count = $product->get_rating_count();
    // $review_count = $product->get_review_count();
    $average      = $product->get_average_rating();     
    ?> 
    <div class="row">
      <div class="col text-center">
        <?php
        if ($average){
          echo '<div class="star-rating pink-text mb-2" title="'.sprintf(__( 'Rated %s out of 5', 'woocommerce' ), $average).'" style="float: none;" ><span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'woocommerce' ).'</span></div>';
        } ?>
      </div>
    </div>

    <!--Card footer-->
    <div class="card-footer px-0 pb-0 clearfix">

      <span class="float-left my-2">
        <?php if( $product->is_on_sale() ) {
          echo '<span class="woocommerce-Price-amount amount sale-price mr-2" data-original="<span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>' . $product->get_sale_price() . '" data-price="' . $product->get_sale_price() . '" title="Original price:' . $product->get_sale_price() . '" >$' . $product->get_sale_price() . '</span>';

          echo '<strike class="woocommerce-Price-amount amount regular-price" data-original="<span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>' . $product->get_regular_price() . '" data-price="' . $product->get_regular_price() . '" title="Original price:' . $product->get_regular_price() . '" >$' . $product->get_regular_price() . '</strike>';
        } else {
          echo '<span class="woocommerce-Price-amount amount sale-price" data-original="<span class=&quot;woocommerce-Price-currencySymbol&quot;>$</span>' . $product->get_price() . '" data-price="' . $product->get_price() . '" title="Original price:' . $product->get_price() . '" >$' . $product->get_price() . '</span>';
        } ?>
      </span>


      <span class="float-right py-2">
        <a href="<?php the_permalink(); ?>" data-product_id="<?php echo get_the_ID(); ?>" class="pink-text text-right" >
          View More
        </a>
      </span>
    </div>

  </div>
  <!--Card content-->

</div>
