<?php
	
	$crockery_store_tp_theme_css = '';

	// 1st color
	$crockery_store_tp_color_option_first = get_theme_mod('crockery_store_tp_color_option_first', '#ED8951');
	if ($crockery_store_tp_color_option_first) {
		$crockery_store_tp_theme_css .= ':root {';
		$crockery_store_tp_theme_css .= '--color-primary1: ' . esc_attr($crockery_store_tp_color_option_first) . ';';
		$crockery_store_tp_theme_css .= '}';
	}

	// 2nd color
	$crockery_store_tp_color_option_second = get_theme_mod('crockery_store_tp_color_option_second', '#FF6029');
	if ($crockery_store_tp_color_option_second) {
		$crockery_store_tp_theme_css .= ':root {';
		$crockery_store_tp_theme_css .= '--color-primary2: ' . esc_attr($crockery_store_tp_color_option_second) . ';';
		$crockery_store_tp_theme_css .= '}';
	}

	// preloader
	$crockery_store_tp_preloader_color1_option = get_theme_mod('crockery_store_tp_preloader_color1_option');

	if($crockery_store_tp_preloader_color1_option != false){
	$crockery_store_tp_theme_css .='.center1{';
		$crockery_store_tp_theme_css .='border-color: '.esc_attr($crockery_store_tp_preloader_color1_option).' !important;';
	$crockery_store_tp_theme_css .='}';
	}
	if($crockery_store_tp_preloader_color1_option != false){
	$crockery_store_tp_theme_css .='.center1 .ring::before{';
		$crockery_store_tp_theme_css .='background: '.esc_attr($crockery_store_tp_preloader_color1_option).' !important;';
	$crockery_store_tp_theme_css .='}';
	}

	$crockery_store_tp_preloader_color2_option = get_theme_mod('crockery_store_tp_preloader_color2_option');

	if($crockery_store_tp_preloader_color2_option != false){
	$crockery_store_tp_theme_css .='.center2{';
		$crockery_store_tp_theme_css .='border-color: '.esc_attr($crockery_store_tp_preloader_color2_option).' !important;';
	$crockery_store_tp_theme_css .='}';
	}
	if($crockery_store_tp_preloader_color2_option != false){
	$crockery_store_tp_theme_css .='.center2 .ring::before{';
		$crockery_store_tp_theme_css .='background: '.esc_attr($crockery_store_tp_preloader_color2_option).' !important;';
	$crockery_store_tp_theme_css .='}';
	}

	$crockery_store_tp_preloader_bg_color_option = get_theme_mod('crockery_store_tp_preloader_bg_color_option');

	if($crockery_store_tp_preloader_bg_color_option != false){
	$crockery_store_tp_theme_css .='.loader{';
		$crockery_store_tp_theme_css .='background: '.esc_attr($crockery_store_tp_preloader_bg_color_option).';';
	$crockery_store_tp_theme_css .='}';
	}

	$crockery_store_tp_footer_bg_color_option = get_theme_mod('crockery_store_tp_footer_bg_color_option');


	if($crockery_store_tp_footer_bg_color_option != false){
	$crockery_store_tp_theme_css .='#footer{';
		$crockery_store_tp_theme_css .='background: '.esc_attr($crockery_store_tp_footer_bg_color_option).';';
	$crockery_store_tp_theme_css .='}';
	}

	// logo tagline color
	$crockery_store_site_tagline_color = get_theme_mod('crockery_store_site_tagline_color');

	if($crockery_store_site_tagline_color != false){
	$crockery_store_tp_theme_css .='.logo h1 a, .logo p a, .logo p.site-title a{';
	$crockery_store_tp_theme_css .='color: '.esc_attr($crockery_store_site_tagline_color).';';
	$crockery_store_tp_theme_css .='}';
	}

	$crockery_store_logo_tagline_color = get_theme_mod('crockery_store_logo_tagline_color');
	if($crockery_store_logo_tagline_color != false){
	$crockery_store_tp_theme_css .='p.site-description{';
	$crockery_store_tp_theme_css .='color: '.esc_attr($crockery_store_logo_tagline_color).';';
	$crockery_store_tp_theme_css .='}';
	}

	// footer widget title color
	$crockery_store_footer_widget_title_color = get_theme_mod('crockery_store_footer_widget_title_color');
	if($crockery_store_footer_widget_title_color != false){
	$crockery_store_tp_theme_css .='#footer h3, #footer h2.wp-block-heading{';
	$crockery_store_tp_theme_css .='color: '.esc_attr($crockery_store_footer_widget_title_color).';';
	$crockery_store_tp_theme_css .='}';
	}

	// copyright text color
	$crockery_store_footer_copyright_text_color = get_theme_mod('crockery_store_footer_copyright_text_color');
	if($crockery_store_footer_copyright_text_color != false){
	$crockery_store_tp_theme_css .='#footer .site-info p, #footer .site-info a {';
	$crockery_store_tp_theme_css .='color: '.esc_attr($crockery_store_footer_copyright_text_color).'!important;';
	$crockery_store_tp_theme_css .='}';
	}

	// header image title color
	$crockery_store_header_image_title_text_color = get_theme_mod('crockery_store_header_image_title_text_color');
	if($crockery_store_header_image_title_text_color != false){
	$crockery_store_tp_theme_css .='.box-text h2{';
	$crockery_store_tp_theme_css .='color: '.esc_attr($crockery_store_header_image_title_text_color).';';
	$crockery_store_tp_theme_css .='}';
	}

	// menu color
	$crockery_store_menu_color = get_theme_mod('crockery_store_menu_color');
	if($crockery_store_menu_color != false){
	$crockery_store_tp_theme_css .='.main-navigation a{';
	$crockery_store_tp_theme_css .='color: '.esc_attr($crockery_store_menu_color).';';
	$crockery_store_tp_theme_css .='}';
}