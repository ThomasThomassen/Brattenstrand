<?php

// Enqueue styles and scripts
add_action("wp_enqueue_scripts", function() {

	wp_enqueue_style("swiper", get_template_directory_uri()."/css/swiper.css");
    wp_enqueue_style("style", get_template_directory_uri()."/css/style.less");

    // Removeing standard jquery
    wp_deregister_script( 'wp-embed' );
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js');
    wp_enqueue_script( 'jquery' );
	wp_enqueue_script("swiper", get_template_directory_uri()."/scripts/swiper.js");
    wp_enqueue_script("index", get_template_directory_uri()."/scripts/index.js", array(), false, true);
    wp_enqueue_script("functions", get_template_directory_uri()."/scripts/functions.js", array(), false, true);
    wp_enqueue_script("banner-swiper", get_template_directory_uri()."/scripts/banner-swiper.js", array(), false, true);
    wp_enqueue_script("sponsor-swiper", get_template_directory_uri()."/scripts/sponsor-swiper.js", array(), false, true);

});


// Disable gutenberg style on frontend
add_action( 'wp_print_styles', function () {
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_dequeue_style( 'wc-block-style' );
	}
}, 100);


// Gutenberg scripts and styles
add_action('enqueue_block_editor_assets', function() {
	wp_enqueue_style("swiper", get_template_directory_uri()."/css/swiper.css");
	wp_enqueue_style( 'block_gutenberg', get_template_directory_uri() . '/css/gutenberg.less');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.less');
    wp_enqueue_script("swiper", get_template_directory_uri()."/scripts/swiper.js");
    wp_enqueue_script("index", get_template_directory_uri() . "/scripts/index.js");
    wp_enqueue_script("functions", get_template_directory_uri()."/scripts/functions.js", array(), false, true);
    wp_enqueue_script("banner-swiper", get_template_directory_uri()."/scripts/banner-swiper.js", array(), false, true);
    wp_enqueue_script("sponsor-swiper", get_template_directory_uri()."/scripts/sponsor-swiper.js", array(), false, true);
});

function wpb_add_google_fonts()
{
    wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap', false);
}

add_action('wp_enqueue_scripts', 'wpb_add_google_fonts');
