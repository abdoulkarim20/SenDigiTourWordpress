<?php

	$freelancer_services_custom_css= "";

	/*---------------------------Width Layout -------------------*/

	$freelancer_services_theme_lay = get_theme_mod( 'freelancer_services_width_option','Full Width');
    if($freelancer_services_theme_lay == 'Boxed'){
		$freelancer_services_custom_css .='body{';
			$freelancer_services_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$freelancer_services_custom_css .='}';
	}else if($freelancer_services_theme_lay == 'Wide Width'){
		$freelancer_services_custom_css .='body{';
			$freelancer_services_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$freelancer_services_custom_css .='}';
	}else if($freelancer_services_theme_lay == 'Full Width'){
		$freelancer_services_custom_css .='body{';
			$freelancer_services_custom_css .='max-width: 100%;';
		$freelancer_services_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$freelancer_services_theme_lay = get_theme_mod( 'freelancer_services_slider_opacity_color','0.7');
	if($freelancer_services_theme_lay == '0'){
		$freelancer_services_custom_css .='#slider img{';
			$freelancer_services_custom_css .='opacity:0';
		$freelancer_services_custom_css .='}';
		}else if($freelancer_services_theme_lay == '0.1'){
		$freelancer_services_custom_css .='#slider img{';
			$freelancer_services_custom_css .='opacity:0.1';
		$freelancer_services_custom_css .='}';
		}else if($freelancer_services_theme_lay == '0.2'){
		$freelancer_services_custom_css .='#slider img{';
			$freelancer_services_custom_css .='opacity:0.2';
		$freelancer_services_custom_css .='}';
		}else if($freelancer_services_theme_lay == '0.3'){
		$freelancer_services_custom_css .='#slider img{';
			$freelancer_services_custom_css .='opacity:0.3';
		$freelancer_services_custom_css .='}';
		}else if($freelancer_services_theme_lay == '0.4'){
		$freelancer_services_custom_css .='#slider img{';
			$freelancer_services_custom_css .='opacity:0.4';
		$freelancer_services_custom_css .='}';
		}else if($freelancer_services_theme_lay == '0.5'){
		$freelancer_services_custom_css .='#slider img{';
			$freelancer_services_custom_css .='opacity:0.5';
		$freelancer_services_custom_css .='}';
		}else if($freelancer_services_theme_lay == '0.6'){
		$freelancer_services_custom_css .='#slider img{';
			$freelancer_services_custom_css .='opacity:0.6';
		$freelancer_services_custom_css .='}';
		}else if($freelancer_services_theme_lay == '0.7'){
		$freelancer_services_custom_css .='#slider img{';
			$freelancer_services_custom_css .='opacity:0.7';
		$freelancer_services_custom_css .='}';
		}else if($freelancer_services_theme_lay == '0.8'){
		$freelancer_services_custom_css .='#slider img{';
			$freelancer_services_custom_css .='opacity:0.8';
		$freelancer_services_custom_css .='}';
		}else if($freelancer_services_theme_lay == '0.9'){
		$freelancer_services_custom_css .='#slider img{';
			$freelancer_services_custom_css .='opacity:0.9';
		$freelancer_services_custom_css .='}';
	}

	/*---------------------------Slider Content Layout -------------------*/

	$freelancer_services_theme_lay = get_theme_mod( 'freelancer_services_slider_content_option','Left');
    if($freelancer_services_theme_lay == 'Left'){
		$freelancer_services_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$freelancer_services_custom_css .='left:10%; right:45%; text-align:left;';
		$freelancer_services_custom_css .='}';
		$freelancer_services_custom_css .='@media screen and (min-width: 720px) and (max-width:768px){
		#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$freelancer_services_custom_css .='right:30%;';
		$freelancer_services_custom_css .='} }';
		$freelancer_services_custom_css .='@media screen and (max-width:720px){
		#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$freelancer_services_custom_css .='left:15%; right: 15%';
		$freelancer_services_custom_css .='} }';
	}else if($freelancer_services_theme_lay == 'Center'){
		$freelancer_services_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$freelancer_services_custom_css .='text-align:center; left:30%; right:30%;';
		$freelancer_services_custom_css .='}';
	}else if($freelancer_services_theme_lay == 'Right'){
		$freelancer_services_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$freelancer_services_custom_css .='left: 45%; right: 10%; text-align: right;';
		$freelancer_services_custom_css .='}';
		$freelancer_services_custom_css .='@media screen and (min-width: 720px) and (max-width:768px){
		#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$freelancer_services_custom_css .='left:30%;';
		$freelancer_services_custom_css .='} }';
		$freelancer_services_custom_css .='@media screen and (max-width:720px){
		#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$freelancer_services_custom_css .='left:15%; right: 15%';
		$freelancer_services_custom_css .='} }';
	}

	/*------------------ Slider Height ------------*/
	$freelancer_services_slider_height = get_theme_mod('freelancer_services_slider_height');
	if($freelancer_services_slider_height != false){
		$freelancer_services_custom_css .='#slider img{';
			$freelancer_services_custom_css .='height: '.esc_attr($freelancer_services_slider_height).';';
		$freelancer_services_custom_css .='}';
	}

	/*------------- Slider ------------*/

	$freelancer_services_slider = get_theme_mod('freelancer_services_slider_hide_show', false);
	if($freelancer_services_slider == false){
		$freelancer_services_custom_css .='.page-template-custom-home-page .main-header{';
			$freelancer_services_custom_css .='position: static;';
		$freelancer_services_custom_css .='}';
	}

	/*----------------Responsive Media -----------------------*/

	$freelancer_services_resp_slider = get_theme_mod( 'freelancer_services_resp_slider_hide_show',false);
	if($freelancer_services_resp_slider == true && get_theme_mod( 'freelancer_services_slider_hide_show', false) == false){
    	$freelancer_services_custom_css .='#slider{';
			$freelancer_services_custom_css .='display:none;';
		$freelancer_services_custom_css .='} ';
	}
    if($freelancer_services_resp_slider == true){
    	$freelancer_services_custom_css .='@media screen and (max-width:575px) {';
		$freelancer_services_custom_css .='#slider{';
			$freelancer_services_custom_css .='display:block;';
		$freelancer_services_custom_css .='} }';
	}else if($freelancer_services_resp_slider == false){
		$freelancer_services_custom_css .='@media screen and (max-width:575px) {';
		$freelancer_services_custom_css .='#slider{';
			$freelancer_services_custom_css .='display:none;';
		$freelancer_services_custom_css .='} }';
		$freelancer_services_custom_css .='@media screen and (max-width:575px){';
		$freelancer_services_custom_css .='.page-template-custom-home-page.admin-bar .homepageheader{';
			$freelancer_services_custom_css .='margin-top: 45px;';
		$freelancer_services_custom_css .='} }';
	}

	$freelancer_services_resp_sidebar = get_theme_mod( 'freelancer_services_sidebar_hide_show',true);
    if($freelancer_services_resp_sidebar == true){
    	$freelancer_services_custom_css .='@media screen and (max-width:575px) {';
		$freelancer_services_custom_css .='#sidebar{';
			$freelancer_services_custom_css .='display:block;';
		$freelancer_services_custom_css .='} }';
	}else if($freelancer_services_resp_sidebar == false){
		$freelancer_services_custom_css .='@media screen and (max-width:575px) {';
		$freelancer_services_custom_css .='#sidebar{';
			$freelancer_services_custom_css .='display:none;';
		$freelancer_services_custom_css .='} }';
	}

	$freelancer_services_resp_scroll_top = get_theme_mod( 'freelancer_services_resp_scroll_top_hide_show',true);
	if($freelancer_services_resp_scroll_top == true && get_theme_mod( 'freelancer_services_hide_show_scroll',true) == false){
    	$freelancer_services_custom_css .='.scrollup i{';
			$freelancer_services_custom_css .='visibility:hidden !important;';
		$freelancer_services_custom_css .='} ';
	}
    if($freelancer_services_resp_scroll_top == true){
    	$freelancer_services_custom_css .='@media screen and (max-width:575px) {';
		$freelancer_services_custom_css .='.scrollup i{';
			$freelancer_services_custom_css .='visibility:visible !important;';
		$freelancer_services_custom_css .='} }';
	}else if($freelancer_services_resp_scroll_top == false){
		$freelancer_services_custom_css .='@media screen and (max-width:575px){';
		$freelancer_services_custom_css .='.scrollup i{';
			$freelancer_services_custom_css .='visibility:hidden !important;';
		$freelancer_services_custom_css .='} }';
	}
	
	/*---------------- Button Settings ------------------*/

	$freelancer_services_button_border_radius = get_theme_mod('freelancer_services_button_border_radius');
	if($freelancer_services_button_border_radius != false){
		$freelancer_services_custom_css .='.post-main-box .more-btn a{';
			$freelancer_services_custom_css .='border-radius: '.esc_attr($freelancer_services_button_border_radius).'px;';
		$freelancer_services_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$freelancer_services_copyright_alingment = get_theme_mod('freelancer_services_copyright_alingment');
	if($freelancer_services_copyright_alingment != false){
		$freelancer_services_custom_css .='.copyright p{';
			$freelancer_services_custom_css .='text-align: '.esc_attr($freelancer_services_copyright_alingment).';';
		$freelancer_services_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	// Site title Font Size
	$freelancer_services_site_title_font_size = get_theme_mod('freelancer_services_site_title_font_size');
	if($freelancer_services_site_title_font_size != false){
		$freelancer_services_custom_css .='.logo h1, .logo p.site-title{';
			$freelancer_services_custom_css .='font-size: '.esc_attr($freelancer_services_site_title_font_size).';';
		$freelancer_services_custom_css .='}';
	}

	// Site tagline Font Size
	$freelancer_services_site_tagline_font_size = get_theme_mod('freelancer_services_site_tagline_font_size');
	if($freelancer_services_site_tagline_font_size != false){
		$freelancer_services_custom_css .='.logo p.site-description{';
			$freelancer_services_custom_css .='font-size: '.esc_attr($freelancer_services_site_tagline_font_size).';';
		$freelancer_services_custom_css .='}';
	}

	/*------------------ Preloader Background Color  -------------------*/

	$freelancer_services_preloader_bg_color = get_theme_mod('freelancer_services_preloader_bg_color');
	if($freelancer_services_preloader_bg_color != false){
		$freelancer_services_custom_css .='#preloader{';
			$freelancer_services_custom_css .='background-color: '.esc_attr($freelancer_services_preloader_bg_color).';';
		$freelancer_services_custom_css .='}';
	}

	$freelancer_services_preloader_border_color = get_theme_mod('freelancer_services_preloader_border_color');
	if($freelancer_services_preloader_border_color != false){
		$freelancer_services_custom_css .='.loader-line{';
			$freelancer_services_custom_css .='border-color: '.esc_attr($freelancer_services_preloader_border_color).'!important;';
		$freelancer_services_custom_css .='}';
	}