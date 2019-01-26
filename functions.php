<?php
/**
 * Melaine Hunley functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package melaine_hunley
 */

$THEME_VERSION = '0.0.1';

if ( ! function_exists( 'melaine_hunley_setup' ) ) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function melaine_hunley_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Melaine Hunley, use a find and replace
     * to change 'melaine-hunley' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'melaine-hunley', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(array(
      'left_header' => __( 'Left Header Menu'),
      'right_header' => __( 'Right Header Menu'),
      'mobile_sidebar' => __( 'Mobile Sidebar Menu'),
      'footer1' => __( 'Footer #1 Column'),
      'footer2' => __( 'Footer #2 Column'),
      'footer3' => __( 'Footer #3 Column')
    ));

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ) );

    // Set up the WordPress core custom background feature.
    // add_theme_support( 'custom-background', apply_filters( 'melaine_hunley_custom_background_args', array(
    //   'default-color' => 'ffffff',
    //   'default-image' => '',
    // ) ) );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support( 'custom-logo', array(
      'height'      => 250,
      'width'       => 250,
      'flex-width'  => true,
      'flex-height' => true,
    ) );
  }
endif;
add_action( 'after_setup_theme', 'melaine_hunley_setup' );

/**
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';

/**
 * Extend Rest Api - API
 */
require get_template_directory() . '/inc/api/api.php';


/**
 * Include CSS files 
 */
