<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>
        <?php
        if (!is_home()):
            wp_title('|', true, 'right');
        endif;
        bloginfo('name');
        ?>
    </title>
    <?php wp_head(); ?>
    <style type="text/css" media="screen">
        html {
            margin-top: 0 !important;
        }
    </style>
    <link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/favicon.png"/>
</head>
<body>
<header>
    <input type="checkbox" id="toggle-menu">
    <div class="container">
        <div id="top-nav">
            <a href="/" class="logo"><?= file_get_contents(get_template_directory() . "/images/brattenlogo.svg"); ?></a>
            <a href="/"
               class="logo-fixed"><?= file_get_contents(get_template_directory() . "/images/brattenlogo_short.svg"); ?></a>
            <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => 'nav', 'menu_class' => '')); ?>
        </div>
        <div id="fixed-nav">
            <?php wp_nav_menu(array('theme_location' => 'secondary', 'container' => 'nav', 'menu_class' => '')); ?>
        </div>
        <label for="toggle-menu" id="burger">
            <i></i>
            <i></i>
            <i></i>
        </label>
    </div>
</header>

<main>