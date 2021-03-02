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
get_header();
$show_feat_img = ( class_exists('acf') ) ? get_field( 'show_feat_img' ) : true; ?>

<div class="template-page">

	<?php if ( wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) && $show_feat_img  ) {
		get_template_part( 'template-parts/content', 'hero' );
	} else {
		get_template_part( 'template-parts/content', 'no-feat-img' ); 
	} 

	if ( have_posts() ) {

		while ( have_posts() ) { the_post(); ?>

			<div class="container mb-5">
				<div class="row">
					<div class="col">
						<?php the_content(); ?>
					</div>
				</div>
			</div>

		<?php }

	} else { 

		get_template_part( 'template-parts/content', 'none' );

	} ?>

</div>

<?php get_footer(); ?>