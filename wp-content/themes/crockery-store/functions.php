<?php
/**
 * Crockery Store functions and definitions
 *
 * @package Crockery Store
 * @subpackage crockery_store
 */

function crockery_store_setup() {

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( "responsive-embeds" );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'crockery-store-featured-image', 2000, 1200, true );
	add_image_size( 'crockery-store-thumbnail-avatar', 100, 100, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary-menu'    => __( 'Primary Menu', 'crockery-store' ),
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
    	'flex-height' => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	add_theme_support( 'html5', array('comment-form','comment-list','gallery','caption',) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', crockery_store_fonts_url() ) );
}
add_action( 'after_setup_theme', 'crockery_store_setup' );

/**
 * Register custom fonts.
 */
function crockery_store_fonts_url(){
	$crockery_store_font_url = '';
	$crockery_store_font_family = array();
	$crockery_store_font_family[] = 'Oswald:200,300,400,500,600,700';
	$crockery_store_font_family[] = 'Roboto:100,100i,300,400,400i,500,500i,700,700i,900,900i';

	$crockery_store_font_family[] = 'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$crockery_store_font_family[] = 'Bad Script';
	$crockery_store_font_family[] = 'Bebas Neue';
	$crockery_store_font_family[] = 'Fjalla One';
	$crockery_store_font_family[] = 'PT Sans:ital,wght@0,400;0,700;1,400;1,700';
	$crockery_store_font_family[] = 'PT Serif:ital,wght@0,400;0,700;1,400;1,700';
	$crockery_store_font_family[] = 'Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900';
	$crockery_store_font_family[] = 'Roboto Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700';
	$crockery_store_font_family[] = 'Alex Brush';
	$crockery_store_font_family[] = 'Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$crockery_store_font_family[] = 'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$crockery_store_font_family[] = 'Playball';
	$crockery_store_font_family[] = 'Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$crockery_store_font_family[] = 'Julius Sans One';
	$crockery_store_font_family[] = 'Arsenal:ital,wght@0,400;0,700;1,400;1,700';
	$crockery_store_font_family[] = 'Slabo 13px';
	$crockery_store_font_family[] = 'Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900';
	$crockery_store_font_family[] = 'Overpass Mono:wght@300;400;500;600;700';
	$crockery_store_font_family[] = 'Source Sans Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900';
	$crockery_store_font_family[] = 'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$crockery_store_font_family[] = 'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900';
	$crockery_store_font_family[] = 'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$crockery_store_font_family[] = 'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$crockery_store_font_family[] = 'Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700';
	$crockery_store_font_family[] = 'Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$crockery_store_font_family[] = 'Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$crockery_store_font_family[] = 'Playfair Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$crockery_store_font_family[] = 'Quicksand:wght@300;400;500;600;700';
	$crockery_store_font_family[] = 'Padauk:wght@400;700';
	$crockery_store_font_family[] = 'Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$crockery_store_font_family[] = 'Inconsolata:wght@200;300;400;500;600;700;800;900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$crockery_store_font_family[] = 'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$crockery_store_font_family[] = 'Pacifico';
	$crockery_store_font_family[] = 'Indie Flower';
	$crockery_store_font_family[] = 'VT323';
	$crockery_store_font_family[] = 'Dosis:wght@200;300;400;500;600;700;800';
	$crockery_store_font_family[] = 'Frank Ruhl Libre:wght@300;400;500;700;900';
	$crockery_store_font_family[] = 'Fjalla One';
	$crockery_store_font_family[] = 'Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$crockery_store_font_family[] = 'Oxygen:wght@300;400;700';
	$crockery_store_font_family[] = 'Arvo:ital,wght@0,400;0,700;1,400;1,700';
	$crockery_store_font_family[] = 'Noto Serif:ital,wght@0,400;0,700;1,400;1,700';
	$crockery_store_font_family[] = 'Lobster';
	$crockery_store_font_family[] = 'Crimson Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700';
	$crockery_store_font_family[] = 'Yanone Kaffeesatz:wght@200;300;400;500;600;700';
	$crockery_store_font_family[] = 'Anton';
	$crockery_store_font_family[] = 'Libre Baskerville:ital,wght@0,400;0,700;1,400';
	$crockery_store_font_family[] = 'Bree Serif';
	$crockery_store_font_family[] = 'Gloria Hallelujah';
	$crockery_store_font_family[] = 'Abril Fatface';
	$crockery_store_font_family[] = 'Varela Round';
	$crockery_store_font_family[] = 'Vampiro One';
	$crockery_store_font_family[] = 'Shadows Into Light';
	$crockery_store_font_family[] = 'Cuprum:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$crockery_store_font_family[] = 'Rokkitt:wght@100;200;300;400;500;600;700;800;900';
	$crockery_store_font_family[] = 'Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$crockery_store_font_family[] = 'Francois One';
	$crockery_store_font_family[] = 'Orbitron:wght@400;500;600;700;800;900';
	$crockery_store_font_family[] = 'Patua One';
	$crockery_store_font_family[] = 'Acme';
	$crockery_store_font_family[] = 'Satisfy';
	$crockery_store_font_family[] = 'Josefin Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700';
	$crockery_store_font_family[] = 'Quattrocento Sans:ital,wght@0,400;0,700;1,400;1,700';
	$crockery_store_font_family[] = 'Architects Daughter';
	$crockery_store_font_family[] = 'Russo One';
	$crockery_store_font_family[] = 'Monda:wght@400;700';
	$crockery_store_font_family[] = 'Righteous';
	$crockery_store_font_family[] = 'Lobster Two:ital,wght@0,400;0,700;1,400;1,700';
	$crockery_store_font_family[] = 'Hammersmith One';
	$crockery_store_font_family[] = 'Courgette';
	$crockery_store_font_family[] = 'Permanent Marke';
	$crockery_store_font_family[] = 'Cherry Swash:wght@400;700';
	$crockery_store_font_family[] = 'Cormorant Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700';
	$crockery_store_font_family[] = 'Poiret One';
	$crockery_store_font_family[] = 'BenchNine:wght@300;400;700';
	$crockery_store_font_family[] = 'Economica:ital,wght@0,400;0,700;1,400;1,700';
	$crockery_store_font_family[] = 'Handlee';
	$crockery_store_font_family[] = 'Cardo:ital,wght@0,400;0,700;1,400';
	$crockery_store_font_family[] = 'Alfa Slab One';
	$crockery_store_font_family[] = 'Averia Serif Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700';
	$crockery_store_font_family[] = 'Cookie';
	$crockery_store_font_family[] = 'Chewy';
	$crockery_store_font_family[] = 'Great Vibes';
	$crockery_store_font_family[] = 'Coming Soon';
	$crockery_store_font_family[] = 'Philosopher:ital,wght@0,400;0,700;1,400;1,700';
	$crockery_store_font_family[] = 'Days One';
	$crockery_store_font_family[] = 'Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$crockery_store_font_family[] = 'Shrikhand';
	$crockery_store_font_family[] = 'Tangerine:wght@400;700';
	$crockery_store_font_family[] = 'IM Fell English SC';
	$crockery_store_font_family[] = 'Boogaloo';
	$crockery_store_font_family[] = 'Bangers';
	$crockery_store_font_family[] = 'Fredoka One';
	$crockery_store_font_family[] = 'Volkhov:ital,wght@0,400;0,700;1,400;1,700';
	$crockery_store_font_family[] = 'Shadows Into Light Two';
	$crockery_store_font_family[] = 'Marck Script';
	$crockery_store_font_family[] = 'Sacramento';
	$crockery_store_font_family[] = 'Unica One';
	$crockery_store_font_family[] = 'Dancing Script:wght@400;500;600;700';
	$crockery_store_font_family[] = 'Exo 2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$crockery_store_font_family[] = 'Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$crockery_store_font_family[] = 'Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$crockery_store_font_family[] = 'DM Serif Display:ital@0;1';
	$crockery_store_font_family[] = 'Open Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800';
	$crockery_store_font_family[] = 'Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800';
	$crockery_store_font_family[] = 'Be Vietnam Pro:wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';

	$crockery_store_query_args = array(
		'family'	=> rawurlencode(implode('|',$crockery_store_font_family)),
	);
	$crockery_store_font_url = add_query_arg($crockery_store_query_args,'//fonts.googleapis.com/css');
	return $crockery_store_font_url;
	$contents = wptt_get_webfont_url( esc_url_raw( $crockery_store_font_url ) );
}

/**
 * Register widget area.
 */
function crockery_store_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'crockery-store' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'crockery-store' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'crockery-store' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'crockery-store' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'crockery-store' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'crockery-store' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'crockery-store' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'crockery-store' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'crockery-store' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'crockery-store' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'crockery-store' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'crockery-store' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'crockery-store' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'crockery-store' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'crockery_store_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function crockery_store_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'crockery-store-fonts', crockery_store_fonts_url(), array(), null );

	// owl
	wp_enqueue_style( 'owl-carousel-css', get_theme_file_uri( '/assets/css/owl.carousel.css' ) );

	// Bootstrap
	wp_enqueue_style( 'bootstrap-css', get_theme_file_uri( '/assets/css/bootstrap.css' ) );

	// Theme stylesheet.
	wp_enqueue_style( 'crockery-store-style', get_stylesheet_uri() );
	require get_parent_theme_file_path( '/tp-theme-color.php' );
	wp_add_inline_style( 'crockery-store-style',$crockery_store_tp_theme_css );
	wp_style_add_data('crockery-store-style', 'rtl', 'replace');
	require get_parent_theme_file_path( '/tp-body-width-layout.php' );
	wp_add_inline_style( 'crockery-store-style',$crockery_store_tp_theme_css );
	wp_style_add_data('crockery-store-style', 'rtl', 'replace');

	// Theme block stylesheet.
	wp_enqueue_style( 'crockery-store-block-style', get_theme_file_uri( '/assets/css/blocks.css' ), array( 'crockery-store-style' ), '1.0' );

	// Fontawesome
	wp_enqueue_style( 'fontawesome-css', get_theme_file_uri( '/assets/css/fontawesome-all.css' ) );
	
	wp_enqueue_script( 'crockery-store-custom-scripts', get_template_directory_uri() . '/assets/js/crockery-store-custom.js', array('jquery'), true );

	wp_enqueue_script( 'bootstrap-js', get_theme_file_uri( '/assets/js/bootstrap.js' ), array( 'jquery' ), true );

	wp_enqueue_script( 'owl-carousel-js', get_theme_file_uri( '/assets/js/owl.carousel.js' ), array( 'jquery' ), true );

	wp_enqueue_script( 'crockery-store-focus-nav', get_template_directory_uri() . '/assets/js/focus-nav.js', array('jquery'), true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	$crockery_store_body_font_family = get_theme_mod('crockery_store_body_font_family', '');

	$crockery_store_heading_font_family = get_theme_mod('crockery_store_heading_font_family', '');

	$crockery_store_menu_font_family = get_theme_mod('crockery_store_menu_font_family', '');

	$crockery_store_tp_theme_css = '
		body, p.simplep, .more-btn a{
		    font-family: '.esc_html($crockery_store_body_font_family).';
		}
		h1,h2, h3, h4, h5, h6, .menubar,.logo h1, .logo p.site-title, p.simplep a, #slider p.slidertop-title, .more-btn a,.wc-block-checkout__actions_row .wc-block-components-checkout-place-order-button,.wc-block-cart__submit-container a,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, #theme-sidebar button[type="submit"],
#footer button[type="submit"]{
		    font-family: '.esc_html($crockery_store_heading_font_family).';
		}
	';
	wp_add_inline_style('crockery-store-style', $crockery_store_tp_theme_css);
}
add_action( 'wp_enqueue_scripts', 'crockery_store_scripts' );

