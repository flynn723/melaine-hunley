<?php
$taxonomy = get_queried_object();

$posts_per_page = 6;
$offset = ( isset($_GET['page']) ) ? ((int)$_GET['page'] - 1) * $posts_per_page: 0;
$args = array(
	"post_type" 		=> "gallery",
    "tax_query" => array(
        array (
            "taxonomy"	=> "gallery_category",
            "field"		=> "term_id",
            "terms" 	=> array( $taxonomy->term_id ),
        )
    ),
	"posts_per_page"	=> $posts_per_page,    
	"offset"			=> $offset
);
$query = new WP_Query( $args ); ?>

<div class="gallery mb-5" id="gallery">

    <div id="mdb-lightbox-ui"></div>

    <div class="mdb-lightbox no-margin">

		<?php

		while ( $query->have_posts() ) { $query->the_post(); ?>

			<?php
			// check if the repeater field has rows of data
			if ( have_rows('images') ) {

				// $limit = 3;
				$inc = 0;
			 	// loop through the rows of data
			    while ( have_rows('images') ) { the_row();

			    	// if ( $inc < $limit) {

				        // display a sub field value
				        $image = get_sub_field('image');
				        $image_size = $image['sizes']['large-width'] . 'x' . $image['sizes']['large-height']; ?>

						<figure class="mb-3 pics animation all 2">
					        <a href="<?php echo $image['url']; ?>" data-size="<?php echo $image_size; ?>">
								<img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
							</a>
						</figure>

			    	<?php
					// }
			    	$inc++;

			    } // end while

			}

		} ?>

	</div>

</div>

<?php

$args = array(
	"post_type" 		=> "gallery",
    "tax_query" => array(
        array (
            "taxonomy"	=> "gallery_category",
            "field"		=> "term_id",
            "terms" 	=> array( $taxonomy->term_id ),
        )
    ),
	"posts_per_page"	=> -1,    
);
$query = new WP_Query( $args ); 
// pagination
$total_posts_count = $query->post_count;


if ( $total_posts_count > $posts_per_page ) { ?>

<div class="text-center">
	<ul class="pagination pg-black justify-content-center mb-0">
		<?php
		$paginate_url = "/gallery_category/" . $taxonomy->slug . "?page=";
		$active_page = ( isset($_GET['page']) ) ? (int)$_GET['page']: 1;
		$pages_count = ceil( $total_posts_count / $posts_per_page );
		if ( $active_page != 1 ) { ?>
			<li class="page-item" >
				<a class="page-link" href="<?php echo $paginate_url; ?><?php echo $active_page - 1; ?>">&laquo;<!--  Previous --></a>
			</li>
		<?php }
		for( $inc = 1; $inc <= $pages_count; $inc++ ) {
			$class = ( $active_page === $inc ) ? "active": ""; ?>
			<li class="page-item <?php echo $class; ?>" >
				<a class="page-link" href="<?php echo $paginate_url . $inc; ?>"><?php echo $inc; ?></a>
			</li>
		<?php }
		if ( $active_page != $pages_count ) { ?>
			<li class="page-item" >
				<a class="page-link" href="<?php echo $paginate_url; ?><?php echo $active_page + 1; ?>"><!-- Next  -->&raquo;</a>
			</li>
		<?php } ?>
	</ul>
</div>

<?php } ?>