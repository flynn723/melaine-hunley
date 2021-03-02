<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package melaine_hunley
 */

get_header(); ?>

<div class="template-404">

    <div class="container pt-5 mb-5">
      <div class="row">
        <div class="col text-center">
          <h1 class="font-family-pinyon" >404</h1>
          <h3 class="text-uppercase font-family-rosarivo" >Page Not Found</h3>  
        </div>
      </div>
    </div>

	<div class="container mb-5">
		<div class="row">
			<div class="col text-center">
				<p><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'melaine-hunley' ); ?></p>
			</div>
		</div>
	</div>

</div>

<?php get_footer(); ?>
