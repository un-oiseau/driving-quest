<?php

// Load CSS

function load_css() {

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');


    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), 1, 'all');
    wp_enqueue_style('main');

    wp_register_style('responsive', get_template_directory_uri().'/css/responsive.css', array(), 1, 'all');
    wp_enqueue_style('responsive');

}

add_action('wp_enqueue_scripts', 'load_css');


// Load JS

function load_js() {
    wp_enqueue_script('jquery');
    
    wp_register_script('bootstrap',  get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', 1, true);
    wp_enqueue_script('bootstrap');


    wp_register_script('custom',  get_template_directory_uri() . '/js/custom.js', 'jquery', 1, true);
    wp_enqueue_script('custom');
}

add_action('wp_enqueue_scripts', 'load_js');

register_nav_menus(
    array(
        'primary' => esc_html__( 'Primary menu', 'casino_theme' ),
        'footer'  => __( 'Secondary menu', 'casino_theme' ),
        'footer_bottom'  => __( 'Privacy menu', 'casino_theme' ),
    )
);

/**
 * Register our sidebars and widgetized areas.
 *
 */


add_theme_support( 'title-tag' );

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support(
    'html5',
    array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
        'navigation-widgets',
    )
);


$logo_width  = 300;
$logo_height = 100;

add_theme_support(
    'custom-logo',
    array(
        'height'               => $logo_height,
        'width'                => $logo_width,
        'flex-width'           => true,
        'flex-height'          => true,
        'unlink-homepage-logo' => true,
    )
);

add_theme_support(
    'footer-logo',
    array(
        'height'               => $logo_height,
        'width'                => $logo_width,
        'flex-width'           => true,
        'flex-height'          => true,
        'unlink-homepage-logo' => true,
    )
);

function ocs_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'ocs_post_thumbnails' );

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/acf-blocks.php';
require get_template_directory() . '/includes/blocks/sectionblock/sectionblock.php';

function gb_gutenberg_admin_styles() {
  echo '
    <style>
        /* Main column width */
        .wp-block {
            max-width: 1200px;
        }
        .wp-editor-container textarea.wp-editor-area {
            max-height: 150px;
        }
    </style>
  ';
}
add_action('admin_head', 'gb_gutenberg_admin_styles');

show_admin_bar(false);
