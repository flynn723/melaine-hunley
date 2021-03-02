<?php
/**
 * The template for displaying all single gallery posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package melaine_hunley
 */

get_header();

$show_feat_img = ( class_exists('acf') ) ? get_field( 'show_feat_img' ) : true;

// $content = get_the_content(); ?>

<div class="template-gallery">

	<?php
	if ( wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) && $show_feat_img ) {
		get_template_part( 'template-parts/content', 'hero' ); 
		get_template_part( 'template-parts/content-gallery', 'breadcrumb'); 
	} else {
		get_template_part( 'template-parts/content-gallery', 'breadcrumb'); 
		get_template_part( 'template-parts/content', 'no-feat-img' ); 
	}
	/*
	if ( ! empty($content) ) { ?>

		<div class="container mb-5">
			<div class="row">
				<div class="col">
					<?php echo $content; ?>
				</div>
			</div>
		</div>

	<?php } */ ?>

	<div class="container mb-5">
		<div class="row">

			<div class="col">

				<?php if ( have_posts() ) {

					while ( have_posts() ) { the_post();

						get_template_part( 'template-parts/content', 'single-gallery' );

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

		</div>
	</div>

</div>
<?php get_footer(); ?>