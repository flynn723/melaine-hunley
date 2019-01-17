<?php
/*
 * Custom template for displaying coming soon page
 *
 * Template Name: Coming Soon
 *
 */
get_header(); ?>

<style type="text/css">
body {
	padding-top: 0 !important; 
}
header, .footer-first-row {
	display: none;
}
.card-coming-soon {
	background: rgba(255, 255, 255, 0.25);
	border-radius: 0.25rem;
	max-width: 400px;
}

/* Plugins > Ninja Forms */
.nf-field-label > label {
    font-weight: bold;
}
.nf-field-label .ninja-forms-req-symbol {
	display: none;
}

.nf-form-get-early-access .nf-form-title,
.nf-form-get-early-access .nf-before-form-content {
    display: none;
}
</style>

<div class="coming-soon-wrap" style="background-color: #f7f7f7;" >

  <?php
  get_template_part( 'template-parts/content', 'hero-coming-soon' );
  ?>

</div>

<?php get_footer(); ?>