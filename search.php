<?php
/**
 * The template for displaying search results posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package melaine_hunley
 */

get_header(); ?>

<div class="template-search">

	<div class="container pt-5 mb-5">
		<div class="row">
			<div class="col text-center">
			  <h1 class="font-family-pinyon" >Search</h1>
			</div>
		</div>
	</div>

	<div class="container mb-5">
		<div class="row mb-5">
			<div class="col">

			    <form id="search" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
			      <div class="row">
			      	<div class="col offset-lg-2 col-lg-6">
				        <input name="s" id="s" class="form-control input-search" type="text" value="<?php echo get_search_query(); ?>" placeholder="<?php _e('Search...'); ?>" />			      		
			      	</div>
			      	<div class="col col-lg-2">
				        <!-- <input type="hidden" name="post_type" value="product" /> -->
				        <button class="btn btn-outline-black m-0" type="submit" value="Search"><i class="fa fa-search"></i> Search</button>
			      	</div>
			      </div>
			    </form>

			</div>
		</div>

	    <div class="row">
	      <div class="col">

	        <?php if ( have_posts() ) {

	          while ( have_posts() ) { the_post();

	            get_template_part( 'template-parts/content', 'blog' ); ?>

	            <hr class="mb-4">

	          <?php }

	        } else { 

	          get_template_part( 'template-parts/content', 'none' );

	        } ?>  

	      </div>

	    </div>
	</div>

</div>

<?php get_footer(); ?>