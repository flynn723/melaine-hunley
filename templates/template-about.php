<?php
/*
 * Custom template for displaying about page
 *
 * Template Name: About
 *
 */
get_header(); 
$show_feat_img = ( class_exists('acf') ) ? get_field( 'show_feat_img' ) : true; ?>

<div class="template-about">

	<?php if ( wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) && $show_feat_img  ) {
		get_template_part( 'template-parts/content', 'hero' );
	} else {
		get_template_part( 'template-parts/content', 'no-feat-img' ); 
	}

	if ( have_posts() ) : ?>
				
		<?php while ( have_posts() ) { the_post(); ?>

			<section class="section-page-content container mb-5">
				<div class="row">
					<div class="col col-md-8 offset-lg-2">
						<?php the_content(); ?>
					</div>
				</div>
			</div>

		<?php }

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif;

	// get_template_part( 'template-parts/content', 'instagram' ); ?>

</div>

<?php get_footer(); ?>