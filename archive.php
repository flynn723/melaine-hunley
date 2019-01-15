<?php
/**
 * Custom template for displaying the archive jetpack portfolio items 
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package melaine_hunley
 */

$archive = get_queried_object();

get_header(); ?>

<style>
.portfolio-archive-project-types-row .card-title {
  font-weight: 300;
}
@media (min-width: 768px) {
  .category-item .card {
      height: 180px;
  }  
  .card .view-bg-center-cover {
    height: 250px;
    background-size: cover;
    background-position: center;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: .25rem;
  }
}
</style>

<div class="portfolio-archive-wrapper mt-md-4">

  <div class="portfolio-archive-container container card mt-3 mb-0 mt-mb-0 mb-md-4">

    <?php
    get_template_part( 'template-parts/content', 'archive-no-feat-img' ); 
    ?>
    <div class="archive-desc-row row">
      <div class="col">
        <?php echo get_the_archive_description(); ?>
      </div>
    </div>
    <?php
    if ( isset($archive) ) {

      $term_children_ids = get_term_children( $archive->term_id, 'jetpack-portfolio-type' );

      if ( $term_children_ids ) {
        echo '<div class="portfolio-archive-project-types-row row">';

        foreach( $term_children_ids as $term_child_id ) {
          $term_child = get_term_by( 'id', $term_child_id, 'jetpack-portfolio-type' );
          if ( isset($term_child) ) {
            $term_image = get_field('image', 'jetpack-portfolio-type_' . $term_child_id);
          ?>
            <div class="col-12 col-md-4 mb-3">
              <a href="/project-type/<?php echo $term_child->slug; ?>" class="category-item" style="display: block;" >
                <div class="card card-image" style="background-image: url(<?php echo $term_image; ?>);">
                  <div class="text-white text-center d-flex align-items-center rgba-black-light px-4" style="padding: 4rem 0;" >
                    <div class="w-100">
                      <h3 class="card-title pt-2" style="text-transform: uppercase;" ><?php echo $term_child->name; ?></h3>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          <?php
          }
        }
        echo '</div>';
      } else {
      ?>
        <div class="archive-jetpack-portfolio-items-row row">
          <?php if ( have_posts() ) { ?>
            <div class="col">        
              <?php
              $inc = 0;
              while ( have_posts() ) { the_post();
                if ($inc % 3 == 0) {
                  echo ($inc > 0) ? '</div>' : ''; // close div if it's not the first
                  echo '<div class="row">';              
                }
                get_template_part( 'template-parts/content', 'archive-jetpack-portfolio' );
                $inc++;
              } ?>
            </div>
          <?php } else {
            get_template_part( 'template-parts/content', 'none' );
          } ?>
        </div>
      <?php
      }
    }
    ?>
  </div><!-- end of <div class="container"> -->

</div>
<?php get_footer(); ?>
