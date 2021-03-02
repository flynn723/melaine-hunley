<div class="gallery" id="gallery">

    <div id="mdb-lightbox-ui"></div>

    <div class="mdb-lightbox no-margin">

		<?php

		// check if the repeater field has rows of data
		if( have_rows('images') ) {

		 	// loop through the rows of data
		    while ( have_rows('images') ) { the_row();

		        // display a sub field value
		        $image = get_sub_field('image');
		        $image_size = $image['sizes']['large-width'] . 'x' . $image['sizes']['large-height']; ?>

				<figure class="mb-3 pics animation all 2">
			        <a href="<?php echo $image['url']; ?>" data-size="<?php echo $image_size; ?>">
						<img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
					</a>
				</figure>

		    <?php }

		} else { ?>

			<h3 class="text-center">No gallery images exist please add some.</h3>

		<?php } ?>

	</div>

</div>
