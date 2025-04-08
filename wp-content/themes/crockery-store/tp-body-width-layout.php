<?php

$crockery_store_tp_theme_css = '';

$crockery_store_theme_lay = get_theme_mod( 'crockery_store_tp_body_layout_settings','Full');
if($crockery_store_theme_lay == 'Container'){
$crockery_store_tp_theme_css .='body{';
$crockery_store_tp_theme_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
$crockery_store_tp_theme_css .='}';
$crockery_store_tp_theme_css .='@media screen and (max-width:575px){';
$crockery_store_tp_theme_css .='body{';
	$crockery_store_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left: 0px';
$crockery_store_tp_theme_css .='} }';
$crockery_store_tp_theme_css .='.scrolled{';
$crockery_store_tp_theme_css .='width: auto; left:0; right:0;';
$crockery_store_tp_theme_css .='}';
}else if($crockery_store_theme_lay == 'Container Fluid'){
$crockery_store_tp_theme_css .='body{';
$crockery_store_tp_theme_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
$crockery_store_tp_theme_css .='}';
$crockery_store_tp_theme_css .='@media screen and (max-width:575px){';
$crockery_store_tp_theme_css .='body{';
	$crockery_store_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left:0px';
$crockery_store_tp_theme_css .='} }';
$crockery_store_tp_theme_css .='.scrolled{';
$crockery_store_tp_theme_css .='width: auto; left:0; right:0;';
$crockery_store_tp_theme_css .='}';
}else if($crockery_store_theme_lay == 'Full'){
$crockery_store_tp_theme_css .='body{';
$crockery_store_tp_theme_css .='max-width: 100%;';
$crockery_store_tp_theme_css .='}';
}

$crockery_store_scroll_position = get_theme_mod( 'crockery_store_scroll_top_position','Right');
if($crockery_store_scroll_position == 'Right'){
$crockery_store_tp_theme_css .='#return-to-top{';
$crockery_store_tp_theme_css .='right: 20px;';
$crockery_store_tp_theme_css .='}';
}else if($crockery_store_scroll_position == 'Left'){
$crockery_store_tp_theme_css .='#return-to-top{';
$crockery_store_tp_theme_css .='left: 20px;';
$crockery_store_tp_theme_css .='}';
}else if($crockery_store_scroll_position == 'Center'){
$crockery_store_tp_theme_css .='#return-to-top{';
$crockery_store_tp_theme_css .='right: 50%;left: 50%;';
$crockery_store_tp_theme_css .='}';
}

// related post
$crockery_store_related_post_mob = get_theme_mod('crockery_store_related_post_mob', true);
$crockery_store_related_post = get_theme_mod('crockery_store_remove_related_post', true);
$crockery_store_tp_theme_css .= '.related-post-block {';
if ($crockery_store_related_post == false) {
    $crockery_store_tp_theme_css .= 'display: none;';
}
$crockery_store_tp_theme_css .= '}';
$crockery_store_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($crockery_store_related_post == false || $crockery_store_related_post_mob == false) {
    $crockery_store_tp_theme_css .= '.related-post-block { display: none; }';
}
$crockery_store_tp_theme_css .= '}';

// slider btn
$crockery_store_slider_buttom_mob = get_theme_mod('crockery_store_slider_buttom_mob', true);
$crockery_store_slider_button = get_theme_mod('crockery_store_slider_button', true);
$crockery_store_tp_theme_css .= '#slider .more-btn {';
if ($crockery_store_slider_button == false) {
    $crockery_store_tp_theme_css .= 'display: none;';
}
$crockery_store_tp_theme_css .= '}';
$crockery_store_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($crockery_store_slider_button == false || $crockery_store_slider_buttom_mob == false) {
    $crockery_store_tp_theme_css .= '#slider .more-btn { display: none; }';
}
$crockery_store_tp_theme_css .= '}';

//return to header mobile               
$crockery_store_return_to_header_mob = get_theme_mod('crockery_store_return_to_header_mob', true);
$crockery_store_return_to_header = get_theme_mod('crockery_store_return_to_header', true);
$crockery_store_tp_theme_css .= '.return-to-header{';
if ($crockery_store_return_to_header == false) {
    $crockery_store_tp_theme_css .= 'display: none;';
}
$crockery_store_tp_theme_css .= '}';
$crockery_store_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($crockery_store_return_to_header == false || $crockery_store_return_to_header_mob == false) {
    $crockery_store_tp_theme_css .= '.return-to-header{ display: none; }';
}
$crockery_store_tp_theme_css .= '}';

//blog description              
$crockery_store_mobile_blog_description = get_theme_mod('crockery_store_mobile_blog_description', true);
$crockery_store_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($crockery_store_mobile_blog_description == false) {
    $crockery_store_tp_theme_css .= '.blog-description{ display: none; }';
}
$crockery_store_tp_theme_css .= '}';

