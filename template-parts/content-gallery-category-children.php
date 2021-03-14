<?php
$parent_term = get_queried_object();
$child_terms = get_term_children( $parent_term->term_id, 'gallery_category' );
$buttons = get_field('buttons', 'option');
if ( ! empty( $child_terms ) ) { ?>
  <section class="section-portfolio-categories">
    <div class="container">
      <div class="row mb-3">
        <div class="col text-center">
          <h4 class="text-uppercase heading-secondary"><?php echo $parent_term->name; ?> Categories</h4>
        </div>
      </div>
      <div class="row row-eq-height fadeIn wow">
        <?php
        foreach ( $child_terms as $term_id ) {
          $this_term = get_term( $term_id, 'gallery_category' );
           // '/' . $parent_term->slug
          $this_term_permalink = get_site_url() . '/gallery_category/' . $this_term->slug;
          $term_img = ( class_exists('acf') ) ? get_field( 'featured_image', $term_id ) : array( 'url' => 'https://placehold.it/400x400' );?>
          <div class="col col-md-6 col-xl-3 mb-5">
            <div class="card-gallery-category-<?php echo $term_id; ?> h-100">
              <?php
              if ( $term_img ) { ?>
                <a href="<?php echo $this_term_permalink; ?>" title="<?php echo $this_term->name; ?>" class="d-block" >
                  <img class="card-img-top w-100" src="<?php echo $term_img['url']; ?>" alt="<?php echo $term_img['alt']; ?>">
                </a>
              <?php } ?>
              <div class="text-center">
                <h4 class="heading-secondary">
                  <a href="<?php echo $this_term_permalink; ?>" title="<?php echo $this_term->name; ?>" class="black-text" ><?php echo $this_term->name; ?></a>
                </h4>
                <?php if ( $term->description ) { ?>
                  <p class="card-text"><?php echo $this_term->description; ?></p>
                <?php } ?>
                <a href="<?php echo $this_term_permalink; ?>" title="<?php echo $this_term->name; ?>" class="btn btn-outline-black px-0 w-100 ml-0"><?php echo $buttons['default_cta_text']; ?></a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
<?php } ?>