/*radio button sanitization*/
function crockery_store_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

// Sanitize Sortable control.
function crockery_store_sanitize_sortable( $val, $setting ) {
	if ( is_string( $val ) || is_numeric( $val ) ) {
		return array(
			esc_attr( $val ),
		);
	}
	$sanitized_value = array();
	foreach ( $val as $item ) {
		if ( isset( $setting->manager->get_control( $setting->id )->choices[ $item ] ) ) {
			$sanitized_value[] = esc_attr( $item );
		}
	}
	return $sanitized_value;
}
/* Excerpt Limit Begin */
function crockery_store_excerpt_function($excerpt_count = 35) {
    $crockery_store_excerpt = get_the_excerpt();

    $crockery_store_text_excerpt = wp_strip_all_tags($crockery_store_excerpt);

    $crockery_store_excerpt_limit = esc_attr(get_theme_mod('crockery_store_excerpt_count', $excerpt_count));

    $crockery_store_theme_excerpt = implode(' ', array_slice(explode(' ', $crockery_store_text_excerpt), 0, $crockery_store_excerpt_limit));

    return $crockery_store_theme_excerpt;
}

function crockery_store_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'crockery_store_loop_columns');
if (!function_exists('crockery_store_loop_columns')) {
	function crockery_store_loop_columns() {
		$columns = get_theme_mod( 'crockery_store_per_columns', 3 );
		return $columns;
	}
}

