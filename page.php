<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package melaine_hunley
 */
get_header(); ?>
<div class="page-wrapper mt-md-4">

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

						<?php
							get_template_part( 'template-parts/content', 'page' );
						?>

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