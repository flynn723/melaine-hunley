<?php
/**
 * Template part for displaying featured images
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package melaine_hunley
 */

$feat_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
<div class="feat-img-wrapper row" style="background-image: url('<?php echo $feat_img_url; ?>') !important;">
	<div class="container clearfix">
		<div class="row">
			<div class="feat-img-title-wrapper text-center">
				<h2><?php the_title(); ?></h2>
			</div>
		</div>
	</div>
</div>