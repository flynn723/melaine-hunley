<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package melaine_hunley
 */

get_header(); ?>
<div class="template-post">

	<?php
	if ( wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ) {
		get_template_part( 'template-parts/content', 'single-feat-card' ); 
	}
	?>

	<div class="container mb-5">
		<div class="row">

			<div class="col">

				<?php if ( have_posts() ) {

					while ( have_posts() ) { the_post();

						get_template_part( 'template-parts/content', 'single' );

						melaine_hunley_post_navigation();
						
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					}

		        } else { 

		          get_template_part( 'template-parts/content', 'none' );

		        } ?>

		    </div>

			<?php if ( is_active_sidebar( 'post-sidebar' ) ) { ?>

		        <div class="col-md-4 col-lg-3">
					<?php dynamic_sidebar( 'post-sidebar' ); ?>
				</div>

        	<?php } ?>

		</div>
	</div>

</div>
<?php get_footer(); ?>