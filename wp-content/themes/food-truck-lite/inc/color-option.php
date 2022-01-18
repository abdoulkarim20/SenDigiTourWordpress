<?php
	
	

	$food_truck_lite_custom_css = '';

	// Layout Options
	$food_truck_lite_theme_layout = get_theme_mod( 'food_truck_lite_theme_layout_options','Default Theme');
    if($food_truck_lite_theme_layout == 'Default Theme'){
		$food_truck_lite_custom_css .='body{';
			$food_truck_lite_custom_css .='max-width: 100%;';
		$food_truck_lite_custom_css .='}';
	}else if($food_truck_lite_theme_layout == 'Container Theme'){
		$food_truck_lite_custom_css .='body{';
			$food_truck_lite_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$food_truck_lite_custom_css .='}';
	}else if($food_truck_lite_theme_layout == 'Box Container Theme'){
		$food_truck_lite_custom_css .='body{';
			$food_truck_lite_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$food_truck_lite_custom_css .='}';
	}
	
	/*--------- Preloader Color Option -------*/
	$food_truck_lite_preloader_color = get_theme_mod('food_truck_lite_preloader_color');

	if($food_truck_lite_preloader_color != false){
		$food_truck_lite_custom_css .=' .tg-loader{';
			$food_truck_lite_custom_css .='border-color: '.esc_attr($food_truck_lite_preloader_color).';';
		$food_truck_lite_custom_css .='} ';
		$food_truck_lite_custom_css .=' .tg-loader-inner, .preloader .preloader-container .animated-preloader, .preloader .preloader-container .animated-preloader:before{';
			$food_truck_lite_custom_css .='background-color: '.esc_attr($food_truck_lite_preloader_color).';';
		$food_truck_lite_custom_css .='} ';
	}

	$food_truck_lite_preloader_bg_color = get_theme_mod('food_truck_lite_preloader_bg_color');

	if($food_truck_lite_preloader_bg_color != false){
		$food_truck_lite_custom_css .=' #overlayer, .preloader{';
			$food_truck_lite_custom_css .='background-color: '.esc_attr($food_truck_lite_preloader_bg_color).';';
		$food_truck_lite_custom_css .='} ';
	}

	/*--------- Top Header ----------*/
	$food_truck_lite_top_bar = get_theme_mod('food_truck_lite_top_header',false);

	if($food_truck_lite_top_bar == false){
		$food_truck_lite_custom_css .=' .page-template-custom-front-page #header{';
			$food_truck_lite_custom_css .='top: 10px;';
		$food_truck_lite_custom_css .='} ';
	}

	/*------------ Button Settings option-----------------*/

	$food_truck_lite_top_button_padding = get_theme_mod('food_truck_lite_top_button_padding');
	$food_truck_lite_bottom_button_padding = get_theme_mod('food_truck_lite_bottom_button_padding');
	$food_truck_lite_left_button_padding = get_theme_mod('food_truck_lite_left_button_padding');
	$food_truck_lite_right_button_padding = get_theme_mod('food_truck_lite_right_button_padding');
	if($food_truck_lite_top_button_padding != false || $food_truck_lite_bottom_button_padding != false || $food_truck_lite_left_button_padding != false || $food_truck_lite_right_button_padding != false){
		$food_truck_lite_custom_css .='.blogbtn a, .read-more a, #comments input[type="submit"].submit{';
			$food_truck_lite_custom_css .='padding-top: '.esc_attr($food_truck_lite_top_button_padding).'px; padding-bottom: '.esc_attr($food_truck_lite_bottom_button_padding).'px; padding-left: '.esc_attr($food_truck_lite_left_button_padding).'px; padding-right: '.esc_attr($food_truck_lite_right_button_padding).'px; display:inline-block;';
		$food_truck_lite_custom_css .='}';
	}

	$food_truck_lite_button_border_radius = get_theme_mod('food_truck_lite_button_border_radius');
	$food_truck_lite_custom_css .='.blogbtn a, .read-more a, #comments input[type="submit"].submit{';
		$food_truck_lite_custom_css .='border-radius: '.esc_attr($food_truck_lite_button_border_radius).'px;';
	$food_truck_lite_custom_css .='}';

	/*----------- Copyright css -----*/
	$food_truck_lite_copyright_top_padding = get_theme_mod('food_truck_lite_top_copyright_padding');
	$food_truck_lite_copyright_bottom_padding = get_theme_mod('food_truck_lite_bottom_copyright_padding');
	if($food_truck_lite_copyright_top_padding != '' || $food_truck_lite_copyright_bottom_padding != ''){
		$food_truck_lite_custom_css .='.inner{';
			$food_truck_lite_custom_css .='padding-top: '.esc_attr($food_truck_lite_copyright_top_padding).'px; padding-bottom: '.esc_attr($food_truck_lite_copyright_bottom_padding).'px; ';
		$food_truck_lite_custom_css .='}';
	}

	$food_truck_lite_copyright_alignment = get_theme_mod('food_truck_lite_copyright_alignment', 'center');
	if($food_truck_lite_copyright_alignment == 'center' ){
		$food_truck_lite_custom_css .='#footer .copyright p{';
			$food_truck_lite_custom_css .='text-align: '. $food_truck_lite_copyright_alignment .';';
		$food_truck_lite_custom_css .='}';
	}elseif($food_truck_lite_copyright_alignment == 'left' ){
		$food_truck_lite_custom_css .='#footer .copyright p{';
			$food_truck_lite_custom_css .=' text-align: '. $food_truck_lite_copyright_alignment .';';
		$food_truck_lite_custom_css .='}';
	}elseif($food_truck_lite_copyright_alignment == 'right' ){
		$food_truck_lite_custom_css .='#footer .copyright p{';
			$food_truck_lite_custom_css .='text-align: '. $food_truck_lite_copyright_alignment .';';
		$food_truck_lite_custom_css .='}';
	}

	$food_truck_lite_copyright_font_size = get_theme_mod('food_truck_lite_copyright_font_size');
	$food_truck_lite_custom_css .='#footer .copyright p{';
		$food_truck_lite_custom_css .='font-size: '.esc_attr($food_truck_lite_copyright_font_size).'px;';
	$food_truck_lite_custom_css .='}';

	/*------ Topbar padding ------*/
	$food_truck_lite_top_topbar_padding = get_theme_mod('food_truck_lite_top_topbar_padding');
	$food_truck_lite_bottom_topbar_padding = get_theme_mod('food_truck_lite_bottom_topbar_padding');
	if($food_truck_lite_top_topbar_padding != false || $food_truck_lite_bottom_topbar_padding != false){
		$food_truck_lite_custom_css .='.top-bar, .page-template-custom-front-page .top-bar{';
			$food_truck_lite_custom_css .='padding-top: '.esc_attr($food_truck_lite_top_topbar_padding).'px !important; padding-bottom: '.esc_attr($food_truck_lite_bottom_topbar_padding).'px !important; ';
		$food_truck_lite_custom_css .='}';
	}

	/*------ Woocommerce ----*/
	$food_truck_lite_product_border = get_theme_mod('food_truck_lite_product_border',true);

	if($food_truck_lite_product_border == false){
		$food_truck_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$food_truck_lite_custom_css .='border: 0;';
		$food_truck_lite_custom_css .='}';
	}

	$food_truck_lite_product_top = get_theme_mod('food_truck_lite_product_top_padding',10);
	$food_truck_lite_product_bottom = get_theme_mod('food_truck_lite_product_bottom_padding',10);
	$food_truck_lite_product_left = get_theme_mod('food_truck_lite_product_left_padding',10);
	$food_truck_lite_product_right = get_theme_mod('food_truck_lite_product_right_padding',10);
	if($food_truck_lite_product_top != false || $food_truck_lite_product_bottom != false || $food_truck_lite_product_left != false || $food_truck_lite_product_right != false){
		$food_truck_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$food_truck_lite_custom_css .='padding-top: '.esc_attr($food_truck_lite_product_top).'px; padding-bottom: '.esc_attr($food_truck_lite_product_bottom).'px; padding-left: '.esc_attr($food_truck_lite_product_left).'px; padding-right: '.esc_attr($food_truck_lite_product_right).'px;';
		$food_truck_lite_custom_css .='}';
	}

	$food_truck_lite_product_border_radius = get_theme_mod('food_truck_lite_product_border_radius');
	if($food_truck_lite_product_border_radius != false){
		$food_truck_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$food_truck_lite_custom_css .='border-radius: '.esc_attr($food_truck_lite_product_border_radius).'px;';
		$food_truck_lite_custom_css .='}';
	}

	/*----- WooCommerce button css --------*/
	$food_truck_lite_product_button_top = get_theme_mod('food_truck_lite_product_button_top_padding',10);
	$food_truck_lite_product_button_bottom = get_theme_mod('food_truck_lite_product_button_bottom_padding',10);
	$food_truck_lite_product_button_left = get_theme_mod('food_truck_lite_product_button_left_padding',12);
	$food_truck_lite_product_button_right = get_theme_mod('food_truck_lite_product_button_right_padding',12);
	if($food_truck_lite_product_button_top != false || $food_truck_lite_product_button_bottom != false || $food_truck_lite_product_button_left != false || $food_truck_lite_product_button_right != false){
		$food_truck_lite_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
			$food_truck_lite_custom_css .='padding-top: '.esc_attr($food_truck_lite_product_button_top).'px; padding-bottom: '.esc_attr($food_truck_lite_product_button_bottom).'px; padding-left: '.esc_attr($food_truck_lite_product_button_left).'px; padding-right: '.esc_attr($food_truck_lite_product_button_right).'px;';
		$food_truck_lite_custom_css .='}';
	}

	$food_truck_lite_product_button_border_radius = get_theme_mod('food_truck_lite_product_button_border_radius');
	if($food_truck_lite_product_button_border_radius != false){
		$food_truck_lite_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, a.checkout-button.button.alt.wc-forward, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit{';
			$food_truck_lite_custom_css .='border-radius: '.esc_attr($food_truck_lite_product_button_border_radius).'px;';
		$food_truck_lite_custom_css .='}';
	}

	/*----- WooCommerce product sale css --------*/
	$food_truck_lite_product_sale_top = get_theme_mod('food_truck_lite_product_sale_top_padding');
	$food_truck_lite_product_sale_bottom = get_theme_mod('food_truck_lite_product_sale_bottom_padding');
	$food_truck_lite_product_sale_left = get_theme_mod('food_truck_lite_product_sale_left_padding');
	$food_truck_lite_product_sale_right = get_theme_mod('food_truck_lite_product_sale_right_padding');
	if($food_truck_lite_product_sale_top != false || $food_truck_lite_product_sale_bottom != false || $food_truck_lite_product_sale_left != false || $food_truck_lite_product_sale_right != false){
		$food_truck_lite_custom_css .='.woocommerce span.onsale {';
			$food_truck_lite_custom_css .='padding-top: '.esc_attr($food_truck_lite_product_sale_top).'px; padding-bottom: '.esc_attr($food_truck_lite_product_sale_bottom).'px; padding-left: '.esc_attr($food_truck_lite_product_sale_left).'px; padding-right: '.esc_attr($food_truck_lite_product_sale_right).'px;';
		$food_truck_lite_custom_css .='}';
	}

	$food_truck_lite_product_sale_border_radius = get_theme_mod('food_truck_lite_product_sale_border_radius',10);
	if($food_truck_lite_product_sale_border_radius != false){
		$food_truck_lite_custom_css .='.woocommerce span.onsale {';
			$food_truck_lite_custom_css .='border-radius: '.esc_attr($food_truck_lite_product_sale_border_radius).'px;';
		$food_truck_lite_custom_css .='}';
	}

	$food_truck_lite_menu_case = get_theme_mod('food_truck_lite_product_sale_position', 'Right');
	if($food_truck_lite_menu_case == 'Right' ){
		$food_truck_lite_custom_css .='.woocommerce ul.products li.product .onsale{';
			$food_truck_lite_custom_css .=' left:auto; right:0;';
		$food_truck_lite_custom_css .='}';
	}elseif($food_truck_lite_menu_case == 'Left' ){
		$food_truck_lite_custom_css .='.woocommerce ul.products li.product .onsale{';
			$food_truck_lite_custom_css .=' left:-10px; right:auto;';
		$food_truck_lite_custom_css .='}';
	}

	$food_truck_lite_product_sale_font_size = get_theme_mod('food_truck_lite_product_sale_font_size',13);
	$food_truck_lite_custom_css .='.woocommerce span.onsale {';
		$food_truck_lite_custom_css .='font-size: '.esc_attr($food_truck_lite_product_sale_font_size).'px;';
	$food_truck_lite_custom_css .='}';


	/*---- Comment form ----*/
	$food_truck_lite_comment_width = get_theme_mod('food_truck_lite_comment_width', '100');
	$food_truck_lite_custom_css .='#comments textarea{';
		$food_truck_lite_custom_css .=' width:'.esc_attr($food_truck_lite_comment_width).'%;';
	$food_truck_lite_custom_css .='}';

	$food_truck_lite_comment_submit_text = get_theme_mod('food_truck_lite_comment_submit_text', 'Post Comment');
	if($food_truck_lite_comment_submit_text == ''){
		$food_truck_lite_custom_css .='#comments p.form-submit {';
			$food_truck_lite_custom_css .='display: none;';
		$food_truck_lite_custom_css .='}';
	}

	$food_truck_lite_comment_title = get_theme_mod('food_truck_lite_comment_title', 'Leave a Reply');
	if($food_truck_lite_comment_title == ''){
		$food_truck_lite_custom_css .='#comments h2#reply-title {';
			$food_truck_lite_custom_css .='display: none;';
		$food_truck_lite_custom_css .='}';
	}

	/*------ Footer background css -------*/
	$food_truck_lite_footer_bg_color = get_theme_mod('food_truck_lite_footer_bg_color');
	if($food_truck_lite_footer_bg_color != false){
		$food_truck_lite_custom_css .='.footerinner{';
			$food_truck_lite_custom_css .='background-color: '.esc_attr($food_truck_lite_footer_bg_color).';';
		$food_truck_lite_custom_css .='}';
	}

	$food_truck_lite_footer_bg_image = get_theme_mod('food_truck_lite_footer_bg_image');
	if($food_truck_lite_footer_bg_image != false){
		$food_truck_lite_custom_css .='.footerinner{';
			$food_truck_lite_custom_css .='background: url('.esc_attr($food_truck_lite_footer_bg_image).');';
		$food_truck_lite_custom_css .='}';
	}

	/*----- Featured image css -----*/
	$food_truck_lite_feature_image_border_radius = get_theme_mod('food_truck_lite_feature_image_border_radius');
	if($food_truck_lite_feature_image_border_radius != false){
		$food_truck_lite_custom_css .='.blog-sec img{';
			$food_truck_lite_custom_css .='border-radius: '.esc_attr($food_truck_lite_feature_image_border_radius).'px;';
		$food_truck_lite_custom_css .='}';
	}

	$food_truck_lite_feature_image_shadow = get_theme_mod('food_truck_lite_feature_image_shadow');
	if($food_truck_lite_feature_image_shadow != false){
		$food_truck_lite_custom_css .='.blog-sec img{';
			$food_truck_lite_custom_css .='box-shadow: '.esc_attr($food_truck_lite_feature_image_shadow).'px '.esc_attr($food_truck_lite_feature_image_shadow).'px '.esc_attr($food_truck_lite_feature_image_shadow).'px #aaa;';
		$food_truck_lite_custom_css .='}';
	}

	/*------ Sticky header padding ------------*/
	$food_truck_lite_top_sticky_header_padding = get_theme_mod('food_truck_lite_top_sticky_header_padding');
	$food_truck_lite_bottom_sticky_header_padding = get_theme_mod('food_truck_lite_bottom_sticky_header_padding');
	$food_truck_lite_custom_css .=' .fixed-header{';
		$food_truck_lite_custom_css .=' padding-top: '.esc_attr($food_truck_lite_top_sticky_header_padding).'px; padding-bottom: '.esc_attr($food_truck_lite_bottom_sticky_header_padding).'px';
	$food_truck_lite_custom_css .='}';

	/*------ Related products ---------*/
	$food_truck_lite_related_products = get_theme_mod('food_truck_lite_single_related_products',true);
	if($food_truck_lite_related_products == false){
		$food_truck_lite_custom_css .=' .related.products{';
			$food_truck_lite_custom_css .='display: none;';
		$food_truck_lite_custom_css .='}';
	}

	/*-------- Menu Font Size --------*/
	$food_truck_lite_menu_font_size = get_theme_mod('food_truck_lite_menu_font_size',15);
	if($food_truck_lite_menu_font_size != false){
		$food_truck_lite_custom_css .='.nav-menu li a{';
			$food_truck_lite_custom_css .='font-size: '.esc_attr($food_truck_lite_menu_font_size).'px;';
		$food_truck_lite_custom_css .='}';
	}

	$food_truck_lite_menu_font_weight = get_theme_mod('food_truck_lite_menu_font_weight');
	$food_truck_lite_custom_css .='.nav-menu li a{';
		$food_truck_lite_custom_css .='font-weight: '.esc_attr($food_truck_lite_menu_font_weight).';';
	$food_truck_lite_custom_css .='}';

	// Featured image header
	$header_image_url = food_truck_lite_banner_image( $image_url = '' );
	$food_truck_lite_custom_css .='#page-site-header{';
		$food_truck_lite_custom_css .='background-image: url('. esc_url( $header_image_url ).'); background-size: cover;';
	$food_truck_lite_custom_css .='}';

	$food_truck_lite_post_featured_image = get_theme_mod('food_truck_lite_post_featured_image', 'in-content');
	if($food_truck_lite_post_featured_image == 'banner' ){
		$food_truck_lite_custom_css .='.single #wrapper h1, .page #wrapper h1, .page #wrapper img{';
			$food_truck_lite_custom_css .=' display: none;';
		$food_truck_lite_custom_css .='}';
		$food_truck_lite_custom_css .='.page-template-custom-front-page #page-site-header{';
			$food_truck_lite_custom_css .=' display: none;';
		$food_truck_lite_custom_css .='}';
	}

	// Woocommerce Shop page pagination
	$food_truck_lite_shop_page_navigation = get_theme_mod('food_truck_lite_shop_page_navigation',true);
	if ($food_truck_lite_shop_page_navigation == false) {
		$food_truck_lite_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$food_truck_lite_custom_css .='display: none;';
		$food_truck_lite_custom_css .='}';
	}

	/*----- Blog Post display type css ------*/
	$food_truck_lite_blog_post_display_type = get_theme_mod('food_truck_lite_blog_post_display_type', 'blocks');
	if($food_truck_lite_blog_post_display_type == 'without blocks' ){
		$food_truck_lite_custom_css .='.blog .blog-sec, .blog #sidebar .widget{';
			$food_truck_lite_custom_css .='border: 0;';
		$food_truck_lite_custom_css .='}';
	}

	/*---------- Responsive style ---------*/
	if (get_theme_mod('food_truck_lite_hide_topbar_responsive',true) == true && get_theme_mod('food_truck_lite_top_header',false) == false) {
		$food_truck_lite_custom_css .='.top-bar{';
			$food_truck_lite_custom_css .=' display: none;';
		$food_truck_lite_custom_css .='} ';
	}
	if (get_theme_mod('food_truck_lite_hide_topbar_responsive',true) == false) {
		$food_truck_lite_custom_css .='@media screen and (max-width: 575px){
			.top-bar{';
			$food_truck_lite_custom_css .=' display: none;';
		$food_truck_lite_custom_css .='} }';
	} else if(get_theme_mod('food_truck_lite_hide_topbar_responsive',true) == true){
		$food_truck_lite_custom_css .='@media screen and (max-width: 575px){
			.top-bar{';
			$food_truck_lite_custom_css .=' display: block;';
		$food_truck_lite_custom_css .='} }';
	}