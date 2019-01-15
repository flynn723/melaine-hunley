<?php
$feat_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
<div class="col-12 col-md-4">
  <div class="card mb-4" >
    <?php if ($feat_img_url) { ?>
      <div class="view view-bg-center-cover overlay d-none d-md-block" style="background-image: url('<?php echo $feat_img_url; ?>');">
        <img class="card-img-top w-100" src="<?php echo $feat_img_url; ?>" alt="<?php the_title_attribute(); ?>" style="visibility: hidden;">
        <a href="<?php the_permalink(); ?>">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
      <img src="<?php echo $feat_img_url; ?>" alt="<?php the_title_attribute(); ?>" class="w-100 d-md-none"/>
    <?php } ?>
    <div class="card-body">
      <a class="card-title h5 ellipsis d-block mb-0" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_title(); ?></a>
    </div>
  </div>
</div>