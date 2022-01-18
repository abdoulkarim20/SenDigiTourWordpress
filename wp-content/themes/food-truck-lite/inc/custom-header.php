<?php
/**
 * @package Food Truck Lite
 * @subpackage food-truck-lite
 * Setup the WordPress core custom header feature.
 *
 * @uses food_truck_lite_header_style()
*/

function food_truck_lite_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'food_truck_lite_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1284,
		'height'                 => 162,
		'wp-head-callback'       => 'food_truck_lite_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'food_truck_lite_custom_header_setup' );

if ( ! function_exists( 'food_truck_lite_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see food_truck_lite_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'food_truck_lite_header_style' );
function food_truck_lite_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$food_truck_lite_custom_css = "
        #header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'food-truck-lite-basic-style', $food_truck_lite_custom_css );
	endif;
}
endif; //food_truck_lite_header_style