$crockery_store_footer_widget_image = get_theme_mod('crockery_store_footer_widget_image');
if($crockery_store_footer_widget_image != false){
$crockery_store_tp_theme_css .='#footer{';
$crockery_store_tp_theme_css .='background: url('.esc_attr($crockery_store_footer_widget_image).');';
$crockery_store_tp_theme_css .='}';
}

//Social icon Font size
$crockery_store_social_icon_fontsize = get_theme_mod('crockery_store_social_icon_fontsize');
$crockery_store_tp_theme_css .='.social-media a i{';
$crockery_store_tp_theme_css .='font-size: '.esc_attr($crockery_store_social_icon_fontsize).'px;';
$crockery_store_tp_theme_css .='}';

// site title and tagline font size option
$crockery_store_site_title_font_size = get_theme_mod('crockery_store_site_title_font_size', ''); {
$crockery_store_tp_theme_css .='.logo h1 a, .logo p a{';
$crockery_store_tp_theme_css .='font-size: '.esc_attr($crockery_store_site_title_font_size).'px !important;';
$crockery_store_tp_theme_css .='}';
}

$crockery_store_site_tagline_font_size = get_theme_mod('crockery_store_site_tagline_font_size', '');{
$crockery_store_tp_theme_css .='.logo p{';
$crockery_store_tp_theme_css .='font-size: '.esc_attr($crockery_store_site_tagline_font_size).'px;';
$crockery_store_tp_theme_css .='}';
}

$crockery_store_related_product = get_theme_mod('crockery_store_related_product',true);
if($crockery_store_related_product == false){
$crockery_store_tp_theme_css .='.related.products{';
	$crockery_store_tp_theme_css .='display: none;';
$crockery_store_tp_theme_css .='}';
}

//menu font size
$crockery_store_menu_font_size = get_theme_mod('crockery_store_menu_font_size', '');{
$crockery_store_tp_theme_css .='.main-navigation a, .main-navigation li.page_item_has_children:after, .main-navigation li.menu-item-has-children:after{';
	$crockery_store_tp_theme_css .='font-size: '.esc_attr($crockery_store_menu_font_size).'px;';
$crockery_store_tp_theme_css .='}';
}

// menu text transform
$crockery_store_menu_text_tranform = get_theme_mod( 'crockery_store_menu_text_tranform','');
if($crockery_store_menu_text_tranform == 'Uppercase'){
$crockery_store_tp_theme_css .='.main-navigation a {';
	$crockery_store_tp_theme_css .='text-transform: uppercase;';
$crockery_store_tp_theme_css .='}';
}else if($crockery_store_menu_text_tranform == 'Lowercase'){
$crockery_store_tp_theme_css .='.main-navigation a {';
	$crockery_store_tp_theme_css .='text-transform: lowercase;';
$crockery_store_tp_theme_css .='}';
}
else if($crockery_store_menu_text_tranform == 'Capitalize'){
$crockery_store_tp_theme_css .='.main-navigation a {';
	$crockery_store_tp_theme_css .='text-transform: capitalize;';
$crockery_store_tp_theme_css .='}';
}

//sale position
$crockery_store_scroll_position = get_theme_mod( 'crockery_store_sale_tag_position','right');
if($crockery_store_scroll_position == 'right'){
$crockery_store_tp_theme_css .='.woocommerce ul.products li.product .onsale{';
    $crockery_store_tp_theme_css .='right: 25px !important;';
$crockery_store_tp_theme_css .='}';
}else if($crockery_store_scroll_position == 'left'){
$crockery_store_tp_theme_css .='.woocommerce ul.products li.product .onsale{';
    $crockery_store_tp_theme_css .='left: 25px !important; right: auto !important;';
$crockery_store_tp_theme_css .='}';
}

