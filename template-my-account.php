<?php
/*
 * Custom template for displaying the woocommerce my account page
 *
 * Template Name: My Account
 *
 */
get_header(); ?>

<style>
.my-account-wrapper .woocommerce-info {
	margin-top: 0;
}
.woocommerce-account .woocommerce-MyAccount-navigation ul {
    padding: 0;
    margin: 0;
}
.woocommerce-MyAccount-navigation li {
  margin: 0;
    line-height: 32px;
    display: block;
    margin-bottom: 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    padding: 5px;
}
.woocommerce-MyAccount-navigation li a {
    color: #444;
    display: block;
}
.woocommerce-MyAccount-navigation li:focus,
.woocommerce-MyAccount-navigation li:hover {
    text-decoration: none;
    background-color: #f5f5f5;
}
.woocommerce-MyAccount-navigation li.is-active {
    cursor: default;
    box-shadow: 0 12px 20px -10px rgba(255, 165, 0, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(255, 165, 0, 0.2);
}
.woocommerce-MyAccount-navigation li.is-active a {
    cursor: default;
}
.woocommerce-MyAccount-navigation li.is-active a {
    color: #fff;
}
.woocommerce-MyAccount-navigation li.is-active,
.woocommerce-MyAccount-navigation li.is-active:hover,
.woocommerce-MyAccount-navigation li.is-active:focus {
background-color: #b20839;
    border-color: #b20839;
}
@media (min=width: 768px) {
    .woocommerce-account .woocommerce-MyAccount-navigation {
        box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
        z-index: 2;
    }
    .woocommerce-account .woocommerce-MyAccount-navigation ul {
        padding: 0;
        margin: 15px;
    }
}
.woocommerce-MyAccount-navigation li a:focus, .woocommerce-MyAccount-navigation li a:hover {
    text-decoration: none;
    background-color: transparent;
}
.my-account-wrapper .woocommerce form.login,
.my-account-wrapper .woocommerce form.register {
    border: none;
}
.my-account-wrapper .woocommerce #customer_login {
    display: none;
}
.my-account-wrapper .g-recaptcha {
    margin: 1rem 0;
}
</style>

<div class="my-account-wrapper page-wrapper mt-md-4">

	<div class="page-container container card mb-4">

        <?php
        if ( wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ) {
            get_template_part( 'template-parts/content', 'feat-jarallax' ); 
        } else {
            get_template_part( 'template-parts/content', 'no-feat-img' ); 
        } ?>

		<div class="row">

			<div class="col-12">				
				<?php while ( have_posts() ) { the_post(); ?>

					<?php the_content(); ?>

				<?php } ?>
			</div>

		</div>
	</div>

</div>

<script>
(function ($) {
$(document).ready(function() {
    $('.my-account-wrapper .woocommerce #customer_login').addClass('row').removeClass('u-columns col2-set').css('display', 'flex');
    $('.my-account-wrapper .woocommerce #customer_login .u-column1').addClass('col-12 col-md-6').removeClass('u-column1 col-1');
    $('.my-account-wrapper .woocommerce #customer_login .u-column2').addClass('col-12 col-md-6').removeClass('u-column2 col-2');
    $('.my-account-wrapper .woocommerce-MyAccount-content').addClass('card p-3');
    $('.my-account-wrapper .woocommerce-form-login').addClass('card');
    $('.my-account-wrapper .woocommerce-form-register').addClass('card');
    $('.my-account-wrapper .woocommerce-form-row').addClass('mt-4 md-form');
    $('.my-account-wrapper .woocommerce-form-row input').addClass('form-control');
    $('.my-account-wrapper #customer_login .form-row button[type="submit"]').addClass('btn btn-pink mr-4');
});
})(jQuery);
</script>

<?php get_footer(); ?>
