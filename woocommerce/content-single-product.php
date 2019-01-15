<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Hook Woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<style>
.product-wrapper .woocommerce-product-gallery {
    width: 100% !important;
}
.product-wrapper .twist-wrap {
    width: 100% !important;
}
.product-wrapper .col.summary.entry-summary {
    padding-top: 1.25rem;
}
.product-wrapper .product_title {
    color: #b20839;
}
.product-wrapper .woocommerce-product-rating {
    margin-bottom: .5rem !important;
}
.product-wrapper .star-rating span {
    color: #b20839;
}
.product-wrapper .star-rating::before {
    color: #ddd;
}
.product-wrapper .quantity .qty {
    min-height: 40px;
}
/* vbox */
.single-product .vbox-overlay {
    background: rgba(255, 255, 255, 0.85) !important;
}
.single-product .vbox-title {
    display: none !important;
}
.woocommerce div.product div.images img {
    margin-left: auto;
    margin-right: auto;
    /*max-width: 250px;*/
}
.product-wrapper .tabs-pink {
    background-color: #b20839 !important;
}
.product-wrapper .tabs-grey {
    background-color: #888 !important;
}
.product-wrapper .classic-tabs li.active a {
    color: #fff;
    border-color: #ffffff;
    border-bottom: 3px solid;
}
.classic-tabs li:first-child {
    margin-left: 0;
}
.product-tab-content {
    border: 1px solid #ddd;
    border-top: none;
}
/*
.woocommerce-tabs tabs-wrapper
.wc-tabs  nav classic-tabs tabs-pink
*/
.woocommerce #review_form #respond .form-submit input {
    padding: 0.84rem 2.14rem;
    font-size: 0.81rem;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    margin: 0.375rem;
    border: 0;
    border-radius: 0.125rem;
    font-weight: initial;
}
.woocommerce #review_form p.stars a {
    color: #b20839;
}
.woocommerce #reviews #comments ol.commentlist {
    padding: 0;
}
</style>

<div id="product-<?php the_ID(); ?>" <?php post_class('card'); ?>>

	<div class="row pt-3">
		<div class="col col-12 col-md-6 col-lg-4">
			<?php
				/**
				 * Hook: woocommerce_before_single_product_summary.
				 *
				 * @hooked woocommerce_show_product_sale_flash - 10
				 * @hooked woocommerce_show_product_images - 20
				 */
				do_action( 'woocommerce_before_single_product_summary' );
			?>
		</div>
		<div class="col col-md-6 col-lg-8 summary entry-summary">
			<div class="px-3 px-md-0">
			<?php
				/**
				 * Hook: Woocommerce_single_product_summary.
				 *
				 * @hooked woocommerce_template_single_title - 5
				 * @hooked woocommerce_template_single_rating - 10
				 * @hooked woocommerce_template_single_price - 10
				 * @hooked woocommerce_template_single_excerpt - 20
				 * @hooked woocommerce_template_single_add_to_cart - 30
				 * @hooked woocommerce_template_single_meta - 40
				 * @hooked woocommerce_template_single_sharing - 50
				 * @hooked WC_Structured_Data::generate_product_data() - 60
				 */
				do_action( 'woocommerce_single_product_summary' );
			?>
			</div>
		</div>
	</div>

	<?php
		/**
		 * Hook: woocommerce_after_single_product_summary.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>

<?php get_template_part( 'template-parts/content', 'modal-single-product-delivery' ); ?>

<script>
(function($) {
$(document).ready(function() {
	/* before single product summary */
	$('nav.woocommerce-breadcrumb').wrap('<div class="container"></div>');
	$('.product-wrapper .woocommerce-product-rating').addClass('mb-2');
	$('.product-wrapper .price').addClass('mb-2');
	$('.product-wrapper .woocommerce-product-details__short-description p').addClass('mb-2');
	$('.product-wrapper .cart').addClass('mb-2');
	/* after single product summary */
	/*
	$('.woocommerce-tabs').addClass('tabs-wrapper p-4').wrap('<div class="row"><div class="col"></div></div>');
	$('.woocommerce-tabs ul.wc-tabs').removeClass('tabs');
	$('.woocommerce-tabs ul.wc-tabs').addClass('nav classic-tabs tabs-grey').css('padding-left', '0');
	$('.woocommerce-tabs ul.wc-tabs li').addClass('nav-item');
	$('.woocommerce-tabs ul.wc-tabs li a').addClass('nav-link');
	$('.woocommerce-tabs .woocommerce-Tabs-panel').addClass('tab-pane p-3').wrapAll('<div class="product-tab-content tab-content"></div>');
	*/
	/* review */
	$('#review_form .stars a').addClass('pink-text');
	// $('#review_form .stars a').addClass('pink-text');
	$('.product-wrapper #review_form .comment-form-comment').addClass('mt-2');
	$('.product-wrapper #review_form textarea').addClass('form-control');
	$('.product-wrapper #review_form input[type="text"], .product-wrapper #review_form input[type="email"]').addClass('form-control');
	$('.product-wrapper #review_form input#submit').addClass('btn btn-pink ml-0');
	/* related products */
	$('.product-wrapper .related.products .products').removeClass('columns-4').addClass('row');
	$('.product-wrapper .related.products .products .card').wrap('<div class="col-12 col-md-4"></div>');
	// $('.product-wrapper .related.products .products .card:last-child').hide();
	/**/

});
})(jQuery);
</script>


