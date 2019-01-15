<?php
/**
 * Custom template for displaying the a page with a right sidebar
 *
 * Template Name: Right Sidebar
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package melaine_hunley
 */
get_header(); ?>

<style>
.page-container {
    border: 1px solid #ddd;
    border-top: none;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
}
</style>

<div class="page-wrapper mt-md-4">

	<div class="page-container container card mb-4">
		<?php
		if ( wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ) {
			get_template_part( 'template-parts/content', 'feat-jarallax' ); 
		} else {
			get_template_part( 'template-parts/content', 'no-feat-img' ); 
		} ?>
		<div class="row">
			<?php if ( have_posts() ) : ?>

				<div class="col-12 col-md-8">				
					<?php while ( have_posts() ) { the_post(); ?>

						<?php
						the_content();
						?>

					<?php } ?>

				</div>
				<div class="page-sidebar-col col-12 col-md-4">
          <?php if ( is_active_sidebar( 'page-sidebar' ) ) {
              dynamic_sidebar( 'page-sidebar' );
          } ?>				
					<div class="widget-item card">
						<img class="img-fluid w-100" src="/wp-content/uploads/2018/04/radical-how-it-works.jpeg" alt="Card image cap">
						<div class="card-body">
							<h4 class="card-title">The Radical System</h4>
							<div class="textwidget">
								<h4 class="grey-text">How The Regimen Works</h4>
							</div>
							<button type="button" class="btn btn-pink waves-effect waves-light" data-toggle="modal" data-target="#howItWorksModal"><i class="fa fa-play mr-2"></i>How It Works</button>
						</div>
					</div>
					<?php
						get_template_part( 'template-parts/content', 'modal-how-it-works' ); 
					?>
				</div>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
		</div>
	</div><!-- end of <div class="container"> -->

</div>
<?php get_footer(); ?>