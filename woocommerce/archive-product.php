<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
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
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header( 'shop' ); ?>

<style>
select {
	display: block !important;
}
.archive-product-wrapper form.woocommerce-ordering {
    width: 100%;
    margin-top: 1rem !important;
    display: block;
}
.archive-product-no-products-found-wrapper .woocommerce-info {
    margin: 1.25rem 0;
}
@media (min-width: 768px) {
	.archive-product-wrapper form.woocommerce-ordering {
	    width: initial;
    margin-top: 0 !important;
	}
	.archive-banner-img  {
		padding: 0 20%;
	}	
}
</style>

<div class="archive-product-wrapper mt-md-4">

	<div class="archive-product-container page-container container card mb-md-4" style="background: #f5f5f5;">
		<div class="page-title-row row">
			<div class="page-title-col col-12 pt-4 pb-4">

				<?php
					/**
					 * woocommerce_before_main_content hook.
					 *
					 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
					 * @hooked woocommerce_breadcrumb - 20
					 * @hooked WC_Structured_Data::generate_website_data() - 30
					 */
					// do_action( 'woocommerce_before_main_content' );
				?>
				<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) :
					if ( is_search() ) {
						printf( esc_html__( 'Search results for \'%s\'', 'melaine_hunley' ), '<span>' . get_search_query() . '</span>' );
					} else { ?>
					<h2 class="pink-text mb-0" >
						The Radical Regimen
						<?php // woocommerce_page_title(); ?></h2>
					<p class="grey-text mb-0">Radical results and nothing less.</p>
						<?php
					}
				endif; ?>
				<?php
					/**
					 * woocommerce_archive_description hook.
					 *
					 * @hooked woocommerce_taxonomy_archive_description - 10
					 * @hooked woocommerce_product_archive_description - 10
					 */
					do_action( 'woocommerce_archive_description' );
				?>
			</div>
		</div>

	<?php

	// if ( is_search() ) {
 //    $args = array(
 //      's' => get_search_query(),
 //      // 'post_type' => $post_type,
 //    );
	// } else {
 //    $args = array(
 //      'post_type' => 'product',
 //    );
	// }

 //  $query = new WP_Query( $args );

	if ( have_posts() ) : ?>

		<?php // woocommerce_product_loop_start(); ?>

				<div class="row" style="background: #fff;" >
					<div class="col p-0">

						<?php if ( is_search() ) { ?>

					    <form id="search" class="w-100 pt-4 px-4 pb-0" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
					      <div class="search-form-inner-wrapper clearfix" style="position: relative;">
					        <input name="s" id="s" class="form-control input-search" type="text" value="<?php echo get_search_query(); ?>" placeholder="<?php _e('Search products...'); ?>" />
					        <input type="hidden" name="post_type" value="product" />
					        <button id="" class="btn-search grey-text" type="submit"  value="Search">
					        	<i class="fa fa-search"></i>
					        </button>
					      </div>
					    </form>

						<?php } else { ?>
							<a href="https://demo.iamradical.com/products/age-defying-exfoliating-pads/" title="Age-Defying Exfoliating Pads" >
								<img src="https://demo.iamradical.com/wp-content/uploads/2018/05/Radical.Website.Pads_.Banner_1.7.15.png" alt="<?php bloginfo('name'); ?> - Age-Defying Exfoliating Pads" class="archive-banner-img img-fluid w-100 embed-responsive-item"/>
							</a>


						<?php } ?>

					</div>
				</div>

			<div class="row py-4 mb-4" style="background: #fff; border-bottom: 1px solid #ddd;">
				<!-- <div class="col"> -->
					<?php
						/**
						 * woocommerce_before_shop_loop hook.
						 *
						 * @hooked wc_print_notices - 10
						 * @hooked woocommerce_result_count - 20
						 * @hooked woocommerce_catalog_ordering - 30
						 */
						do_action( 'woocommerce_before_shop_loop' );
					?>			
				<!-- </div> -->
			</div>

			<div class="row">
				<div class="hidden-md-down col-lg-3">
					<?php get_template_part( 'template-parts/content', 'archive-product-left-sidebar' ); ?>
				</div>
				<div class="col-12 col-lg-9">
					<div class="row">

						<!-- <div class="card-columns p-3"> -->

						<?php woocommerce_product_subcategories(); ?>

						<?php

						while ( have_posts() ) : the_post(); ?>

							<div class="col-12 col-md-4">

								<?php
									/**
									 * woocommerce_shop_loop hook.
									 *
									 * @hooked WC_Structured_Data::generate_product_data() - 10
									 */
									do_action( 'woocommerce_shop_loop' );
								?>

								<?php wc_get_template_part( 'content', 'product' ); ?>

							</div>

						<?php endwhile; // end of the loop. ?>

						<!-- </div> -->

					</div>
				</div>
			</div>

		</div><!-- end of <div class="container"> -->

		<?php // woocommerce_product_loop_end(); ?>

		<?php
			/**
			 * woocommerce_after_shop_loop hook.
			 *
			 * @hooked woocommerce_pagination - 10
			 */
			do_action( 'woocommerce_after_shop_loop' );
		?>

	<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
		<div class="archive-product-no-products-found-wrapper">
			<?php
				/**
				 * woocommerce_no_products_found hook.
				 *
				 * @hooked wc_no_products_found - 10
				 */
				do_action( 'woocommerce_no_products_found' );
			?>
		</div>
	<?php endif; ?>

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

<?php
	get_template_part( 'template-parts/content', 'modal-quick-view' );
?>

<script>
(function($) {

$(document).ready(function() {
	/*
	MDB
	*/
	// jQuery('.woocommerce-ordering .orderby').addClass('mdb-select');
	//  jQuery('.mdb-select').material_select();
	$('.woocommerce .woocommerce-result-count, .woocommerce .woocommerce-ordering').wrap('<div class="col-12 col-md-6"></div>');
	$('.woocommerce .woocommerce-ordering').addClass('text-left text-md-right mt-md-0');
	$('nav.woocommerce-pagination .page-numbers').addClass('card');

});

})(jQuery);
</script>
<?php get_footer( 'shop' ); ?>
