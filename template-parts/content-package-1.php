<section class="section-content-package container-fluid mb-5">


  <div class="row">
    <div class="container">

      <?php
      $content = get_the_content();
      if ( $content ) { ?>
        <div class="row mb-5">
          <div class="col col-lg-8 offset-lg-2">
            <?php the_content(); ?>        
          </div>
        </div>
      <?php } ?>

      <?php if( have_rows('packages') ) { ?>

        <div class="row row-eq-height justify-content-center"><!--  row-eq-height -->

          <?php
          // $packages = get_field_object('packages');
          // $count = count( $packages['value'] );
          while ( have_rows('packages') ) { the_row(); 

            $img = get_sub_field('image');
            $title = get_sub_field('title');
            $content = get_sub_field('content'); ?>

            <div class="col-md-6 mb-4">

              <div class="card h-100">

                <?php if ( $img ) { ?>
                  <img class="card-img-top w-100" src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                <?php } ?>

                <div class="card-body">

                  <h4 class="card-title"><?php echo $title; ?></h4>
                  <div class="card-text"> <?php echo $content; ?></div>

                </div>

              </div>

            </div>

          <?php } ?>

        </div>

      <?php } else { ?>
        
        <div class="row">
          <div class="col text-center">
            <p>There are no packages, yet. Please add some packages.</p>
          </div>
        </div>

      <?php } ?>
  
      <div class="row"></div>

    </div>
  </div>
</section>

<?php
$content_footer = get_field( 'content_footer' );
if ( $content_footer ) { ?>

  <section class="section-package-content-footer container-fluid mb-5">
    <div class="row">
      <div class="container">

        <div class="row">
          <div class="col col-lg-8 offset-lg-2 text-center">

            <?php echo $content_footer; ?>

          </div>
        </div>

      </div>
    </div>
  </section>

<?php } ?>