function melaine_hunley_scripts() {
  wp_enqueue_style( 'Font_Awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
  wp_enqueue_style( 'Bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
  // wp_enqueue_style( 'MDB', get_template_directory_uri() . '/css/mdb.min.css' );
  wp_enqueue_style( 'MDB', get_template_directory_uri() . '/css/mdb.css' );
  wp_enqueue_style( 'PinkSkin', get_template_directory_uri() . '/css/pinkskin.css' );

  wp_enqueue_style( 'Rosarivo', 'https://fonts.googleapis.com/css?family=Rosarivo' );
  wp_enqueue_style( 'fonts', get_template_directory_uri() . '/css/fonts.css' );

  wp_enqueue_style( 'Style', get_template_directory_uri() . '/style.css', $THEME_VERSION );

  wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery-2.2.3.min.js', array(), $THEME_VERSION, true );
  wp_enqueue_script( 'Tether', get_template_directory_uri() . '/js/tether.min.js', array('jquery'), $THEME_VERSION, true );
  wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), $THEME_VERSION, true );
  // wp_enqueue_script( 'MDB', get_template_directory_uri() . '/js/mdb.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'MDB', get_template_directory_uri() . '/js/mdb.js', array('jquery'), $THEME_VERSION, true );

  wp_enqueue_script( 'Theme', get_template_directory_uri() . '/js/theme.js', array('jquery'), $THEME_VERSION, true );

  wp_enqueue_script( 'radical-skin-care-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

  wp_enqueue_script( 'radical-skin-care-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

}
add_action( 'wp_enqueue_scripts', 'melaine_hunley_scripts' );

        
/**
 * Material Design Bootstrap NavWalker
 */
// require_once('inc/mdb_bootstrap_navwalker.php');
require_once('inc/bootstrap-navwalker.php');

/**
 * Extend WooCommerce
 */
require_once('inc/extend-woocommerce.php');


/**
 * Register our sidebars and widgetized areas.
 */
function melaine_hunley_widgets_init() {

  // register_sidebar( array(
  //   'name'          => 'Sidebar',
  //   'id'            => 'page-sidebar',
  //   'before_widget' => '<div id="%1$s">',
  //   'after_widget'  => '</div>',
  //   'before_title'  => '',
  //   'after_title'   => '',
  // ) );

  register_sidebar( array(
    'name'          => 'Page Sidebar',
    'id'            => 'page-sidebar',
    'before_widget' => '<div id="%1$s" class="widget-item card">',
    'after_widget'  => '<a href="#" class="btn btn-pink">Learn More</a></div></div>',
    'before_title'  => '<img class="img-fluid w-100" src="http://local.wptestersite.com/wp-content/uploads/2018/04/liz-and-rachel.jpg" alt="Card image cap"><div class="card-body"><h4 class="card-title">',
    'after_title'   => '</h4>',
  ) );

  register_sidebar( array(
    'name'          => 'Post Sidebar',
    'id'            => 'post-sidebar',
    'before_widget' => '<div id="%1$s" class="widget-item card">',
    'after_widget'  => '<a href="#" class="btn btn-pink">Learn More</a></div></div>',
    'before_title'  => '<img class="img-fluid w-100" src="http://local.wptestersite.com/wp-content/uploads/2018/04/liz-and-rachel.jpg" alt="Card image cap"><div class="card-body"><h4 class="card-title">',
    'after_title'   => '</h4>',
  ) );

  // register_sidebar( array(
  //   'name'          => 'Contact Sidebar',
  //   'id'            => 'contact-sidebar',
  //   'before_widget' => '<div id="%1$s" class="widget-item card">',
  //   'after_widget'  => '<a href="#" class="btn btn-pink">Learn More</a></div></div>',
  //   'before_title'  => '<div class="card-body"><h4 class="card-title">',
  //   'after_title'   => '</h4>',
  // ) );

  register_sidebar( array(
    'name'          => 'Footer widget area',
    'id'            => 'footer',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="title">',
    'after_title'   => '</h5>',
  ) );

}
add_action( 'widgets_init', 'melaine_hunley_widgets_init' );


function melaine_hunley_in_widget_form($widget, $return, $instance){
    $instance = wp_parse_args( (array) $instance, array( 'title' => '', 'text' => '', 'float' => 'none') );

    if ( !isset($instance['img_url']) ) {
        $instance['img_url'] = null;
    }
    if ( !isset($instance['link']) ) {
        $instance['link'] = null;
    }

    if ( 'text' == $widget->id_base ) {
        ?>
            <label for="<?php echo $widget->get_field_id('img_url'); ?>" style="display: block;" >Image Url:</label>
            <input type="text" name="<?php echo $widget->get_field_name('img_url'); ?>" id="<?php echo $widget->get_field_id('img_url'); ?>" value="<?php echo $instance['img_url'];?>" />
            <label for="<?php echo $widget->get_field_id('link'); ?>" style="display: block;" >Link:</label>
            <input type="text" name="<?php echo $widget->get_field_name('link'); ?>" id="<?php echo $widget->get_field_id('link'); ?>" value="<?php echo $instance['link'];?>" />
        <?php
    }
    $retrun = null;
    return array($widget,$return,$instance);
}

function melaine_hunley_in_widget_form_update($instance, $new_instance, $old_instance){
    $instance['img_url'] = strip_tags($new_instance['img_url']);
    $instance['link'] = strip_tags($new_instance['link']);
    return $instance;
}

function melaine_hunley_dynamic_sidebar_params($params){
    global $wp_registered_widgets;
    $widget_id = $params[0]['widget_id'];
    $widget_obj = $wp_registered_widgets[$widget_id];
    $widget_opt = get_option($widget_obj['callback'][0]->option_name);
    $widget_num = $widget_obj['params'][0]['number'];
    $link = "";
    if (isset($widget_opt[$widget_num]['link'])){
      $link = $widget_opt[$widget_num]['link'];
    }
    if (isset($widget_opt[$widget_num]['img_url'])){
      if(isset($widget_opt[$widget_num]['img_url']) && $widget_opt[$widget_num]['img_url'] !== "" ) {
          $img_url = $widget_opt[$widget_num]['img_url'];
          $params[0]['after_widget'] = '<a href="' . $link . '" class="btn btn-pink">Learn More</a></div></div>';
          $params[0]['before_title'] = '<img class="img-fluid w-100" src="' . $img_url . '" alt="Card image cap"><div class="card-body"><h4 class="card-title">';
          $params[0]['after_title'] = '</h4>';
      } else {
          $params[0]['after_widget'] = '<a href="' . $link . '" class="btn btn-pink">Learn More</a></div></div>';
          $params[0]['before_title'] = '<h4 class="card-title">';
          $params[0]['after_title'] = '</h4>'; 
      }
    }
    return $params;
}


//Add input fields(priority 5, 3 parameters)
add_action('in_widget_form', 'melaine_hunley_in_widget_form',5,3);
//Callback function for options update (priorität 5, 3 parameters)
add_filter('widget_update_callback', 'melaine_hunley_in_widget_form_update',5,3);
//add class names (default priority, one parameter)
add_filter('dynamic_sidebar_params', 'melaine_hunley_dynamic_sidebar_params');



remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
remove_filter('widget_text_content', 'wpautop');



add_filter( 'the_content', 'melaine_hunley_share' );
function melaine_hunley_share( $content ) {
    if ( is_singular('post') ) {
        $content .= '<h4 class="mt-4">Share</h4>';
    }
    return $content;
}


add_action( 'wp_head', 'melaine_hunley_google_tag_manager');
function melaine_hunley_google_tag_manager() { ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94106751-6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94106751-6');
</script>

<?php
}







