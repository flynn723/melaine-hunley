<?php
/*
 * Custom template for displaying booking page
 *
 * Template Name: Booking 
 *
 */
get_header(); 
$show_feat_img = ( class_exists('acf') ) ? get_field( 'show_feat_img' ) : true; ?>

<style>
.section-booking-content .nf-form-cont .nf-form-fields-required {
  display: none;
}
.section-booking-content .nf-form-cont .md-form label {
  padding-left: .5rem;
    color: black;
}
.section-booking-content .nf-form-cont .md-form label.active {
  color: black;
  padding-left: 0;
}
.section-booking-content .nf-form-cont .md-form input[type="text"],
.section-booking-content .nf-form-cont .md-form input[type="email"],
.section-booking-content .nf-form-cont .md-form textarea {
  background: rgba(255, 255, 255, 0.5);  
  color: black;
  letter-spacing: 3px;
}
.section-booking-content .nf-form-cont .md-form input[type="text"],
.section-booking-content .nf-form-cont .md-form input[type="email"] {
  padding-left: .5rem;
}
.section-booking-content .nf-form-cont .md-form textarea {
  padding: .5rem;
}
.section-booking-content .nf-form-cont .submit-wrap input[type="button"] {
    padding: .84rem 2.14rem;
    font-size: .81rem;
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    margin: .375rem;
    border: 0;
    border-radius: .125rem;
    cursor: pointer;
    white-space: normal;
    border: 2px solid black !important;
    background: rgba(255, 255, 255, 255.5);
    color: black !important;
    text-transform: uppercase;
    font-weight: bold;
}
.section-booking-content .nf-form-cont .nf-after-field .nf-error-msg {
  display: none !important;
}
</style>

<div class="template-booking">

	<?php
	if ( wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) && $show_feat_img ) {

		get_template_part( 'template-parts/content', 'hero' );

	} else { 

		get_template_part( 'template-parts/content', 'no-feat-img' );

	}

	if ( have_posts() ) {

		while ( have_posts() ) { the_post();

			$content = get_the_content();
			if ( $content ) { ?>

				<section class="section-booking-content container-fluid mb-5">
					<div class="row">
						<div class="container">
							<div class="row">
								<div class="col col-lg-8 offset-lg-2">
									<?php /* echo $content; */ the_content(); ?>
								</div>
							</div>
						</div>
					</div>
				</section>

			<?php }

		}

	} else {

		get_template_part( 'template-parts/content', 'none' );

	} ?>

</div>

<?php get_footer(); ?>