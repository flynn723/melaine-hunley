<style></style>

<section class="section-testimonials container-fluid">
	<div class="row">
		<div class="container">

			<?php
			// check if the repeater field has rows of data
			if( have_rows('testimonials') ) { ?>

				 	<?php
				 	$inc = 1;
				 	// loop through the rows of data
				    while ( have_rows('testimonials') ) { the_row();

				        // display a sub field value
				        $title = get_sub_field('title');
				        $image = get_sub_field('image');
				        $description = get_sub_field('desc'); ?>

						<div class="row mb-5">

					        <?php if ( $inc%2 !== 0 ) { ?>
							    <div class="col-lg-5 mb-5 mb-lg-0">
							      <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
							        <img class="img-fluid w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
							      </div>
							    </div>
					        <?php } ?>
						    <div class="col-lg-7">
								<h3 class="font-weight-bold mb-3 text-uppercase heading-secondary"><?php echo $title; ?></h3>
								<div class="desc"><?php echo $description; ?></div>
						    </div>
					        <?php if ( $inc%2 == 0 ) { ?>
							    <div class="col-lg-5 mb-5 mb-lg-0">
							      <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
							        <img class="img-fluid w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
							      </div>
							    </div>
					        <?php } ?>
						
						</div>

				        <?php $inc++;
				    } ?>
					

			<?php } else { ?>

				<div class="row mb-5">
					<div class="col text-center">
						<h3>No gallery images exist please add some.</h3>					
					</div>
				</div>

			<?php } ?>
			
		</div>
	</div>
</section>