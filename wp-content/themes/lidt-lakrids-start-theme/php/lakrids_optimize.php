<?php

// Use SMTP to send mails if curanet server
add_action( 'phpmailer_init', function ( $phpmailer ) {
	if(strpos(gethostname(), "123hotel.dk") !== false) {
		$phpmailer->isSMTP();
		$phpmailer->Host       = "smtp.curanet.dk";
		$phpmailer->SMTPAuth   = false;
		$phpmailer->Port       = 25;
		$phpmailer->Username   = null;
		$phpmailer->Password   = null;
		$phpmailer->SMTPSecure = null;
		$phpmailer->From       = "noreply@".$_SERVER['SERVER_NAME'];
		$phpmailer->FromName   = $_SERVER['SERVER_NAME'];
	}
});


// Fixing the HTTP-error then uploading large images
add_filter("wp_image_editors", function($array) {
	return array("WP_Image_Editor_GD", "WP_Image_Editor_Imagick");
});


// Disable author pages form index
add_action('template_redirect', 'lakrids_custom_author_disable');
function lakrids_custom_author_disable() {
	if ( is_author() ) {
		wp_redirect(get_home_url(null, '/'), 301);
		exit;
	}
}