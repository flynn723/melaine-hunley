<?php
/**
 * Custom template for displaying the contact page
 *
 * Template Name: Contact
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

<div class="page-wrapper wrapper clearfix">

	<div class="page-container container card mt-md-4 mb-4">
		<?php
		get_template_part( 'template-parts/content', 'no-feat-img' ); 
		?>
		<div class="row">
			<?php if ( have_posts() ) : ?>

				<div class="col-12 col-md-8">				
					<?php while ( have_posts() ) { the_post(); ?>

						<?php
							get_template_part( 'template-parts/content', 'page' );
						?>

					<?php } ?>

				</div>
				<div class="page-contact-sidebar sidebar-col col-12 col-md-4">

					<div class="card">

					    <!-- <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap"> -->

					    <div class="card-body">
					        <h4 class="card-title">Contact</h4>
									<div class="card-text">
										<!-- <p><strong>Customer Service</strong></p>  -->
										<p>Shelley Iger Sivak<br/>
										shelley@sivakconsulting.com<br/>
										21 Sutton<br/>
										Irvine, CA 92618<br/>
										(949) 939-8550</p>
										<p>Donnie DeWees<br/>
										donnie@deweesdesign.com<br/>
										191 South Orange Street<br/>
										Orange, CA 92866<br/>
										(949) 246-2809</p>
									</div>
					        <!-- <a href="#" class="btn btn-pink">Button</a> -->
					    </div>

					</div>
		
				</div>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
		</div>

	</div><!-- end of <div class="container"> -->

</div>

<script>
(function($) {
$(document).ready(function() {
	setTimeout( function() {
		$('.page-container .nf-form-content input, .page-container .nf-form-content textarea').addClass('form-control');
		$('.page-container .nf-form-content input[value="Submit"]').addClass('btn btn-black');
	}, 1000 ); 
});
})(jQuery);
</script>

<?php get_footer(); ?>