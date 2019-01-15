<?php
/**
 * Template part for displaying featured cards
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package melaine_hunley
 */

$feat_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>

<div class="container container">
    <!--Card-->
    <div class="card card-cascade wider reverse my-4">

        <!--Card image-->
        <div class="view overlay">
            <img src="<?php echo $feat_img_url; ?>" class="img-fluid w-100" alt="<?php the_title_attribute(); ?>">
            <div class="mask rgba-white-slight"></div>
        </div>
        <!--/Card image-->

        <div class="card-body text-center">

            <h4 class="card-title black-text"><strong><?php the_title(); ?></strong></h4>
            <h5 class="indigo-text">Sisters On A Mission</h5>

            <!-- <p class="card-text">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
            </p> -->

        </div>

    </div>
    <!--/.Card-->
</div>



