<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package melaine_hunley
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
            <p class="card-text post-meta">
                <span class="entry-author author">
                    <span class="author-avatar">
                        <?php echo get_avatar( get_the_author_meta('ID'), 24 ); ?>
                    </span> by <strong><!--<?php the_author_posts_link(); ?>--><?php echo $author_display_name; ?></strong>
                </span>
                <span class="entry-date">published on <i class="fa fa-clock-o"></i> <span class="date"><?php the_time( 'F j, Y'); ?></span></span>
            </p>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php melaine_hunley_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'melaine-hunley' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'melaine-hunley' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php melaine_hunley_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
