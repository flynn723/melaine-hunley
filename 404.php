<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package melaine_hunley
 */

get_header(); ?>
<div class="page-wrapper wrapper clearfix">

	<div class="page-container container card mt-md-4 mb-md-4">
		<?php
		get_template_part( 'template-parts/content', 'no-feat-img' ); 
		?>
		<div class="row">
			<div class="col-12">	
				<p><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'melaine-hunley' ); ?></p>
			</div>
		</div>
	</div><!-- end of <div class="container"> -->

</div>
<?php get_footer(); ?>
