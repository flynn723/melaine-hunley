<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package melaine_hunley
 */

get_header(); ?>
<div class="post-wrapper wrapper clearfix">

	<div class="post-container container page-container-card card pt-3 mb-4">

		<?php
		if ( wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ) {
			get_template_part( 'template-parts/content', 'single-feat-card' ); 
		} else {
			get_template_part( 'template-parts/content', 'no-feat-img' ); 
		} ?>

		<div class="row">
			<?php if ( have_posts() ) : ?>

				<div class="col-12 col-md-9">			
					<?php while ( have_posts() ) { the_post(); ?>

						<?php
						// get_template_part( 'template-parts/content', get_post_type() );
						get_template_part( 'template-parts/content', 'single' );

						melaine_hunley_post_navigation();
						
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?>

					<?php } ?>

				</div>
				<div class="post-sidebar-col col-12 col-md-3">
            <?php if ( is_active_sidebar( 'post-sidebar' ) ) {
                dynamic_sidebar( 'post-sidebar' );
            } ?>				
				</div>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
		</div>
	</div><!-- end of <div class="container"> -->

</div>
<?php get_footer(); ?>