<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package melaine_hunley
 */

?>

<!--Double navigation-->
<header>
    
    <?php
    get_template_part( 'header-parts/header', 'sidebar' );

    ?>

    <nav class="navbar white-black-skin-navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
        <div class="container px-md-0">
            <div class="row w-100" style="margin-left: 0;">
                <div class="left-sidebar-menu-col col-2 col-sm-2 col-md-4 hidden-md-up text-left text-sm-center pl-md-0">
                    <div class="open-side-nav-btn-wrap">
                        <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
                    </div>
                </div>

                <div class="col-md-4 pr-md-0 collapse navbar-collapse" id="navbarNav1">
                    <div class="row w-100">
                        <div class="col-md-12 col-lg-12 p-md-0">
                            <?php
                            if ( has_nav_menu( 'left_header' ) ) {
                                wp_nav_menu( array(
                                    'menu'              => 'Left Header Menu',
                                    'theme_location'    => 'left_header',
                                    'depth'             => 2,
                                    // navbar-nav 
                                    'menu_class'        => 'row pl-0 mb-0 header-navbar-row',
                                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                    'container'         => false,
                                    'walker'            => new WP_Bootstrap_Navwalker())
                                );
                            } else { ?>
                                <p>Please assign Left Header Menu in Wordpress Admin -> Appearance -> Menus -> Manage Locations.</p>
                                <?php
                            } ?>    
                        </div>
                    </div>
                </div>

                <a class="col-8 col-sm-8 col-md-4" href="<?php echo get_site_url(); ?>" title="<?php bloginfo('name'); ?>" style="display: block;">
                    <!-- <img class="header-logo my-1 ml-md-0  my-md-2 mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/sddstudios-logo-2.png" alt="<?php bloginfo('name'); ?> Logo" > -->
                    <img class="header-logo my-1 mx-auto" src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/01/melaine-hunley_1024x512.png" alt="<?php bloginfo('name'); ?> Logo" >
                    <h1 style="display: none;" ><?php bloginfo('name'); ?></h1>
                </a>
                
                <div class="col-2 col-sm-2 hidden-md-up text-right pr-0">
                    <div style="display: none;">
                        <button class="navbar-toggler collapsed pink-text" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation" style="font-size: 1.4rem; padding: 0;">
                          <!-- <span class="navbar-toggler-icon"></span> -->
                          <i class="fa fa-bars"></i>
                        </button>
                    </div>
                </div>

                <div class="col-md-4 pr-md-0 collapse navbar-collapse" id="navbarNav1">
                    <div class="row w-100">
                        <div class="col-md-12 col-lg-12 p-md-0">
                            <?php
                            if ( has_nav_menu( 'right_header' ) ) {
                                wp_nav_menu( array(
                                    'menu'              => '2',
                                    'theme_location'    => 'right_header',
                                    'depth'             => 2,
                                    // navbar-nav 
                                    'menu_class'        => 'row pl-0 mb-0 header-navbar-row float-right',
                                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                    'container'         => false,
                                    'walker'            => new WP_Bootstrap_Navwalker())
                                );
                            } else { ?>
                                <p>Please assign Right Header Menu in Wordpress Admin -> Appearance -> Menus -> Manage Locations.</p>
                                <?php
                            } ?>  
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </nav><!-- /.Navbar -->
</header><!--/.Double navigation-->

<script>
jQuery(document).ready(function($) {
    // SideNav Button Initialization
    jQuery(".button-collapse").sideNav();
    new WOW().init();
    // SideNav Scrollbar Initialization
    var sideNavScrollbar = document.querySelector('.custom-scrollbar');
    Ps.initialize(sideNavScrollbar);
    // currency converter
    // setTimeout(function() {
    //     header_Navbar_Toggle_Currency_Icon( $('.header-navbar-currency-toggle-dropdown  ul.currency_switcher a.active') ); 
    // }), 250;
    // jQuery('ul.currency_switcher a').on('click', function () {
    //     header_Navbar_Toggle_Currency_Icon( jQuery(this) );  
        console.log('test');  
    // });
});
</script>
