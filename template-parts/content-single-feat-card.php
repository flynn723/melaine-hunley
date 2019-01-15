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

<div class="container container">
    <!--Card-->
    <div class="card card-cascade wider reverse my-4">

        <!--Card image-->
        <div class="view overlay">
            <img src="<?php echo $feat_img_url; ?>" class="img-fluid w-100" alt="<?php the_title_attribute(); ?>">
            <div class="mask rgba-white-slight"></div>
        </div>

        <div class="card-body text-center">

            <h4 class="card-title black-text"><?php the_title(); ?></h4>
            <!-- <p class="card-text post-meta">
                <span class="entry-author author">
                    <span class="author-avatar">
                        <?php echo get_avatar( get_the_author_meta('ID'), 24 ); ?>
                    </span> by <strong><?php echo $author_display_name; ?></strong>
                </span>
                <span class="entry-date">published on <i class="fa fa-clock-o"></i> <span class="date"><?php the_time( 'F j, Y'); ?></span></span>
            </p> -->

            <!--Social shares-->
            <!-- <div class="social-counters ">
                <a class="btn btn-fb ">
                    <i class="fa fa-facebook left "></i>
                    <span class="clearfix d-none d-md-inline-block">Facebook</span>
                </a>
                <span class="counter ">23</span>
                <a class="btn btn-tw ">
                    <i class="fa fa-twitter left "></i>
                    <span class="clearfix d-none d-md-inline-block">Twitter</span>
                </a>
                <span class="counter ">47</span>
                <a class="btn btn-dribbble ">
                    <i class="fa fa-dribbble left "></i>
                    <span class="clearfix d-none d-md-inline-block">Google+</span>
                </a>
                <span class="counter ">19</span>
                <a class="btn btn-default ">
                    <i class="fa fa-comments-o left "></i>
                    <span class="clearfix d-none d-md-inline-block">Comments</span>
                </a>
                <span class="counter ">34</span>
            </div> -->

        </div>

    </div>
    <!--/.Card-->
</div>



