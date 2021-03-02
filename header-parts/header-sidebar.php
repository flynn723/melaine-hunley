
            <style>
            .side-nav .collapsible a {
                font-size: 1rem;
                border-bottom: 1px solid #ddd;
                display: block;
                padding-bottom: 3rem;
            }
            .side-nav .fa-angle-right.rotate-icon {
                position: absolute;
                right: 0;
                top: 13px;
                margin-right: 20px;
            }
            </style>

<!-- Sidebar navigation -->
<div id="slide-out" class="header-left-side-nav side-nav ">
    <ul class="custom-scrollbar">
        <!-- Logo -->
        <li>
            <!-- waves-light -->
            <div class="logo-wrapper" style="display: block; height: initial;">
                <a href="/" title="<?php bloginfo('name'); ?>" style="height: initial;" >
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/melanie-hunley/img/logo/melaine-hunley_1024x512.png" alt="<?php bloginfo('name'); ?> Logo" class="d-block img-fluid flex-center mx-auto" style="max-width: 150px;" >
                </a>
            </div>
        </li>
        <li>
            <small class="d-block text-center p-2" style="line-height: 1.5rem;" >Wedding, Elopement, and Portrait Photographer</small>
        </li>
        <!-- Side navigation links -->
        <li>
            <!--  <ul class="collapsible collapsible-accordion">
                <li>
                    <a class="collapsible-header waves-effect arrow-r" href="/packages" >
                        Packages <i class="fa fa-angle-down" style="float: right; margin-top: 12px; color: #888;"></i>
                    </a>
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <a href="/project-type/restaurant-and-food-service/" title="Restaurant and Food Service" class="waves-effect">Restaurant and Food Service</a>
                            </li>					
                        </ul>
                    </div>
				 </li>
            </ul> -->
            <?php
            if ( has_nav_menu( 'left_header' ) ) {
                wp_nav_menu( array(
                    'menu'              => 'Mobile Sidebar Menu',
                    'theme_location'    => 'mobile_sidebar',
                    'depth'             => 2,
                    // navbar-nav 
                    'menu_class'        => 'collapsible collapsible-accordion',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'container'         => false,
                    'walker'            => new WP_Bootstrap_Navwalker())
                );
            } else { ?>
                <p class="black-text mb-0" >Please assign Mobile Sidebar Menu in Wordpress Admin -> Appearance -> Menus -> Manage Locations.</p>
                <?php
            } ?> 
        </li>
    </ul>
</div>