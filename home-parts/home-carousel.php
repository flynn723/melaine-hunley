<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-3">

                <!--Carousel Wrapper-->
                <!-- carousel-fade -->
                <div id="home-carousel" class="carousel slide hidden-sm-down" data-ride="carousel" style="height: 100%;">
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#home-carousel" data-slide-to="1"></li>
<!--                         <li data-target="#home-carousel" data-slide-to="2"></li> -->
                    </ol>
                    <!--/.Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                        <?php 
                        // $counter = 1;
                        // $args = array(
                        //     'post_type' => 'product',
                        //     'orderby'          => 'date',
                        //     'order'            => 'ASC',
                        //     'posts_per_page'   => 3,
                        // );
                        // $query1 = new WP_Query( $args );
                        // if ( $query1->have_posts() ) {
                        //     while ( $query1->have_posts() ) {
                        //         $query1->the_post();
                        ?>
                        <?php // echo ( $counter == 1 ) ? "active": ""; ?>
                            <div class="carousel-item active">
                                <!-- <a href="<?php echo get_site_url(); ?>/" class="view"> -->
                                    <img class="d-block w-100" src="/wp-content/uploads/2018/05/16-170034_2_9.jpg" alt="Loma Vista Residence" style="border-radius: 0.25rem;">
                                    <!-- <div class="mask rgba-black-slight"></div>
                                </a> -->
                            </div>
                            <div class="carousel-item ">
                                <!-- <a href="<?php echo get_site_url(); ?>" class="view"> -->
                                    <img class="d-block w-100" src="/wp-content/uploads/2018/05/16-170034_21_9.jpg" alt="<?php bloginfo('name'); ?>" style="border-radius: 0.25rem;" >
                                    <!-- <div class="mask rgba-black-slight"></div>
                                </a> -->
                            </div>
                            <?php
                            // $counter++;
                        // }
                        // wp_reset_postdata();
                    // } ?>
                    </div>
                    <!--/.Slides-->
                    <!--Controls-->
                    <a class="carousel-control-prev" href="#home-carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#home-carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!--/.Controls-->
                </div>
                <!--/.Carousel Wrapper-->            
            </div>
        </div>
    </div>
</div>