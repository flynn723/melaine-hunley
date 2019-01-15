<?php
/*
 * Custom template for displaying the woocommerce cart page
 *
 * Template Name: Cart
 *
 */
get_header(); ?>

<style>
.woocommerce .cart_totals {
    border-radius: 0.25rem;
    background: #fff;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    padding-right: 1rem!important;
    padding-left: 1rem!important;
    margin-bottom: 1.5rem!important;
    padding-top: 1rem!important;
}
</style>

<div class="cart-wrapper page-wrapper wrapper clearfix">

	<?php
	if ( wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ) {
		get_template_part( 'template-parts/content', 'feat-img' ); 
	} ?>

	<div class="container">	
		<?php while ( have_posts() ) { the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'cart' ); ?>
		<?php } ?>
	</div>

</div>

<script>
(function($){
	$(document).ready(function() {
		$('.woocommerce .woocommerce-cart-form').addClass('card my-4');
		$('.woocommerce .woocommerce-cart-form table.shop_table').addClass('m-0');
		$('.woocommerce .coupon button[type="submit"]').addClass('btn btn-outline-grey m-0 ml-1');
		$('.woocommerce .cart-collaterals .cart_totals, .woocommerce-page .cart-collaterals .cart_totals').addClass('card pt-3 px-3 mb-4');
		/**/
		$('.woocommerce .cart_totals').addClass('card pt-3 px-3 mb-4');
	});
})(jQuery);
</script>

<?php get_footer(); ?>
