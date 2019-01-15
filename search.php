<?php
/**
 * The template for displaying search results posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package melaine_hunley
 */

get_header(); ?>

<style>
.search-page-wrapper .btn-search {
    position: absolute;
    top: 1px;
    right: 15px;
    border-radius: 5px;
    padding: 6px 8px;
    border-left: 0;
    border-bottom: 0;
    border-top: 0;
}
</style>

<div class="page-wrapper mt-md-4">

	<?php
		get_template_part( 'template-parts/content', 'search-title' ); 
	?>

	<div class="page-container search-page-container container card mb-md-4">

		<div class="row mb-4">
			<!-- ?s=test&post_type=post -->

			<div class="col">
		    <form id="search" class="w-100" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
		      <div class="search-form-inner-wrapper clearfix">
		        <input name="s" id="s" class="form-control input-search" type="text" value="<?php echo get_search_query(); ?>" placeholder="<?php _e('Search products...'); ?>" />
		        <input type="hidden" name="post_type" value="product" />
		        <button id="" class="btn-search" type="submit"  value="Search"><i class="fa fa-search"></i></button>
		      </div>
		    </form>
			</div>

		</div>

		<div class="row">

    	<?php

    	$post_type = 'product';
    	if ( isset($_GET['post_type']) ) {
	    	$post_type = $_GET['post_type'];
    	}

      $args = array(
        's' => get_search_query(),
        'post_type' => $post_type,
      );
      
      $query = new WP_Query( $args );

      if ( $query->have_posts() ) : ?>
	
					<?php while ( $query->have_posts() ) { $query->the_post(); ?>

						<?php
							// get_template_part( 'template-parts/content', 'search' );
						?>

						<div class="col-12 col-md-4">

							<?php the_title(); ?>

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

					<?php } ?>
				</div>
				<!-- <div class="col-12">
					<?php // get_sidebar(); ?>					
				</div> -->

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
		</div>
	</div><!-- end of <div class="container"> -->

</div>
<?php get_footer(); ?>