<?php
/*
 * Custom template for displaying contact page
 *
 * Template Name: Contact
 *
 */
get_header(); ?>

<div class="template-contact">

	<?php
	if ( wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ) {
		get_template_part( 'template-parts/content', 'hero-contact' );
	} else { ?>

		<div class="container mb-5">
			<div class="row">
				<div class="col text-center">
					<h3 class="text-danger">Featured image required for contact page. Please set it.</h3>
				</div>
			</div>
		</div>

	<?php }

	if ( have_posts() ) : ?>
				
		<?php while ( have_posts() ) { the_post(); ?>

		<?php } ?>

	<?php else : ?>

		<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif;

	// get_template_part( 'template-parts/content', 'book-now' ); ?>

</div>

<?php get_footer(); ?>