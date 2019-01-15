<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
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
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<style>
select {
	display: block !important;
}
/**/
.btn-pink-gradient {
	color: #fff;
  background: linear-gradient(50deg, #b20839, #673AB7) !important;
}
/**/
.product-wrapper {
    background: #f7f7f7;
}
.product-wrapper main {
	padding-top: 1.25rem !important;
}
.product-wrapper nav.woocommerce-breadcrumb {
    display: none;
}
.product-wrapper .price .woocommerce-Price-amount {
    color: #292b2c;
}
.product-wrapper #review_form textarea {
}
.product-wrapper .woocommerce-product-gallery {
	width: 100%;
}
</style>

<div class="product-wrapper wrapper clearfix">

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

	<div class="product-container container pb-4">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	</div>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		// do_action( 'woocommerce_sidebar' );
	?>

</div>

<script>
(function($){
	function reviewForm() {
		$('.single-product form#commentform input#submit').off().unbind();
		$('.single-product form#commentform .comment-form-rating').append('<p class="comment-form-error text-danger" style="display: none;">Please select a rating.</p>');
		$('.single-product form#commentform .comment-form-comment').append('<p class="comment-form-error text-danger" style="display: none;">Please leave a comment.</p>');
		$('.single-product form#commentform .comment-form-author').append('<p class="comment-form-error text-danger" style="display: none;">Please enter your name.</p>');
		$('.single-product form#commentform .comment-form-email').append('<p class="comment-form-error text-danger" style="display: none;">Please enter your email.</p>');
		$('.single-product form#commentform input#submit').on('click', function() {
			if ( $('.single-product form#commentform select#rating').val() == "" ) {
				$('.single-product form#commentform .comment-form-rating .comment-form-error').show();
			} else {
				$('.single-product form#commentform .comment-form-rating .comment-form-error').hide();					
			}
		});
		$('.single-product form#commentform').submit( function(e) {
			if ( $('.single-product form#commentform textarea#comment').val() == "" ) {
				$('.single-product form#commentform .comment-form-comment .comment-form-error').show();
				e.preventDefault();
			} else {
				$('.single-product form#commentform .comment-form-comment .comment-form-error').hide();
			}
			if ( $('.single-product form#commentform input#author').val() == "" ) {
				$('.single-product form#commentform .comment-form-author .comment-form-error').show();
				e.preventDefault();
			} else {
				$('.single-product form#commentform .comment-form-author .comment-form-error').hide();					
			}
			if ( $('.single-product form#commentform input#email').val() == "" || $('.single-product form#commentform input#email').val().indexOf('@') == -1 ) {
				$('.single-product form#commentform .comment-form-email .comment-form-error').show();
				e.preventDefault();
			} else {
				$('.single-product form#commentform .comment-form-email .comment-form-error').hide();					
			}
		});
	}
	$(document).ready(function() {
		$('.product-wrapper nav.woocommerce-breadcrumb').show();
		$('.product-wrapper .quantity input.qty').addClass('form-control');
		$('.product-wrapper .product_meta a').addClass('badge badge-grey mr-1');
		$('.product-wrapper .related .products').css('margin-right', '-15px');
		$('.product-wrapper .related .products').css('margin-left', '-15px');
		reviewForm();
	});
})(jQuery);
</script>

<?php get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
