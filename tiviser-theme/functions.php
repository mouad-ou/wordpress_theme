<?php
/**
 * Tiviser Theme Functions
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Include navigation walker
require_once get_template_directory() . '/inc/nav-walker.php';

// Theme setup
function tiviser_theme_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('custom-logo');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'tiviser'),
    ));
}
add_action('after_setup_theme', 'tiviser_theme_setup');

// Enqueue styles and scripts
function tiviser_enqueue_assets() {
    $theme_version = wp_get_theme()->get('Version');
    
    // Enqueue CSS files
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), $theme_version);
    wp_enqueue_style('bootstrap-grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css', array(), $theme_version);
    wp_enqueue_style('satoshi-fonts', get_template_directory_uri() . '/assets/fonts/satoshi/css/satoshi.css', array(), $theme_version);
    wp_enqueue_style('splide', get_template_directory_uri() . '/assets/libs/splide/dist/css/splide.min.css', array(), $theme_version);
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/libs/owl-carousel/dist/assets/owl.carousel.min.css', array(), $theme_version);
    wp_enqueue_style('tiviser-main', get_template_directory_uri() . '/assets/css/style.home-page.css', array(), $theme_version);
    wp_enqueue_style('tiviser-responsive', get_template_directory_uri() . '/assets/css/responsive.home-page.css', array(), $theme_version);
    wp_enqueue_style('modal-shopify', get_template_directory_uri() . '/assets/css/modalShopify.css', array(), $theme_version);
    
    // Enqueue JavaScript files
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('owl-carousel-js', get_template_directory_uri() . '/assets/libs/owl-carousel/dist/owl.carousel.min.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('splide-js', get_template_directory_uri() . '/assets/libs/splide/dist/js/splide.min.js', array(), $theme_version, true);
    wp_enqueue_script('modal-shopify', get_template_directory_uri() . '/assets/js/modalShopify.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('timer-offre', get_template_directory_uri() . '/assets/js/timer-offre.js', array(), $theme_version, true);
    wp_enqueue_script('home-page-helper', get_template_directory_uri() . '/assets/js/home-page-helper.js', array('jquery'), $theme_version, true);
}
add_action('wp_enqueue_scripts', 'tiviser_enqueue_assets');

// Add Facebook Pixel and tracking codes to head
function tiviser_add_tracking_codes() {
    ?>
    <!-- Facebook Domain Verification -->
    <meta name="facebook-domain-verification" content="82c1ddy6kgud2g6xib2s0sgvhsf4ot">
    
    <!-- Meta Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      
      fbq('init', '1052288383698733');
      fbq('track', 'PageView');
      fbq('track', 'ViewContent');
    </script>
    
    <noscript>
      <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1052288383698733&ev=PageView&noscript=1">
    </noscript>
    <?php
}
add_action('wp_head', 'tiviser_add_tracking_codes');

// Custom post types (if needed for channels, etc.)
function tiviser_register_post_types() {
    // Register Channels post type
    register_post_type('channels', array(
        'labels' => array(
            'name' => 'Channels',
            'singular_name' => 'Channel',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-video-alt3',
    ));
}
add_action('init', 'tiviser_register_post_types');

// Add custom image sizes
function tiviser_add_image_sizes() {
    add_image_size('channel-logo', 150, 100, true);
    add_image_size('movie-poster', 300, 450, true);
}
add_action('after_setup_theme', 'tiviser_add_image_sizes');

// Customize excerpt length
function tiviser_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'tiviser_excerpt_length');

// Remove WordPress version from head
remove_action('wp_head', 'wp_generator');
