<section class="section-breadcrumb container-fluid" style="background: #eceeef;">
  <div class="row">
    <div class="container">
      <div class="row">
        <diiv class="col">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-uppercase mb-0 pl-0">
              <li class="breadcrumb-item">
                <a href="<?php echo get_site_url(); ?>" title="<?php bloginfo('name'); ?>" class="text-black">Home</a>
              </li>
              <?php if ( is_page_template( 'templates/template-portfolio.php' ) ) { ?>
                <li class="breadcrumb-item active text-black">Portfolio</li>
              <?php } else if ( is_archive() ) {
                $parent_term = get_queried_object();
                // var_dump($parent_term);
                // $child_terms = get_term_children( $parent_term->term_id, 'gallery_category' );
                ?>
                <li class="breadcrumb-item">
                  <a href="/portfolio" class="text-black">Portfolio</a>
                </li>
                <?php if ( $parent_term->parent ) {
                  $this_term = get_term( $parent_term->parent, 'gallery_category' );
                  $this_term_permalink = get_site_url() . '/gallery_category/' . $this_term->slug; ?>
                  <li class="breadcrumb-item active">
                    <a href="<?php echo $this_term_permalink; ?>" class="text-black"><?php echo $this_term->name; ?></a>
                  </li>  
                <?php } ?>
        				<li class="breadcrumb-item active"><?php echo $parent_term->name; ?></li>
              <?php } else if ( is_single() ) { ?>
                <li class="breadcrumb-item"><a href="/portfolio" class="text-black">Portfolio</a></li>
                <li class="breadcrumb-item active text-black"><?php the_title(); ?></li>
              <?php } ?>
            </ol>
          </nav>
        </diiv>
      </div>
    </div>
  </div>
</section>
