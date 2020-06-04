<?php

// Show php errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Contains the register blocks for gutenberg ACF
require_once(__DIR__ . "/gutenberg/register_blocks.php");

// Contains cleanup in <head>
require_once(__DIR__ . "/php/head_cleanup.php");

// Enqueue styles and scripts
require_once(__DIR__ . "/php/enqueue_scripts.php");

// Setup admin panel with reorder menu, edit menu and adding template
require_once(__DIR__ . "/php/admin_setup.php");


// Register menu and sidebar
register_nav_menus(array(
        'primary' => 'Hovedmenuen',
        'secondary' => 'Submenuen',
        'footer_nav_friends' => 'GLADE VENNER',
        'footer_nav_info' => 'PRAKTISK',
    )
);


// Add theme supports
add_theme_support('align-wide');
add_theme_support('post-thumbnails', [
    'post',
    'tribe_events',
]);


// Registrer menu and sidebar
add_theme_support('automatic-feed-links');


// optionspage
if (function_exists('acf_add_options_page')) {
    acf_add_options_sub_page(array(
        'page_title' => 'Rediger Information',
        'menu_title' => 'Information',
        'parent_slug' => 'themes.php',
    ));
}

// Register sponsor types
function sponsors_post_types()
{
    register_post_type('sponsors', array(
        'has_archive' => true,
        'public' => true,
        'supports' => array('title'),
        'labels' => array(
            'name' => 'Sponsorer',
            'add_new_item' => 'Tilføj ny sponsor',
            'edit_item' => 'Rediger sponsor',
            'all_items' => 'Alle sponsorer',
            'singular_name' => 'Sponsor'
        ),
        'menu_icon' => 'dashicons-tag',
    ));
}

add_action('init', 'sponsors_post_types');

function renderSponsors($sponsor)
{
    /** @var WP_Post $sponsor */
    $title = get_the_title($sponsor->ID);
    $image = get_field('image', $sponsor->ID);
    $address = get_field('address', $sponsor->ID);
    $description = get_field('description', $sponsor->ID);
    $website = get_field('website', $sponsor->ID);

    include __DIR__ . "/template/sponsors.php";
}

function getSponsors($args = [])
{
    $args['post_type'] = 'sponsors';
    $args['post_status'] = 'publish';

    $sponsors = new WP_Query($args);


    foreach ($sponsors->get_posts() as $sponsor) {
        renderSponsors($sponsor);
    }
}

add_filter('manage_sponsors_posts_columns', function ($columns) {
    $columns = array(
        'cb' => '<input type="checkbox" />',
        'image' => __('Billede'),
        'title' => __('Navn'),
        'address' => __('Adresse'),
        'tlf' => __('Telefon'),
        'mail' => __('E-mail'),
    );

    return $columns;
});

add_action('manage_sponsors_posts_custom_column', function ($column, $post_id) {
    global $post;

    if ($column === "title") {
        $title = get_post_meta($post_id, 'title', true);
        echo $title;
    }

    if ($column === "image") {
        $image = get_post_meta($post_id, 'image', true);
        echo wp_get_attachment_image($image, array('100', '100'));
    }

    if ($column === "address") {
        $address = get_post_meta($post_id, 'address', true);
        echo $address;
    }

    if ($column === "tlf") {
        $tlf = get_post_meta($post_id, 'tlf', true);
        echo $tlf;
    }

    if ($column === "mail") {
        $rooms = get_post_meta($post_id, 'mail', true);
        echo $rooms;
    }
}, 10, 2);