//Font Weight
$crockery_store_menu_font_weight = get_theme_mod( 'crockery_store_menu_font_weight','');
if($crockery_store_menu_font_weight == '100'){
$crockery_store_tp_theme_css .='.main-navigation a{';
    $crockery_store_tp_theme_css .='font-weight: 100;';
$crockery_store_tp_theme_css .='}';
}else if($crockery_store_menu_font_weight == '200'){
$crockery_store_tp_theme_css .='.main-navigation a{';
    $crockery_store_tp_theme_css .='font-weight: 200;';
$crockery_store_tp_theme_css .='}';
}else if($crockery_store_menu_font_weight == '300'){
$crockery_store_tp_theme_css .='.main-navigation a{';
    $crockery_store_tp_theme_css .='font-weight: 300;';
$crockery_store_tp_theme_css .='}';
}else if($crockery_store_menu_font_weight == '400'){
$crockery_store_tp_theme_css .='.main-navigation a{';
    $crockery_store_tp_theme_css .='font-weight: 400;';
$crockery_store_tp_theme_css .='}';
}else if($crockery_store_menu_font_weight == '500'){
$crockery_store_tp_theme_css .='.main-navigation a{';
    $crockery_store_tp_theme_css .='font-weight: 500;';
$crockery_store_tp_theme_css .='}';
}else if($crockery_store_menu_font_weight == '600'){
$crockery_store_tp_theme_css .='.main-navigation a{';
    $crockery_store_tp_theme_css .='font-weight: 600;';
$crockery_store_tp_theme_css .='}';
}else if($crockery_store_menu_font_weight == '700'){
$crockery_store_tp_theme_css .='.main-navigation a{';
    $crockery_store_tp_theme_css .='font-weight: 700;';
$crockery_store_tp_theme_css .='}';
}else if($crockery_store_menu_font_weight == '800'){
$crockery_store_tp_theme_css .='.main-navigation a{';
    $crockery_store_tp_theme_css .='font-weight: 800;';
$crockery_store_tp_theme_css .='}';
}else if($crockery_store_menu_font_weight == '900'){
$crockery_store_tp_theme_css .='.main-navigation a{';
    $crockery_store_tp_theme_css .='font-weight: 900;';
$crockery_store_tp_theme_css .='}';
}

/*------------- Blog Page------------------*/
$crockery_store_post_image_round = get_theme_mod('crockery_store_post_image_round', 0);
if($crockery_store_post_image_round != false){
    $crockery_store_tp_theme_css .='.blog .box-image img{';
        $crockery_store_tp_theme_css .='border-radius: '.esc_attr($crockery_store_post_image_round).'px;';
    $crockery_store_tp_theme_css .='}';
}

$crockery_store_post_image_width = get_theme_mod('crockery_store_post_image_width', '');
if($crockery_store_post_image_width != false){
    $crockery_store_tp_theme_css .='.blog .box-image img{';
        $crockery_store_tp_theme_css .='Width: '.esc_attr($crockery_store_post_image_width).'px;';
    $crockery_store_tp_theme_css .='}';
}

$crockery_store_post_image_length = get_theme_mod('crockery_store_post_image_length', '');
if($crockery_store_post_image_length != false){
    $crockery_store_tp_theme_css .='.blog .box-image img{';
        $crockery_store_tp_theme_css .='height: '.esc_attr($crockery_store_post_image_length).'px;';
    $crockery_store_tp_theme_css .='}';
}

// footer widget title font size
$crockery_store_footer_widget_title_font_size = get_theme_mod('crockery_store_footer_widget_title_font_size', '');{
$crockery_store_tp_theme_css .='#footer h3, #footer h2.wp-block-heading{';
    $crockery_store_tp_theme_css .='font-size: '.esc_attr($crockery_store_footer_widget_title_font_size).'px;';
$crockery_store_tp_theme_css .='}';
}

// Copyright text font size
$crockery_store_footer_copyright_font_size = get_theme_mod('crockery_store_footer_copyright_font_size', '');{
$crockery_store_tp_theme_css .='#footer .site-info p{';
    $crockery_store_tp_theme_css .='font-size: '.esc_attr($crockery_store_footer_copyright_font_size).'px;';
$crockery_store_tp_theme_css .='}';
}

// copyright padding
$crockery_store_footer_copyright_top_bottom_padding = get_theme_mod('crockery_store_footer_copyright_top_bottom_padding', '');
if ($crockery_store_footer_copyright_top_bottom_padding !== '') { 
    $crockery_store_tp_theme_css .= '.site-info {';
    $crockery_store_tp_theme_css .= 'padding-top: ' . esc_attr($crockery_store_footer_copyright_top_bottom_padding) . 'px;';
    $crockery_store_tp_theme_css .= 'padding-bottom: ' . esc_attr($crockery_store_footer_copyright_top_bottom_padding) . 'px;';
    $crockery_store_tp_theme_css .= '}';
}

// copyright position
$crockery_store_copyright_text_position = get_theme_mod( 'crockery_store_copyright_text_position','Center');
if($crockery_store_copyright_text_position == 'Center'){
$crockery_store_tp_theme_css .='#footer .site-info p{';
$crockery_store_tp_theme_css .='text-align:center;';
$crockery_store_tp_theme_css .='}';
}else if($crockery_store_copyright_text_position == 'Left'){
$crockery_store_tp_theme_css .='#footer .site-info p{';
$crockery_store_tp_theme_css .='text-align:left;';
$crockery_store_tp_theme_css .='}';
}else if($crockery_store_copyright_text_position == 'Right'){
$crockery_store_tp_theme_css .='#footer .site-info p{';
$crockery_store_tp_theme_css .='text-align:right;';
$crockery_store_tp_theme_css .='}';
}

