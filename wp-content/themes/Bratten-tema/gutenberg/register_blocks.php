<?php

function handle_allowed_blocks( $allowed_blocks, $post ) {
	/**
	 * This function will whitelist the blocks we want to use, and blacklist all other blocks from core wordpress
	 *
	 * You can use the $post param to make post-specific blocks
	 *
	 * Example when working with acf could be:
	 * $allowed_blocks = ['acf/content'];
	 *
	 **/


	$allowed_blocks = [
        'acf/content',
		'acf/banner',
        'acf/cards',
        'acf/instagram',
        'acf/sponsor-slider',
        'acf/side-nav',
        'acf/content-nav',
	];
	return $allowed_blocks;
}


function theme_register_blocks()
{
    if (!function_exists('acf_register_block'))
        return;

    /**
     * Example of a registered block with ACF.
     * To learn more, please go to: https://www.advancedcustomfields.com/blog/acf-5-8-introducing-acf-blocks-for-gutenberg/
     *
     * Remember that acf_register_block[name] can only be letters, NO special characters of any kind, not even underscore!
     *
     * EXAMPLE:
     *  acf_register_block([
     * 'name'                => 'content',                           // Is the registered ACF name of the block
     * 'title'                => 'Indhold',                           // Is the visible title when choosing between blocks
     * 'render_template'    => __DIR__.'/partials/content.php',     // Is the direct path to the PHP file that would render this blocks content
     * 'category'            => 'layout',                            // See available categories by following the link above
     * 'icon'                => 'welcome-write-blog',                // See available dashicons here: https://developer.wordpress.org/resource/dashicons/#flag
     * 'mode'                => 'preview',                           // Weather to start in "preview" or in "edit" mode. Almost always should be preview
     * 'align'             => 'left',
     * 'keywords'            => ['skriv', 'blog'],                   // Up to 3 keywords that can be searched to find this block amongst other blocks
     * 'supports'          => ['align' => ['center']]              // Can be ["full", "left", "right"] based on weather this block is allowed to be next to another. Almost always keep this at "full" only mode.
     * ]);
     *
     *
     **/
    acf_register_block([
        'name' => 'content',                           // Is the registered ACF name of the block
        'title' => 'Indhold',                           // Is the visible title when choosing between blocks
        'render_template' => __DIR__ . '/partials/content.php',     // Is the direct path to the PHP file that would render this blocks content
        'category' => 'layout',                            // See available categories by following the link above
        'icon' => 'welcome-write-blog',                // See available dashicons here: https://developer.wordpress.org/resource/dashicons/#flag
        'mode' => 'preview',                           // Weather to start in "preview" or in "edit" mode. Almost always should be preview
        'align' => 'left',
        'keywords' => ['skriv', 'blog'],                   // Up to 3 keywords that can be searched to find this block amongst other blocks
        'supports' => ['align' => ['center']]              // Can be ["full", "left", "right"] based on weather this block is allowed to be next to another. Almost always keep this at "full" only mode.
    ]);
    acf_register_block([
        'name' => 'banner',                           // Is the registered ACF name of the block
        'title' => 'Banner',                           // Is the visible title when choosing between blocks
        'render_template' => __DIR__ . '/partials/banner.php',     // Is the direct path to the PHP file that would render this blocks content
        'category' => 'layout',                            // See available categories by following the link above
        'icon' => 'welcome-write-blog',                // See available dashicons here: https://developer.wordpress.org/resource/dashicons/#flag
        'mode' => 'preview',                           // Weather to start in "preview" or in "edit" mode. Almost always should be preview
        'align' => 'left',
        'keywords' => ['skriv', 'blog'],                   // Up to 3 keywords that can be searched to find this block amongst other blocks
        'supports' => ['align' => ['center']]              // Can be ["full", "left", "right"] based on weather this block is allowed to be next to another. Almost always keep this at "full" only mode.
    ]);
    acf_register_block([
        'name' => 'cards',                           // Is the registered ACF name of the block
        'title' => 'Info kort',                           // Is the visible title when choosing between blocks
        'render_template' => __DIR__ . '/partials/cards.php',     // Is the direct path to the PHP file that would render this blocks content
        'category' => 'layout',                            // See available categories by following the link above
        'icon' => 'welcome-write-blog',                // See available dashicons here: https://developer.wordpress.org/resource/dashicons/#flag
        'mode' => 'preview',                           // Weather to start in "preview" or in "edit" mode. Almost always should be preview
        'align' => 'left',
        'keywords' => ['skriv', 'blog'],                   // Up to 3 keywords that can be searched to find this block amongst other blocks
        'supports' => ['align' => ['center']]              // Can be ["full", "left", "right"] based on weather this block is allowed to be next to another. Almost always keep this at "full" only mode.
    ]);
    acf_register_block([
        'name' => 'instagram',                           // Is the registered ACF name of the block
        'title' => 'Instagram',                           // Is the visible title when choosing between blocks
        'render_template' => __DIR__ . '/partials/instagram.php',     // Is the direct path to the PHP file that would render this blocks content
        'category' => 'layout',                            // See available categories by following the link above
        'icon' => 'welcome-write-blog',                // See available dashicons here: https://developer.wordpress.org/resource/dashicons/#flag
        'mode' => 'preview',                           // Weather to start in "preview" or in "edit" mode. Almost always should be preview
        'align' => 'left',
        'keywords' => ['skriv', 'blog'],                   // Up to 3 keywords that can be searched to find this block amongst other blocks
        'supports' => ['align' => ['center']]              // Can be ["full", "left", "right"] based on weather this block is allowed to be next to another. Almost always keep this at "full" only mode.
    ]);
    acf_register_block([
        'name' => 'sponsor-slider',                           // Is the registered ACF name of the block
        'title' => 'Sponsor-slider',                           // Is the visible title when choosing between blocks
        'render_template' => __DIR__ . '/partials/sponsor-slider.php',     // Is the direct path to the PHP file that would render this blocks content
        'category' => 'layout',                            // See available categories by following the link above
        'icon' => 'welcome-write-blog',                // See available dashicons here: https://developer.wordpress.org/resource/dashicons/#flag
        'mode' => 'preview',                           // Weather to start in "preview" or in "edit" mode. Almost always should be preview
        'align' => 'left',
        'keywords' => ['skriv', 'blog'],                   // Up to 3 keywords that can be searched to find this block amongst other blocks
        'supports' => ['align' => ['center']]              // Can be ["full", "left", "right"] based on weather this block is allowed to be next to another. Almost always keep this at "full" only mode.
    ]);
    acf_register_block([
        'name' => 'side-nav',                           // Is the registered ACF name of the block
        'title' => 'Side navigation',                           // Is the visible title when choosing between blocks
        'render_template' => __DIR__ . '/partials/side-nav.php',     // Is the direct path to the PHP file that would render this blocks content
        'category' => 'layout',                            // See available categories by following the link above
        'icon' => 'welcome-write-blog',                // See available dashicons here: https://developer.wordpress.org/resource/dashicons/#flag
        'mode' => 'preview',                           // Weather to start in "preview" or in "edit" mode. Almost always should be preview
        'align' => 'left',
        'keywords' => ['skriv', 'blog'],                   // Up to 3 keywords that can be searched to find this block amongst other blocks
        'supports' => ['align' => ['center']]              // Can be ["full", "left", "right"] based on weather this block is allowed to be next to another. Almost always keep this at "full" only mode.
    ]);
    acf_register_block([
        'name' => 'content-nav',                           // Is the registered ACF name of the block
        'title' => 'Indhold til side navigation',                           // Is the visible title when choosing between blocks
        'render_template' => __DIR__ . '/partials/content-nav.php',     // Is the direct path to the PHP file that would render this blocks content
        'category' => 'layout',                            // See available categories by following the link above
        'icon' => 'welcome-write-blog',                // See available dashicons here: https://developer.wordpress.org/resource/dashicons/#flag
        'mode' => 'preview',                           // Weather to start in "preview" or in "edit" mode. Almost always should be preview
        'align' => 'left',
        'keywords' => ['skriv', 'blog'],                   // Up to 3 keywords that can be searched to find this block amongst other blocks
        'supports' => ['align' => ['center']]              // Can be ["full", "left", "right"] based on weather this block is allowed to be next to another. Almost always keep this at "full" only mode.
    ]);
}


add_action('acf/init', 'theme_register_blocks' );
add_filter('allowed_block_types', 'handle_allowed_blocks', 10, 2);