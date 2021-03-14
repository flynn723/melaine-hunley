<?php
$feat_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$categories = get_categories();
$buttons = get_field('buttons', 'option');
?>
<div class="row">
    <?php if ($feat_img_url) { ?>
        <div class="col-12 col-md-5 mb-4">
            <div class="view overlay rounded z-depth-1-half">
                <img src="<?php echo $feat_img_url; ?>" class="img-fluid w-100" alt="<?php the_title_attribute(); ?>">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
        </div>
    <?php } ?>
    <div class="col-12 <?php echo ($feat_img_url) ? 'col-md-7' : ''; ?> mb-4">
        <p class="font-family-pinyon  mb-1" ><?php the_date( 'l, F j, Y' ); ?></p>
        <a href="<?php the_permalink(); ?>" class="h3 mb-1 d-block text-uppercase heading-secondary ellipsis" title="<?php the_title_attribute(); ?>" >
            <?php the_title(); ?>
        </a>   
        <p class="grey-text mb-1" >Posted in <?php $i = 0; foreach( $categories as $category ) { echo $category->name; echo ($i) ? ",": ""; $i++; } ?></p>
        <p class="grey-text mb-1"><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn btn-black ml-0" title="<?php the_title_attribute(); ?>"><?php echo $buttons['default_cta_text']; ?></a>
    </div>
</div>