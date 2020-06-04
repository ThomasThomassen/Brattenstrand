<?php

// Edit admin menu
add_action("admin_menu", function () {
    remove_menu_page('edit.php'); // Remove the Post Menu
    remove_menu_page('edit-comments.php'); // Remove the Comments Menu
    remove_menu_page('widgets.php'); // Remove the Widgets Menu
    remove_submenu_page('themes.php', 'widgets.php');

    global $submenu;
    unset($submenu['themes.php'][6]); // Customize link
});


// Reordering the admin menu
add_filter('custom_menu_order', '__return_true');
add_filter('menu_order', function ($menu_ord) {
    if (!$menu_ord) return true;

    return array(
        'index.php', // Dashboard
        'separator1', // First separator
        'edit.php?post_type=page', // Pages
        'separator2', // Second separator
        'edit.php?post_type=sponsors', // Sponsors
        'edit.php?post_type=tribe_events', // Events
        'edit.php', // Posts
        'upload.php', // Media
        'themes.php', // Appearance
        'separator-last', // Last separator
        'plugins.php', // Plugins
        'users.php', // Users
        'tools.php', // Tools
        'options-general.php', // Settings
    );
});


// Rename default template title
add_filter('default_page_template_title', function () {
    return __('Side', 'nlu');
});


// Adding template in page columns
add_filter('manage_pages_columns', function ($columns) {
    $columns = array(
        'cb' => $columns['cb'],
        'title' => __('Title'),
        'template' => __('Skabelon'),
        'date' => __('Dato'),
    );
    return $columns;
});

add_filter('manage_pages_custom_column', function ($column, $post_id) {
    if ($column == 'template') {
        $page_template = get_post($post_id)->page_template;
        $page_templates = wp_get_theme()->get_page_templates();
        if (isset($page_templates[$page_template]))
            echo __($page_template === "" ? "Side" : $page_templates[$page_template]);
    }
}, 10, 2);