<?php
// Add Shortcode
function video_embed_shortcode( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'src' => '/media/',
			'width' => '640',
			'height' => '480',
		), $atts )
	);

	// Code
	return '<embed 
			src="' . $src . '"
			width="' . $width . '"
			height="' . $height . '"
			type="application/x-shockwave-flash"
			allowscriptaccess="always"
			allowfullscreen="true">';

}
add_shortcode( 'video_embed', 'video_embed_shortcode' );