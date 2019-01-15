<style>
.home-categories-section {
  background: #fff;
}
.home-projects-section .card-title {
  font-weight: 300;
}
@media (min-width: 768px) {
  .category-item .card {
    height: 180px;
  }
}
</style>

<section class="home-projects-section section py-5 wow fadeIn">
  <div class="container" >
  
    <h2 class="section-heading pt-3 m-0 mb-4 black-text">
      <em><?php _e('A collaborative architecture, design and art studio.', 'melaine-hunley'); ?></em>
    </h2>
    
      <div class="categories-wrapper">
        <div class="row">

          <?php
          $categories = get_terms('jetpack-portfolio-type');

          foreach( $categories as $category ) {

            $taxonomy_image = get_field('image', 'jetpack-portfolio-type_' . $category->term_id);

            if (!$category->parent) {
            ?>
              <div class="col-12 col-md-4 mb-3">
                <a href="/project-type/<?php echo $category->slug; ?>" class="category-item" style="display: block;" >
                  <div class="card card-image" style="background-image: url(<?php echo $taxonomy_image; ?>);">
                    <div class="text-white text-center d-flex align-items-center rgba-black-light px-4" style="padding: 4rem 0;" >
                      <div class="w-100">
                        <h3 class="card-title pt-2" style="text-transform: uppercase;" ><?php echo $category->name; ?></h3>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            <?php
            }
          }
          ?>

        </div>
      </div>

  </div>

</section>
