<?php
/**
 * Template part for displaying featured single post cards
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package melaine_hunley
 */

$feat_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

$author = new WP_User( $post->post_author );
$author_id = $author->ID;
$author_display_name = $author->display_name;
?>

<div class="container container pt-3 mb-5">
    <!--Card-->
    <div class="card card-cascade wider reverse">

        <!--Card image-->
        <div class="view overlay">
            <img src="<?php echo $feat_img_url; ?>" class="img-fluid w-100" alt="<?php the_title_attribute(); ?>">
            <div class="mask rgba-white-slight"></div>
        </div>

        <div class="card-body text-center">

            <h4 class="card-title black-text mb-0"><?php the_title(); ?></h4>

        </div>

    </div>
    <!--/.Card-->
</div>



