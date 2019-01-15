<?php
$feat_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$author = new WP_User( $post->post_author );
$author_id = $author->ID;
$author_display_name = $author->display_name;
?>
<!--Grid row-->
<div class="row">

    <?php if ($feat_img_url) { ?>
        <!--Grid column-->
        <div class="col-12 col-md-5 mb-4">
            <!--Featured image-->
            <div class="view overlay rounded z-depth-1-half">
                <img src="<?php echo $feat_img_url; ?>" class="img-fluid" alt="<?php the_title_attribute(); ?>">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
        </div>
    <?php } ?>

    <!--Grid column-->
    <div class="col-12 <?php echo ($feat_img_url) ? 'col-md-7' : ''; ?> mb-4">
        <a href="<?php the_permalink(); ?>" class="h3 mb-1 dark-grey-text ellipsis" title="<?php the_title_attribute(); ?>" style="display: block;">
            <?php the_title(); ?>
        </a>   
        <p class="grey-text"><?php the_excerpt(); ?></p>
        <p class="post-meta">
            <span class="entry-author author">
                <span class="author-avatar">
                    <?php
                    if ($author_display_name == "Radical SkinCare") {
                        echo '<img alt="" src="http://demo.iamradical.com/wp-content/uploads/2018/05/radicalskincare-logo-copy.png" class="avatar avatar-24 photo" height="24" width="24">';
                    } else {
                        echo get_avatar( get_the_author_meta('ID'), 24 );                        
                    }
                    ?>
                </span> by <strong><?php echo $author_display_name; ?></strong>
            </span>
            <!-- <span class="entry-date">published on <i class="fa fa-clock-o"></i> <span class="date"><?php the_time( 'F j, Y'); ?></span></span> -->
        </p>
        <a href="<?php the_permalink(); ?>" class="btn btn-black" title="<?php the_title_attribute(); ?>"><i class="fa fa-angle-right mr-1"></i> Read more</a>
    </div>

</div>

<hr class="mb-4">