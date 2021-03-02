<?php

$columns = array();

// first column
$first_card_img = get_field('first_card_image');
$columns[] = array(
  'link' => '/about',
  'image' => ( class_exists('acf') ) ? $first_card_img['url'] : 'https://melaniehunley.com/wp-content/uploads/2019/01/smiling-couple-1.jpg',
  'title' => ( class_exists('acf') ) ? get_field('first_card_title') : "Hello, I'm Melaine",
  'desc' =>  ( class_exists('acf') ) ? get_field('first_card_content') : "Let's get to know each other.",
);

// second column
$second_card_img = get_field('second_card_image');
$columns[] = array(
  'link' => "/portfolio",
  'image' => ( class_exists('acf') ) ? $second_card_img['url'] : 'https://melaniehunley.com/wp-content/uploads/2019/01/smiling-couple-2.jpg',
  'title' => ( class_exists('acf') ) ? get_field('second_card_title') : "Portfolio",
  'desc' =>  ( class_exists('acf') ) ? get_field('second_card_content') : "Stroll through my photo gallery",
);

// third column
$third_card_img = get_field('third_card_image');
$columns[] = array(
  'link' => "/contact",
  'image' => ( class_exists('acf') ) ? $third_card_img['url'] : 'https://melaniehunley.com/wp-content/uploads/2019/01/smiling-couple-3.jpg',
  'title' => ( class_exists('acf') ) ? get_field('third_card_title') : "Let's Chat",
  'desc' => ( class_exists('acf') ) ? get_field('third_card_content') : "Ready to start your special shoot today?",
);

?>
<section class="section-about-portfolio-contact mb-5 pb-5">

  <div class="container">
    <div class="row row-eq-height fadeIn wow">

      <?php foreach( $columns as $column ) { ?>

        <!-- Grid column -->
        <div class="col-md-4 mb-lg-0">
          <!-- Card -->
          <div class="card card-cascade narrower card-ecommerce h-100">
            <!-- Card image -->
            <div class="view view-cascade overlay">
              <img src="<?php echo $column['image']; ?>" class="card-img-top w-100" alt="<?php echo $column['title']; ?>">
              <a href="<?php echo $column['link']; ?>" >
                <div class="mask rgba-white-slight waves-effect waves-light"></div>
              </a>
            </div>
            <!-- Card content -->
            <div class="card-body card-body-cascade text-center pb-3">
              <h4 class="card-title text-uppercase">
                  <a href="<?php echo $column['link']; ?>" title="<?php echo $column['title']; ?>" class="black-text" ><?php echo $column['title']; ?></a>
              </h4>
              <!-- Description -->
              <p class="card-text"><?php echo $column['desc']; ?></p>
            </div>
          </div>

        </div>

      <?php } ?>

    </div>
  </div>

</section>