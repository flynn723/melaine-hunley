<?php
/*
 * Custom template for displaying about page
 *
 * Template Name: About
 *
 */
get_header(); ?>

<div class="about-wrapper">

	<?php
	if ( wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ) {
		get_template_part( 'template-parts/content', 'hero' );
	} else {
		get_template_part( 'template-parts/content', 'no-feat-img' ); 
	}

	while ( have_posts() )  { the_post(); ?>

	  <section class="page-content py-5">
		  <div class="container">
		  	<div class="row">
		  		<div class="col-12 col-md-6">
		  			<?php the_content(); ?>
		  			<a href="/contact" class="btn btn-primary">Contact</a>
		  		</div>
		  		<div class="col-12 col-md-6">
		  			<img src="http://box5114.temp.domains/~katiemo4/wp-content/uploads/pp/images/1520874442-DSC_7250%28pp_w1600_h2405%29.jpg" class="card w-100" style="border-radius: 0.25rem;" />
		  		</div>
		  	</div>
		  </div>
	  </section>

	  <?php
	}

  get_template_part( 'home-parts/home', 'blog' );
  ?>

</div>

<?php get_footer(); ?>