<?php
/**
 * Custom header implementation
 *
 * @link https://codex.wordpress.org/Custom_Headers
 *
 * @package Crockery Store
 * @subpackage crockery_store
 */

function crockery_store_custom_header_setup() {
    add_theme_support( 'custom-header', apply_filters( 'crockery_store_custom_header_args', array(
        'default-text-color' => 'fff',
        'header-text'        => false,
        'width'              => 1600,
        'height'             => 350,
        'flex-width'         => true,
        'flex-height'        => true,
        'wp-head-callback'   => 'crockery_store_header_style',
        'default-image'      => get_template_directory_uri() . '/assets/images/sliderimage.png',
    ) ) );

    register_default_headers( array(
        'default-image' => array(
            'url'           => get_template_directory_uri() . '/assets/images/sliderimage.png',
            'thumbnail_url' => get_template_directory_uri() . '/assets/images/sliderimage.png',
            'description'   => __( 'Default Header Image', 'crockery-store' ),
        ),
    ) );
    
}
add_action( 'after_setup_theme', 'crockery_store_custom_header_setup' );

/**
 * Styles the header image based on Customizer settings.
 */
function crockery_store_header_style() {
    $crockery_store_header_image = get_header_image() ? get_header_image() : get_template_directory_uri() . '/assets/images/sliderimage.png';

    $crockery_store_height     = get_theme_mod( 'crockery_store_header_image_height', 350 );
    $crockery_store_position   = get_theme_mod( 'crockery_store_header_background_position', 'center' );
    $crockery_store_attachment = get_theme_mod( 'crockery_store_header_background_attachment', 1 ) ? 'fixed' : 'scroll';

    $crockery_store_custom_css = "
        .header-img, .single-page-img, .external-div .box-image-page img, .external-div {
            background-image: url('" . esc_url( $crockery_store_header_image ) . "');
            background-size: cover;
            height: " . esc_attr( $crockery_store_height ) . "px;
            background-position: " . esc_attr( $crockery_store_position ) . ";
            background-attachment: " . esc_attr( $crockery_store_attachment ) . ";
        }

        @media (max-width: 1000px) {
            .header-img, .single-page-img, .external-div .box-image-page img,.external-div,.featured-image{
                height: 250px !important;
            }
            .box-text h2{
                font-size: 27px;
            }
        }
    ";

    wp_add_inline_style( 'crockery-store-style', $crockery_store_custom_css );
}
add_action( 'wp_enqueue_scripts', 'crockery_store_header_style' );

/**
 * Enqueue the main theme stylesheet.
 */
function crockery_store_enqueue_styles() {
    wp_enqueue_style( 'crockery-store-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'crockery_store_enqueue_styles' );