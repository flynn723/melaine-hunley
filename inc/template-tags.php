<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package melaine_hunley
 */

if ( ! function_exists( 'melaine_hunley_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function melaine_hunley_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category();
			if ( $categories_list ) {
				// echo '<ul class="nav md-pills nav-justified pills-pink"">';
				// 	foreach( $categories_list as $category ) {
				// 			echo '<li ><a class="nav-link active" href="' . get_site_url() . '/category/' . $category->slug . '" title="' . $category->cat_name . '">' . $category->cat_name . '</a></li>';
				// 	}
				// echo '</ul>';
				echo '<div class="categories-badges-row row mb-3"><div class="col">Posted in: ';
					foreach( $categories_list as $category ) {
							echo '<a class="badge badge-black mr-1" href="' . get_site_url() . '/category/' . $category->slug . '" title="' . $category->cat_name . '">' . $category->cat_name . '</a>';
					}
				echo '</div></div>';
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tags();
			if ( $tags_list ) {
				echo '<div class="tags-badges-row row mb-3"><div class="col">Tagged: ';
					foreach( $tags_list as $tag ) {
						// nav-item
							echo '<a class="badge badge-black mr-1" href="' . get_site_url() . '/tag/' . $tag->slug . '" title="' . $tag->name . '">' . $tag->name . '</a>';
					}
				echo '</div></div>';
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'melaine-hunley' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'melaine-hunley' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'melaine_hunley_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function melaine_hunley_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
			<?php
			the_post_thumbnail( 'post-thumbnail', array(
				'alt' => the_title_attribute( array(
					'echo' => false,
				) ),
			) );
			?>
		</a>

		<?php
		endif; // End is_singular().
	}
endif;



if ( ! function_exists( 'melaine_hunley_post_navigation' ) ) :
	function melaine_hunley_post_navigation() { /* ?>

		<div id="post-navigation" class="row py-3 mt-3 mb-3">
			<?php
			$prev_post = get_previous_post( true, array() );
			 if( $prev_post ): ?>
			    <div class="col col-previous text-left">
			        <a href="<?php echo $prev_post->guid; ?>" title="Previous" style="display: block;" ><i class="fa fa-arrow-left"></i> Previous</a>
			    </div>
			<?php endif; ?>
			<?php 
			$next_post = get_next_post( true, array() );
			if( $next_post ): ?>
			    <div class="col col-next text-right">
			        <a href="<?php echo $next_post->guid; ?>" title="Next" style="display: block;" >Next <i class="fa fa-arrow-right"></i></a>
			    </div>
			<?php endif; ?>
		</div>
		<?php */
	}
endif;
