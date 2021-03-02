<?php
/*
 * Custom template for displaying packages page
 *
 * Template Name: Packages
 *
 */
get_header(); 
$show_feat_img = ( class_exists('acf') ) ? get_field( 'show_feat_img' ) : true; ?>

<div class="template-packages">

	<?php
	if ( wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) && $show_feat_img ) {
		get_template_part( 'template-parts/content', 'hero' );
	} else { 
		get_template_part( 'template-parts/content', 'no-feat-img' );
	} ?>

	<section class="container-fluid mb-5">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col col-lg-8 offset-lg-2 text-center">
						<p class="mb-0">I am so thrilled you have come to check out my packages! They will not disappoint and I have deals for every special occasion! See below and let’s book your special shoot today!</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php if ( have_posts() ) : ?>
				
		<?php while ( have_posts() ) { the_post(); ?>

			<?php get_template_part( 'template-parts/content-packages', 'categories' ); ?>

		<?php } ?>

	<?php else : ?>

		<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif;

	get_template_part( 'template-parts/content', 'book-now' ); ?>

</div>

<?php get_footer(); ?>