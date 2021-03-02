<section class="section-breadcrumb container-fluid" style="background: #eceeef;">
  <div class="row">
    <div class="container">
      <div class="row">

        <diiv class="col">
          
          <nav aria-label="breadcrumb">

            <ol class="breadcrumb text-uppercase mb-0">

              <li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>" title="<?php bloginfo('name'); ?>" >Home</a></li>

              <?php if ( is_page_template( 'templates/template-packages.php' ) ) { ?>
                <li class="breadcrumb-item active">Packages</li>
              <?php } else if ( is_page_template( 'templates/template-package.php' ) ) { ?>
                <li class="breadcrumb-item"><a href="/packages" >Packages</a></li>
                <li class="breadcrumb-item active"><?php the_title(); ?></li>
              <?php } else { ?>
                <li class="breadcrumb-item active"><?php the_title(); ?></li>
              <?php } ?>
            
            </ol>
          </nav>
          
        </diiv>
        
      </div>
    </div>
  </div>
</section>