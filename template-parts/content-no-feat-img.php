
<!-- <div class="page-title-container container mt-md-4"> -->
	<div class="page-title-row row mb-4">
		<div class="page-title-col col-12 pt-4 pb-4">
			<h2 class="black-text mb-0" >
				<?php if ( is_404() ) {
					echo '404 - Page Not Found';
				} else if ( is_home() ) {
					echo get_bloginfo('name') . ' Blog';
				} else {
					the_title();
				} ?>
			</h2>
			<?php
			if( class_exists('acf') && get_field('sub_title') ) { ?>
				<h4 class="grey-text mb-0"><?php the_field('sub_title'); ?></h4>
			<?php } ?>
			<?php if ( is_home() ) { ?>
				<!-- <p class="grey-text mb-0"></p> -->
			<?php } ?>
		</div>
	</div>
<!-- </div> -->