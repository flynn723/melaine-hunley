<?php
/*
 * Custom template for displaying about page
 *
 * Template Name: Pricing
 *
 */
get_header(); ?>

<div class="template-pricing page-wrapper">

	<div class="page-container container card mb-md-4">
		<?php
		if ( wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ) {
			get_template_part( 'template-parts/content', 'feat-jarallax' ); 
		} else {
			get_template_part( 'template-parts/content', 'no-feat-img' ); 
		} ?>
		<div class="row">
			<?php if ( have_posts() ) : ?>

				<div class="col-12">				
					<?php while ( have_posts() ) { the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'pricing' ); ?>

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