// Header Image title font size
$crockery_store_header_image_title_font_size = get_theme_mod('crockery_store_header_image_title_font_size', '40');{
$crockery_store_tp_theme_css .='.box-text h2{';
    $crockery_store_tp_theme_css .='font-size: '.esc_attr($crockery_store_header_image_title_font_size).'px;';
$crockery_store_tp_theme_css .='}';
}

// header
$crockery_store_slider_arrows = get_theme_mod('crockery_store_slider_arrows',false);
if($crockery_store_slider_arrows == false){
$crockery_store_tp_theme_css .='.page-template-front-page .headerbox{';
    $crockery_store_tp_theme_css .='border-bottom:1px solid #ccc;';
$crockery_store_tp_theme_css .='}';
}

/*--------------------------- banner image Opacity -------------------*/
    $crockery_store_theme_lay = get_theme_mod( 'crockery_store_header_banner_opacity_color','0.8');
        if($crockery_store_theme_lay == '0'){
            $crockery_store_tp_theme_css .='.single-page-img, .featured-image{';
                $crockery_store_tp_theme_css .='opacity:0';
            $crockery_store_tp_theme_css .='}';
        }else if($crockery_store_theme_lay == '0.1'){
            $crockery_store_tp_theme_css .='.single-page-img, .featured-image{';
                $crockery_store_tp_theme_css .='opacity:0.1';
            $crockery_store_tp_theme_css .='}';
        }else if($crockery_store_theme_lay == '0.2'){
            $crockery_store_tp_theme_css .='.single-page-img, .featured-image{';
                $crockery_store_tp_theme_css .='opacity:0.2';
            $crockery_store_tp_theme_css .='}';
        }else if($crockery_store_theme_lay == '0.3'){
            $crockery_store_tp_theme_css .='.single-page-img, .featured-image{';
                $crockery_store_tp_theme_css .='opacity:0.3';
            $crockery_store_tp_theme_css .='}';
        }else if($crockery_store_theme_lay == '0.4'){
            $crockery_store_tp_theme_css .='.single-page-img, .featured-image{';
                $crockery_store_tp_theme_css .='opacity:0.4';
            $crockery_store_tp_theme_css .='}';
        }else if($crockery_store_theme_lay == '0.5'){
            $crockery_store_tp_theme_css .='.single-page-img, .featured-image{';
                $crockery_store_tp_theme_css .='opacity:0.5';
            $crockery_store_tp_theme_css .='}';
        }else if($crockery_store_theme_lay == '0.6'){
            $crockery_store_tp_theme_css .='.single-page-img, .featured-image{';
                $crockery_store_tp_theme_css .='opacity:0.6';
            $crockery_store_tp_theme_css .='}';
        }else if($crockery_store_theme_lay == '0.7'){
            $crockery_store_tp_theme_css .='.single-page-img, .featured-image{';
                $crockery_store_tp_theme_css .='opacity:0.7';
            $crockery_store_tp_theme_css .='}';
        }else if($crockery_store_theme_lay == '0.8'){
            $crockery_store_tp_theme_css .='.single-page-img, .featured-image{';
                $crockery_store_tp_theme_css .='opacity:0.8';
            $crockery_store_tp_theme_css .='}';
        }else if($crockery_store_theme_lay == '0.9'){
            $crockery_store_tp_theme_css .='.single-page-img, .featured-image{';
                $crockery_store_tp_theme_css .='opacity:0.9';
            $crockery_store_tp_theme_css .='}';
        }else if($crockery_store_theme_lay == '1'){
            $crockery_store_tp_theme_css .='#slider img{';
                $crockery_store_tp_theme_css .='opacity:1';
            $crockery_store_tp_theme_css .='}';
        }

    $crockery_store_header_banner_image_overlay = get_theme_mod('crockery_store_header_banner_image_overlay', true);
    if($crockery_store_header_banner_image_overlay == false){
        $crockery_store_tp_theme_css .='.single-page-img, .featured-image{';
            $crockery_store_tp_theme_css .='opacity:1;';
        $crockery_store_tp_theme_css .='}';
    }

    $crockery_store_header_banner_image_ooverlay_color = get_theme_mod('crockery_store_header_banner_image_ooverlay_color', true);
    if($crockery_store_header_banner_image_ooverlay_color != false){
        $crockery_store_tp_theme_css .='.box-image-page{';
            $crockery_store_tp_theme_css .='background-color: '.esc_attr($crockery_store_header_banner_image_ooverlay_color).';';
        $crockery_store_tp_theme_css .='}';
    }