<?php get_header(); ?>
<!--Carousel Wrapper-->
<div id="carousel-example-3" class="carousel slide carousel-fade white-text" data-ride="carousel" data-interval="false">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-3" data-slide-to="1"></li>
        <li data-target="#carousel-example-3" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <!--Dynamic query listing posts from "carousel" category-->
        <?php 
        $counter = 1;
        $args = array(
            'orderby'          => 'date',
            'order'            => 'ASC',
            'posts_per_page'   => 3,
            'category_name'  => 'carousel'
            );

        // The Query
        $query1 = new WP_Query( $args );

        if ( $query1->have_posts() ) {
            // The Loop
            while ( $query1->have_posts() ) {
                $query1->the_post();
                ?>
                <!-- Looping slide -->
                <div class="carousel-item view hm-black-light <?php echo $counter==1 ? "active": ""; ?>" style="background-image: url('<?php echo the_post_thumbnail_url();?>'); background-repeat: no-repeat; background-size: cover;">
                    <!-- Caption -->
                    <div class="full-bg-img flex-center white-text">
                        <ul class="animated fadeIn col-md-12">
                            <li>
                                <h1 class="h1-responsive"><?php  echo get_the_title(); ?></h1>
                            </li>
                            <li>
                                <p><?php echo get_the_excerpt();?></p>
                            </li>
                            <li>
                                <a href="<?php echo get_permalink() ?>" class="btn btn-lg" rel="nofollow">Read more!</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.Caption -->
                </div>
                <!--/.Looping slide-->
                <?php
                $counter++;
            }
            wp_reset_postdata();
        } ?>
        <!--/.Dynamic query listing posts from "carousel" category-->
    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-3" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-3" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
<br>
<!--Content-->
<div class="container">
    <div class="row">
        <!--Dynamic query listing posts from "cards" category-->
        <?php 
        $args = array(
        'orderby'          => 'date',
        'order'            => 'ASC',
        'posts_per_page'   => 3,
        'category_name'  => 'cards'
        );

        // The Query
        $query2 = new WP_Query( $args );

        if ( $query2->have_posts() ) {
            // The Loop
        while ( $query2->have_posts() ) {
            $query2->the_post();
            ?>
            <!--Auto generated columnn-->
            <div class="col-lg-4">
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="0.2s">

                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <img src="<?php echo the_post_thumbnail_url();?>" class="img-fluid" alt="">
                        <a href="<?php echo get_permalink() ?>">
                            <div class="mask"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title"><?php  echo get_the_title(); ?></h4>
                        <!--Text-->
                        <p class="card-text"><?php echo get_the_excerpt();?></p>
                        <a href="<?php echo get_permalink() ?>" class="btn btn-outline-primary waves-effect">Read more</a>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->
            </div>
            <!--/.Auto generated columnn-->
            <?php
        }
        wp_reset_postdata();
        } ?>
        <!--/.Dynamic query listing posts from "cards" category-->
    </div>
</div>
<!--/.Content-->
<?php get_footer(); ?>