// Category count 
function crockery_store_display_post_category_count() {
    $crockery_store_category = get_the_category();
    $crockery_store_category_count = ($crockery_store_category) ? count($crockery_store_category) : 0;
    $crockery_store_category_text = ($crockery_store_category_count === 1) ? 'category' : 'categories'; // Check for pluralization
    echo $crockery_store_category_count . ' ' . $crockery_store_category_text;
}

//post tag
function crockery_store_custom_tags_filter($crockery_store_tag_list) {
    // Replace the comma (,) with an empty string
    $crockery_store_tag_list = str_replace(', ', '', $crockery_store_tag_list);

    return $crockery_store_tag_list;
}
add_filter('the_tags', 'crockery_store_custom_tags_filter');

function crockery_store_custom_output_tags() {
    $crockery_store_tags = get_the_tags();

    if ($crockery_store_tags) {
        $crockery_store_tags_output = '<div class="post_tag">Tags: ';

        $crockery_store_first_tag = reset($crockery_store_tags);

        foreach ($crockery_store_tags as $tag) {
            $crockery_store_tags_output .= '<a href="' . esc_url(get_tag_link($tag)) . '" rel="tag" class="me-2">' . esc_html($tag->name) . '</a>';
            if ($tag !== $crockery_store_first_tag) {
                $crockery_store_tags_output .= ' ';
            }
        }

        $crockery_store_tags_output .= '</div>';

        echo $crockery_store_tags_output;
    }
}
//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'crockery_store_per_page', 20 );
function crockery_store_per_page( $crockery_store_cols ) {
  	$crockery_store_cols = get_theme_mod( 'crockery_store_product_per_page', 9 );
	return $crockery_store_cols;
}

