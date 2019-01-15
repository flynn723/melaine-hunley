<?php
/**
 * Custom template for displaying the press page
 *
 * Template Name: Press
 *
 * @package melaine_hunley
 */
get_header(); ?>

<style>
.content-press-row {
	border-top: 1px solid #ddd;
	border-bottom: 1px solid #ddd;
	/* background: #f7f7f7;
	opacity: 0.4;
	filter: alpha(opacity=40); */ /* msie */
	background-color: #fff;
}
</style>

<div class="page-wrapper press-wrapper mt-md-4">

	<div class="page-container container card mb-md-4">
		<?php
			get_template_part( 'template-parts/content', 'no-feat-img' ); 
		?>
		<div class="row">
			<?php if ( have_posts() ) : ?>

				<div class="col-12">				
					<?php while ( have_posts() ) { the_post(); ?>

						<?php
							get_template_part( 'template-parts/content', 'press' );
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