<?php
/**
 * The template for displaying search forms in Food Truck Lite
 * @package Food Truck Lite
 */
?>
<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'food-truck-lite' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr( get_theme_mod('food_truck_lite_search_placeholder', __('Search', 'food-truck-lite')) ); ?>" value="<?php the_search_query(); ?>" name="s">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'food-truck-lite' ); ?>">
</form>