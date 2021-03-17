<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package melaine_hunley
 */
$site_name_style = '';
$header = get_field('header', 'option');
if ($header) {
    if ($header['site_name']) {
        $site_name_style = melanie_build_typography_css_properties($header['site_name']['typography']);
    }
    if ($header['sub_title']) {
        $sub_title_style = melanie_build_typography_css_properties($header['sub_title']['typography']);
    }
    if ($header['menu_items']) {
        $menu_items_style = melanie_build_typography_css_properties($header['menu_items']['typography']);
    }
}
?>
<style>
nav.double-nav.white-black-skin-navbar a {
    position: initial;
    left: 0;
}
#header-site-name {
    padding: 0.75rem 0 0;
}
<?php if ($header && $header['menu_items']) { ?>
    .header-navbar-row .nav-item .nav-link,
    header .navbar ul.dropdown-menu li a.dropdown-item {
        <?php echo $menu_items_style; ?>
    }
<?php } ?>
</style>
<header>
    <?php
    get_template_part( 'header-parts/header', 'sidebar' );
    ?>
    <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav" style="background-color: <?php echo $header['bg_color']; ?>;">
        <div class="container px-md-0">
            <div class="row w-100" style="margin-left: 0;">
                <div class="left-sidebar-menu-col col-2 col-sm-2 col-md-4 hidden-md-up text-left text-sm-center pl-md-0">
                    <div class="open-side-nav-btn-wrap">
                        <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
                    </div>
                </div>

                <div class="col-md pr-md-0 collapse navbar-collapse" id="navbarNav1">
                    <div class="row w-100">
                        <div class="col-md-12 col-lg-12 pr-md-0">
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
                                <p class="black-text mb-0" >Please assign Left Header Menu in Wordpress Admin -> Appearance -> Menus -> Manage Locations.</p>
                                <?php
                            } ?>    
                        </div>
                    </div>
                </div>
                <a class="col-8 col-sm-8 col-md-auto text-center py-1" href="<?php echo get_site_url(); ?>" title="<?php bloginfo('name'); ?>" style="display: block;">
                    <!-- <img class="header-logo mx-auto" src="<?php echo get_site_url(); ?>/wp-content/themes/melanie-hunley/img/logo/melaine-hunley_1024x512.png" alt="<?php bloginfo('name'); ?> Logo" > -->
                    <h1 id="header-site-name" class="mb-0" style="<?php echo $site_name_style; ?>"><?php bloginfo('name'); ?></h1>
                    <p class="d-none d-lg-block mb-0" style="<?php echo $sub_title_style; ?>">Wedding, Elopement, and Portrait Photographer</p>
                </a>
                <div class="col-2 col-sm-2 hidden-md-up text-right pr-0">
                    <div style="display: none;">
                        <button class="navbar-toggler collapsed pink-text" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation" style="font-size: 1.4rem; padding: 0;">
                          <!-- <span class="navbar-toggler-icon"></span> -->
                          <i class="fa fa-bars"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md pr-md-0 collapse navbar-collapse" id="navbarNav1">
                    <div class="row w-100">
                        <div class="col-md-12 col-lg-12 pl-md-0">
                            <?php
                            if ( has_nav_menu( 'right_header' ) ) {
                                wp_nav_menu( array(
                                    'menu'              => 'Right Header Menu',
                                    'theme_location'    => 'right_header',
                                    'depth'             => 2,
                                    // navbar-nav 
                                    'menu_class'        => 'row pl-0 mb-0 header-navbar-row float-right',
                                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                    'container'         => false,
                                    'walker'            => new WP_Bootstrap_Navwalker())
                                );
                            } else { ?>
                                <p class="black-text mb-0" >Please assign Right Header Menu in Wordpress Admin -> Appearance -> Menus -> Manage Locations.</p>
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
});
</script>
