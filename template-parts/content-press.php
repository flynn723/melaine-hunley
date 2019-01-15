<!-- <h4 class="mb-4">Top Publications Talk About Melaine Hunley</h4> -->
<div class="content-press-row row py-3"  style="margin-top: -1.5rem;">
	<div class="col-6 col-md">
		<img class="fluid-img w-100 o-4" src="/wp-content/uploads/2018/06/elle.png" alt="Elle" /></div>
	<div class="col-6 col-md">
		<img class="fluid-img w-100 o-4" src="/wp-content/uploads/2018/06/tatler.png" alt="Tatler" /></div>
	<div class="col-6 col-md">
		<img class="fluid-img w-100 o-4" src="/wp-content/uploads/2018/06/she-said-beauty.png" alt="She Said Beauty" /></div>
	<div class="col-6 col-md">
		<img class="fluid-img w-100 o-4" src="/wp-content/uploads/2018/06/esquire.png" alt="Esquire" /></div>
	<div class="col-6 col-md">
		<img class="fluid-img w-100 o-4" src="/wp-content/uploads/2018/06/instyle.png" alt="InStyle" /></div>
</div>
<div class="press-items-row row py-4">

  <?php 
  $args = array(
      'post_type' => 'press_item',
      'orderby'          => 'date',
      'order'            => 'ASC',
      'posts_per_page'   => 3,
      // 'category_name'  => 'carousel'
  );

  // The Query
  $pressQuery = new WP_Query( $args );

  if ( $pressQuery->have_posts() ) {
        // The Loop
    while ( $pressQuery->have_posts() ) { $pressQuery->the_post(); ?>

				<div class="col col-md-4 mb-4 mb-md-0">
					<div class="card">
						<img class="fluid-img w-100" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>" />
						<div class="card-body">
							<h4 class="card-title"><?php the_title(); ?></h4>
							<?php the_content(); ?>
						</div>
					</div>
				</div>

		<?php
		} ?>
	<?php
	} ?>
</div>
<div class="additional-press-items-row row load-additional-press-items-here text-center" style="display: none;">
	<div class="col">
		<i class="pink-text fa fa-cog fa-spin" style="font-size: 3rem;"></i>	
	</div>
</div>
<div class="load-more-btn-row row">
	<div class="col">
		<button class="btn btn-pink load-more-btn mx-auto mb-4" style="display: block;">Load More...</button>		
	</div>
</div>

<script>
(function($) {
	$('.press-wrapper .load-more-btn').on('click', function() {

		$('.additional-press-items-row').show();

		let settings = {
      url: '<?php echo esc_url_raw( rest_url('/wp/v2') ); ?>/press_item/',
		}

		$.ajax(settings).done(function( pressItems ) {

      console.log("Press Items: ", pressItems);

      let html = '';

      if (pressItems.length >= 3) {

	      $.each(pressItems, function(key, value) {

	      	console.log("Key: ", key);

	      	// we dont want the first 3 items
	      	if (key < pressItems.length - 3) {

		      	html += '<div class="col col-md-4 mb-4">';
							html += '<div class="card">';
								html += '<img class="fluid-img w-100" src="' + value.melaine_hunley_additional_meta.thumbnail + '" alt="' + value.title.rendered + '" />';
								html += '<div class="card-body">';
									html += '<h4 class="card-title text-left">' + value.title.rendered + '</h4>';
									html += value.content.rendered;
								html += '</div>';
							html += '</div>';
						html += '</div>';

	      	}

	      });

      } else {
      	alert('please upload more press items');
      }

      $('.press-wrapper .load-additional-press-items-here').html(html);

      $('.press-wrapper .load-more-btn').hide();
    });
		
	});
})( jQuery );
</script>


