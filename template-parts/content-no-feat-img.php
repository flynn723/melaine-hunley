<?php $sub_title = ( class_exists('acf') ) ? get_field( 'sub_title' ) : "Install Advanced Custom Fields plugin."; ?>
<div class="container pt-5 mb-5">
	<div class="row">
		<div class="col text-center">

			<?php if ( is_archive() ) {
                $parent_term = get_queried_object();
                // var_dump($parent_term);
                $child_terms = get_term_children( $parent_term->term_id, 'gallery_category' ); ?>

				<h1 class="font-family-pinyon" ><?php echo $parent_term->name; ?></h1>
				<?php if ( $parent_term->description ) : ?><h3 class="text-uppercase font-family-rosarivo mb-0" ><?php echo $parent_term->description; ?></h3><?php endif; ?>

			<?php } else { ?>

				<h1 class="font-family-pinyon" ><?php the_title(); ?></h1>
				<?php if ( $sub_title ) : ?><h3 class="text-uppercase font-family-rosarivo mb-0" ><?php echo $sub_title; ?></h3><?php endif; ?>

			<?php } ?>

		</div>
	</div>
</div>