function crockery_store_sanitize_number_range( $number, $setting ) {

	// Ensure input is an absolute integer.
	$number = absint( $number );

	// Get the input attributes associated with the setting.
	$atts = $setting->manager->get_control( $setting->id )->input_attrs;

	// Get minimum number in the range.
	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );

	// Get maximum number in the range.
	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );

	// Get step.
	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );

	// If the number is within the valid range, return it; otherwise, return the default
	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}

function crockery_store_sanitize_checkbox( $input ) {
	// Boolean check
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function crockery_store_sanitize_number_absint( $number, $setting ) {
	// Ensure $number is an absolute integer (whole number, zero or greater).
	$number = absint( $number );

	// If the input is an absolute integer, return it; otherwise, return the default
	return ( $number ? $number : $setting->default );
}

/**
 * Use front-page.php when Front page displays is set to a static page.
 */
function crockery_store_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template','crockery_store_front_page_template' );

function crockery_store_sanitize_select( $input, $setting ) {
	$input = sanitize_key( $input );
	$choices = $setting->manager->get_control( $setting->id )->choices;
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

// logo
function crockery_store_logo_width(){

	$crockery_store_logo_width   = get_theme_mod( 'crockery_store_logo_width', 80 );

	echo "<style type='text/css' media='all'>"; ?>
		img.custom-logo{
		    width: <?php echo absint( $crockery_store_logo_width ); ?>px;
		    max-width: 100%;
		}
	<?php echo "</style>";
}

add_action( 'wp_head', 'crockery_store_logo_width' );

/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path( '/inc/custom-header.php' );

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path( '/inc/template-tags.php' );

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer.php' );

/**
 * Load Theme Web File
 */
require get_parent_theme_file_path('/inc/wptt-webfont-loader.php' );
/**
 * Load Theme Web File
 */
require get_parent_theme_file_path( '/inc/controls/customize-control-toggle.php' );
/**
 * load sortable file
 */
require get_parent_theme_file_path( '/inc/controls/sortable-control.php' );

/**
 * TGM Recommendation
 */
require get_parent_theme_file_path( '/inc/TGM/tgm.php' );