<?php
/*
Plugin Name: Featured Products Carousel
Description: Display a carousel of featured products.
Version: 1.0
Author: Soran
*/


function register_featured_product_post_type() {
    $labels = array(
        'name' => 'Featured Products',
        'singular_name' => 'Featured Product',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Featured Product',
        'edit_item' => 'Edit Featured Product',
        'new_item' => 'New Featured Product',
        'view_item' => 'View Featured Product',
        'search_items' => 'Search Featured Products',
        'not_found' => 'No featured products found',
        'not_found_in_trash' => 'No featured products found in Trash',
        'parent_item_colon' => 'Parent Featured Product:',
        'menu_name' => 'Featured Products'
    );

    $args = array(
        'labels' => $labels,
        'menu_icon' => plugin_dir_url(__FILE__) . './assets/images/box.png',
        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'featured-products'),
    );

    register_post_type('featured_product', $args);
}
add_action('init', 'register_featured_product_post_type');

function register_featured_product_categories() {
    $labels = array(
        'name' => 'Product Categories',
        'singular_name' => 'Product Category',
        'search_items' => 'Search Product Categories',
        'all_items' => 'All Product Categories',
        'parent_item' => 'Parent Product Category',
        'parent_item_colon' => 'Parent Product Category:',
        'edit_item' => 'Edit Product Category',
        'update_item' => 'Update Product Category',
        'add_new_item' => 'Add New Product Category',
        'new_item_name' => 'New Product Category Name',
        'menu_name' => 'Categories',
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'featured-product-category'),
    );

    register_taxonomy('featured_product_category', 'featured_product', $args);
}
add_action('init', 'register_featured_product_categories');


function featured_products_carousel_enqueue_scripts() {
    wp_enqueue_style('owl-carousel', 'https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css');
    wp_enqueue_style('featured-products-carousel', plugin_dir_url(__FILE__) . 'css/style.css');

    wp_enqueue_script('jquery');
    wp_enqueue_script('owl-carousel', 'https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js', array('jquery'), '2.3.4', true);
    wp_enqueue_script('featured-products-carousel-script', plugin_dir_url(__FILE__) . 'js/script.js', array('jquery', 'owl-carousel'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'featured_products_carousel_enqueue_scripts');


require_once plugin_dir_path(__FILE__) . 'includes/metaboxes.php';
require_once plugin_dir_path(__FILE__) . 'includes/shortcodes.php';





