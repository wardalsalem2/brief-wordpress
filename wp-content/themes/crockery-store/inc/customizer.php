<?php
/**
 * Crockery Store: Customizer
 *
 * @package Crockery Store
 * @subpackage crockery_store
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function Crockery_Store_Customize_register( $wp_customize ) {

	require get_parent_theme_file_path('/inc/controls/range-slider-control.php');

	require get_parent_theme_file_path('/inc/controls/icon-changer.php');
	
	// Register the custom control type.
	$wp_customize->register_control_type( 'Crockery_Store_Toggle_Control' );
	
	//Register the sortable control type.
	$wp_customize->register_control_type( 'Crockery_Store_Control_Sortable' );

	//add home page setting pannel
	$wp_customize->add_panel( 'crockery_store_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Custom Home page', 'crockery-store' ),
	    'description' => __( 'Description of what this panel does.', 'crockery-store' ),
	) );
	
	//TP GENRAL OPTION
	$wp_customize->add_section('crockery_store_tp_general_settings',array(
        'title' => __('TP General Option', 'crockery-store'),
        'priority' => 1,
        'panel' => 'crockery_store_panel_id'
    ) );

    $wp_customize->add_setting('crockery_store_tp_body_layout_settings',array(
        'default' => 'Full',
        'sanitize_callback' => 'crockery_store_sanitize_choices'
	));
    $wp_customize->add_control('crockery_store_tp_body_layout_settings',array(
        'type' => 'radio',
        'label'     => __('Body Layout Setting', 'crockery-store'),
        'description'   => __('This option work for complete body, if you want to set the complete website in container.', 'crockery-store'),
        'section' => 'crockery_store_tp_general_settings',
        'choices' => array(
            'Full' => __('Full','crockery-store'),
            'Container' => __('Container','crockery-store'),
            'Container Fluid' => __('Container Fluid','crockery-store')
        ),
	) );

    // Add Settings and Controls for Post Layout
	$wp_customize->add_setting('crockery_store_sidebar_post_layout',array(
        'default' => 'right',
        'sanitize_callback' => 'crockery_store_sanitize_choices'
	));
	$wp_customize->add_control('crockery_store_sidebar_post_layout',array(
        'type' => 'radio',
        'label'     => __('Post Sidebar Position', 'crockery-store'),
        'description'   => __('This option work for blog page, blog single page, archive page and search page.', 'crockery-store'),
        'section' => 'crockery_store_tp_general_settings',
        'choices' => array(
            'full' => __('Full','crockery-store'),
            'left' => __('Left','crockery-store'),
            'right' => __('Right','crockery-store'),
            'three-column' => __('Three Columns','crockery-store'),
            'four-column' => __('Four Columns','crockery-store'),
            'grid' => __('Grid Layout','crockery-store')
        ),
	) );

	// Add Settings and Controls for post sidebar Layout
	$wp_customize->add_setting('crockery_store_sidebar_single_post_layout',array(
        'default' => 'right',
        'sanitize_callback' => 'crockery_store_sanitize_choices'
	));
	$wp_customize->add_control('crockery_store_sidebar_single_post_layout',array(
        'type' => 'radio',
        'label'     => __('Single Post Sidebar Position', 'crockery-store'),
        'description'   => __('This option work for single blog page', 'crockery-store'),
        'section' => 'crockery_store_tp_general_settings',
        'choices' => array(
            'full' => __('Full','crockery-store'),
            'left' => __('Left','crockery-store'),
            'right' => __('Right','crockery-store'),
        ),
	) );

	// Add Settings and Controls for Page Layout
	$wp_customize->add_setting('crockery_store_sidebar_page_layout',array(
        'default' => 'right',
        'sanitize_callback' => 'crockery_store_sanitize_choices'
	));
	$wp_customize->add_control('crockery_store_sidebar_page_layout',array(
        'type' => 'radio',
        'label'     => __('Page Sidebar Position', 'crockery-store'),
        'description'   => __('This option work for pages.', 'crockery-store'),
        'section' => 'crockery_store_tp_general_settings',
        'choices' => array(
            'full' => __('Full','crockery-store'),
            'left' => __('Left','crockery-store'),
            'right' => __('Right','crockery-store')
        ),
	) );

	$wp_customize->add_setting( 'crockery_store_sticky', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'crockery_store_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Crockery_Store_Toggle_Control( $wp_customize, 'crockery_store_sticky', array(
		'label'       => esc_html__( 'Show Sticky Header', 'crockery-store' ),
		'section'     => 'crockery_store_tp_general_settings',
		'type'        => 'toggle',
		'settings'    => 'crockery_store_sticky',
	) ) );

	//tp typography option
	$crockery_store_font_array = array(
		''                       => 'No Fonts',
		'Abril Fatface'          => 'Abril Fatface',
		'Acme'                   => 'Acme',
		'Anton'                  => 'Anton',
		'Architects Daughter'    => 'Architects Daughter',
		'Arimo'                  => 'Arimo',
		'Arsenal'                => 'Arsenal',
		'Arvo'                   => 'Arvo',
		'Alegreya'               => 'Alegreya',
		'Alfa Slab One'          => 'Alfa Slab One',
		'Averia Serif Libre'     => 'Averia Serif Libre',
		'Bangers'                => 'Bangers',
		'Boogaloo'               => 'Boogaloo',
		'Bad Script'             => 'Bad Script',
		'Bitter'                 => 'Bitter',
		'Bree Serif'             => 'Bree Serif',
		'BenchNine'              => 'BenchNine',
		'Be Vietnam Pro'         => 'Be Vietnam Pro',
		'Cabin'                  => 'Cabin',
		'Cardo'                  => 'Cardo',
		'Courgette'              => 'Courgette',
		'Cherry Swash'           => 'Cherry Swash',
		'Cormorant Garamond'     => 'Cormorant Garamond',
		'Crimson Text'           => 'Crimson Text',
		'Cuprum'                 => 'Cuprum',
		'Cookie'                 => 'Cookie',
		'Chewy'                  => 'Chewy',
		'Days One'               => 'Days One',
		'Dosis'                  => 'Dosis',
		'Droid Sans'             => 'Droid Sans',
		'Economica'              => 'Economica',
		'Fredoka One'            => 'Fredoka One',
		'Fjalla One'             => 'Fjalla One',
		'Francois One'           => 'Francois One',
		'Frank Ruhl Libre'       => 'Frank Ruhl Libre',
		'Gloria Hallelujah'      => 'Gloria Hallelujah',
		'Great Vibes'            => 'Great Vibes',
		'Handlee'                => 'Handlee',
		'Hammersmith One'        => 'Hammersmith One',
		'Inconsolata'            => 'Inconsolata',
		'Indie Flower'           => 'Indie Flower',
		'Inter'                  => 'Inter',
		'IM Fell English SC'     => 'IM Fell English SC',
		'Julius Sans One'        => 'Julius Sans One',
		'Josefin Slab'           => 'Josefin Slab',
		'Josefin Sans'           => 'Josefin Sans',
		'Kanit'                  => 'Kanit',
		'Karla'                  => 'Karla',
		'Lobster'                => 'Lobster',
		'Lato'                   => 'Lato',
		'Lora'                   => 'Lora',
		'Libre Baskerville'      => 'Libre Baskerville',
		'Lobster Two'            => 'Lobster Two',
		'Merriweather'           => 'Merriweather',
		'Monda'                  => 'Monda',
		'Montserrat'             => 'Montserrat',
		'Muli'                   => 'Muli',
		'Marck Script'           => 'Marck Script',
		'Noto Serif'             => 'Noto Serif',
		'Open Sans'              => 'Open Sans',
		'Overpass'               => 'Overpass',
		'Overpass Mono'          => 'Overpass Mono',
		'Oxygen'                 => 'Oxygen',
		'Orbitron'               => 'Orbitron',
		'Patua One'              => 'Patua One',
		'Pacifico'               => 'Pacifico',
		'Padauk'                 => 'Padauk',
		'Playball'               => 'Playball',
		'Playfair Display'       => 'Playfair Display',
		'PT Sans'                => 'PT Sans',
		'Philosopher'            => 'Philosopher',
		'Permanent Marker'       => 'Permanent Marker',
		'Poiret One'             => 'Poiret One',
		'Quicksand'              => 'Quicksand',
		'Quattrocento Sans'      => 'Quattrocento Sans',
		'Raleway'                => 'Raleway',
		'Rubik'                  => 'Rubik',
		'Rokkitt'                => 'Rokkitt',
		'Russo One'              => 'Russo One',
		'Righteous'              => 'Righteous',
		'Slabo'                  => 'Slabo',
		'Source Sans Pro'        => 'Source Sans Pro',
		'Shadows Into Light Two' => 'Shadows Into Light Two',
		'Shadows Into Light'     => 'Shadows Into Light',
		'Sacramento'             => 'Sacramento',
		'Shrikhand'              => 'Shrikhand',
		'Tangerine'              => 'Tangerine',
		'Ubuntu'                 => 'Ubuntu',
		'VT323'                  => 'VT323',
		'Varela Round'           => 'Varela Round',
		'Vampiro One'            => 'Vampiro One',
		'Vollkorn'               => 'Vollkorn',
		'Volkhov'                => 'Volkhov',
		'Yanone Kaffeesatz'      => 'Yanone Kaffeesatz'
	);

	$wp_customize->add_section('crockery_store_typography_option',array(
		'title'         => __('TP Typography Option', 'crockery-store'),
		'priority' => 1,
		'panel' => 'crockery_store_panel_id'
   	));

   	$wp_customize->add_setting('crockery_store_heading_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'crockery_store_sanitize_choices',
	));
	$wp_customize->add_control(	'crockery_store_heading_font_family', array(
		'section' => 'crockery_store_typography_option',
		'label'   => __('heading Fonts', 'crockery-store'),
		'type'    => 'select',
		'choices' => $crockery_store_font_array,
	));

	$wp_customize->add_setting('crockery_store_body_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'crockery_store_sanitize_choices',
	));
	$wp_customize->add_control(	'crockery_store_body_font_family', array(
		'section' => 'crockery_store_typography_option',
		'label'   => __('Body Fonts', 'crockery-store'),
		'type'    => 'select',
		'choices' => $crockery_store_font_array,
	));

	//TP Preloader Option
	$wp_customize->add_section('crockery_store_prelaoder_option',array(
		'title'         => __('TP Preloader Option', 'crockery-store'),
		'priority' => 1,
		'panel' => 'crockery_store_panel_id'
	) );

	$wp_customize->add_setting( 'crockery_store_preloader_show_hide', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'crockery_store_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Crockery_Store_Toggle_Control( $wp_customize, 'crockery_store_preloader_show_hide', array(
		'label'       => esc_html__( 'Show / Hide Preloader Option', 'crockery-store' ),
		'section'     => 'crockery_store_prelaoder_option',
		'type'        => 'toggle',
		'settings'    => 'crockery_store_preloader_show_hide',
	) ) );

	$wp_customize->add_setting( 'crockery_store_tp_preloader_color1_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'crockery_store_tp_preloader_color1_option', array(
			'label'     => __('Preloader First Ring Color', 'crockery-store'),
	    'description' => __('It will change the complete theme preloader ring 1 color in one click.', 'crockery-store'),
	    'section' => 'crockery_store_prelaoder_option',
	    'settings' => 'crockery_store_tp_preloader_color1_option',
  	)));

  	$wp_customize->add_setting( 'crockery_store_tp_preloader_color2_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'crockery_store_tp_preloader_color2_option', array(
			'label'     => __('Preloader Second Ring Color', 'crockery-store'),
	    'description' => __('It will change the complete theme preloader ring 2 color in one click.', 'crockery-store'),
	    'section' => 'crockery_store_prelaoder_option',
	    'settings' => 'crockery_store_tp_preloader_color2_option',
  	)));

  	$wp_customize->add_setting( 'crockery_store_tp_preloader_bg_color_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'crockery_store_tp_preloader_bg_color_option', array(
			'label'     => __('Preloader Background Color', 'crockery-store'),
	    'description' => __('It will change the complete theme preloader bg color in one click.', 'crockery-store'),
	    'section' => 'crockery_store_prelaoder_option',
	    'settings' => 'crockery_store_tp_preloader_bg_color_option',
  	)));

	//TP Color Option
	$wp_customize->add_section('crockery_store_color_option',array(
     'title'         => __('TP Color Option', 'crockery-store'),
     'priority' => 1,
     'panel' => 'crockery_store_panel_id'
    ) );
    
	$wp_customize->add_setting( 'crockery_store_tp_color_option_first', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'crockery_store_tp_color_option_first', array(
			'label'     => __('Theme First Color', 'crockery-store'),
	    'description' => __('It will change the complete theme color in one click.', 'crockery-store'),
	    'section' => 'crockery_store_color_option',
	    'settings' => 'crockery_store_tp_color_option_first',
  	)));

  	$wp_customize->add_setting( 'crockery_store_tp_color_option_second', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'crockery_store_tp_color_option_second', array(
			'label'     => __('Theme Second Color', 'crockery-store'),
	    'description' => __('It will change the complete theme color in one click.', 'crockery-store'),
	    'section' => 'crockery_store_color_option',
	    'settings' => 'crockery_store_tp_color_option_second',
  	)));

	//TP Blog Option
	$wp_customize->add_section('crockery_store_blog_option',array(
        'title' => __('TP Blog Option', 'crockery-store'),
        'priority' => 1,
        'panel' => 'crockery_store_panel_id'
    ) );

    $wp_customize->add_setting('crockery_store_edit_blog_page_title',array(
		'default'=> 'Home',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('crockery_store_edit_blog_page_title',array(
		'label'	=> __('Change Blog Page Title','crockery-store'),
		'section'=> 'crockery_store_blog_option',
		'type'=> 'text'
	));

	$wp_customize->add_setting('crockery_store_edit_blog_page_description',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('crockery_store_edit_blog_page_description',array(
		'label'	=> __('Add Blog Page Description','crockery-store'),
		'section'=> 'crockery_store_blog_option',
		'type'=> 'text'
	));

	/** Meta Order */
    $wp_customize->add_setting('blog_meta_order', array(
        'default' => array('date', 'author', 'comment','category'),
        'sanitize_callback' => 'crockery_store_sanitize_sortable',
    ));
    $wp_customize->add_control(new Crockery_Store_Control_Sortable($wp_customize, 'blog_meta_order', array(
    	'label' => esc_html__('Meta Order', 'crockery-store'),
        'description' => __('Drag & Drop post items to re-arrange the order and also hide and show items as per the need by clicking on the eye icon.', 'crockery-store') ,
        'section' => 'crockery_store_blog_option',
        'choices' => array(
            'date' => __('date', 'crockery-store') ,
            'author' => __('author', 'crockery-store') ,
            'comment' => __('comment', 'crockery-store') ,
            'category' => __('category', 'crockery-store') ,
        ) ,
    )));

    $wp_customize->add_setting( 'crockery_store_excerpt_count', array(
		'default'              => 35,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'crockery_store_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'crockery_store_excerpt_count', array(
		'label'       => esc_html__( 'Edit Excerpt Limit','crockery-store' ),
		'section'     => 'crockery_store_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

    $wp_customize->add_setting('crockery_store_read_more_text',array(
		'default'=> __('Read More','crockery-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('crockery_store_read_more_text',array(
		'label'	=> __('Edit Button Text','crockery-store'),
		'section'=> 'crockery_store_blog_option',
		'type'=> 'text'
	));

	$wp_customize->add_setting('crockery_store_post_image_round', array(
	  'default' => '0',
      'sanitize_callback' => 'crockery_store_sanitize_number_range',
	));
	$wp_customize->add_control(new Crockery_Store_Range_Slider($wp_customize, 'crockery_store_post_image_round', array(
       'section' => 'crockery_store_blog_option',
      'label' => esc_html__('Edit Post Image Border Radius', 'crockery-store'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 180,
        'step' => 1
    )
	)));

	$wp_customize->add_setting('crockery_store_post_image_width', array(
	  'default' => '',
      'sanitize_callback' => 'crockery_store_sanitize_number_range',
	));
	$wp_customize->add_control(new Crockery_Store_Range_Slider($wp_customize, 'crockery_store_post_image_width', array(
       'section' => 'crockery_store_blog_option',
      'label' => esc_html__('Edit Post Image Width', 'crockery-store'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 367,
        'step' => 1
    )
	)));

	$wp_customize->add_setting('crockery_store_post_image_length', array(
	  'default' => '',
      'sanitize_callback' => 'crockery_store_sanitize_number_range',
	));
	$wp_customize->add_control(new Crockery_Store_Range_Slider($wp_customize, 'crockery_store_post_image_length', array(
       'section' => 'crockery_store_blog_option',
      'label' => esc_html__('Edit Post Image height', 'crockery-store'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 900,
        'step' => 1
    )
	)));
	
	$wp_customize->add_setting( 'crockery_store_remove_read_button', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'crockery_store_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Crockery_Store_Toggle_Control( $wp_customize, 'crockery_store_remove_read_button', array(
		'label'       => esc_html__( 'Show / Hide Read More Button', 'crockery-store' ),
		'section'     => 'crockery_store_blog_option',
		'type'        => 'toggle',
		'settings'    => 'crockery_store_remove_read_button',
	) ) );

	$wp_customize->add_setting( 'crockery_store_remove_tags', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'crockery_store_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Crockery_Store_Toggle_Control( $wp_customize, 'crockery_store_remove_tags', array(
		'label'       => esc_html__( 'Show / Hide Tags Option', 'crockery-store' ),
		'section'     => 'crockery_store_blog_option',
		'type'        => 'toggle',
		'settings'    => 'crockery_store_remove_tags',
	) ) );

	$wp_customize->add_setting( 'crockery_store_remove_category', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'crockery_store_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Crockery_Store_Toggle_Control( $wp_customize, 'crockery_store_remove_category', array(
		'label'       => esc_html__( 'Show / Hide Category Option', 'crockery-store' ),
		'section'     => 'crockery_store_blog_option',
		'type'        => 'toggle',
		'settings'    => 'crockery_store_remove_category',
	) ) );

	$wp_customize->add_setting( 'crockery_store_remove_comment', array(
	 'default'           => true,
	 'transport'         => 'refresh',
	 'sanitize_callback' => 'crockery_store_sanitize_checkbox',
 	) );

	$wp_customize->add_control( new Crockery_Store_Toggle_Control( $wp_customize, 'crockery_store_remove_comment', array(
	 'label'       => esc_html__( 'Show / Hide Comment Form', 'crockery-store' ),
	 'section'     => 'crockery_store_blog_option',
	 'type'        => 'toggle',
	 'settings'    => 'crockery_store_remove_comment',
	) ) );

	$wp_customize->add_setting( 'crockery_store_remove_related_post', array(
	 'default'           => true,
	 'transport'         => 'refresh',
	 'sanitize_callback' => 'crockery_store_sanitize_checkbox',
 	) );
	$wp_customize->add_control( new Crockery_Store_Toggle_Control( $wp_customize, 'crockery_store_remove_related_post', array(
	 'label'       => esc_html__( 'Show / Hide Related Post', 'crockery-store' ),
	 'section'     => 'crockery_store_blog_option',
	 'type'        => 'toggle',
	 'settings'    => 'crockery_store_remove_related_post',
	) ) );

	$wp_customize->add_setting('crockery_store_related_post_heading',array(
		'default'=> __('Related Posts','crockery-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('crockery_store_related_post_heading',array(
		'label'	=> __('Edit Section Title','crockery-store'),
		'section'=> 'crockery_store_blog_option',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'crockery_store_related_post_per_page', array(
		'default'              => 3,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'crockery_store_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'crockery_store_related_post_per_page', array(
		'label'       => esc_html__( 'Related Post Per Page','crockery-store' ),
		'section'     => 'crockery_store_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 3,
			'max'              => 9,
		),
	) );

	$wp_customize->add_setting( 'crockery_store_related_post_per_columns', array(
		'default'              => 3,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'crockery_store_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'crockery_store_related_post_per_columns', array(
		'label'       => esc_html__( 'Related Post Per Row','crockery-store' ),
		'section'     => 'crockery_store_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 4,
		),
	) );

	$wp_customize->add_setting('crockery_store_post_layout',array(
        'default' => 'image-content',
        'sanitize_callback' => 'crockery_store_sanitize_choices'
	));
	$wp_customize->add_control('crockery_store_post_layout',array(
        'type' => 'radio',
        'label'     => __('Post Layout', 'crockery-store'),
        'section' => 'crockery_store_blog_option',
        'choices' => array(
            'image-content' => __('Media-Content','crockery-store'),
            'content-image' => __('Content-Media','crockery-store'),
        ),
	) );

	//MENU TYPOGRAPHY
	$wp_customize->add_section( 'crockery_store_menu_typography', array(
    	'title'      => __( 'Menu Typography', 'crockery-store' ),
    	'priority' => 2,
		'panel' => 'crockery_store_panel_id'
	) );

	$wp_customize->add_setting('crockery_store_menu_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'crockery_store_sanitize_choices',
	));
	$wp_customize->add_control(	'crockery_store_menu_font_family', array(
		'section' => 'crockery_store_menu_typography',
		'label'   => __('Menu Fonts', 'crockery-store'),
		'type'    => 'select',
		'choices' => $crockery_store_font_array,
	));

	$wp_customize->add_setting('crockery_store_menu_font_weight',array(
        'default' => '',
        'sanitize_callback' => 'crockery_store_sanitize_choices'
	));
	$wp_customize->add_control('crockery_store_menu_font_weight',array(
     'type' => 'radio',
     'label'     => __('Font Weight', 'crockery-store'),
     'section' => 'crockery_store_menu_typography',
     'type' => 'select',
     'choices' => array(
         '100' => __('100','crockery-store'),
         '200' => __('200','crockery-store'),
         '300' => __('300','crockery-store'),
         '400' => __('400','crockery-store'),
         '500' => __('500','crockery-store'),
         '600' => __('600','crockery-store'),
         '700' => __('700','crockery-store'),
         '800' => __('800','crockery-store'),
         '900' => __('900','crockery-store')
     ),
	) );

	$wp_customize->add_setting('crockery_store_menu_text_tranform',array(
		'default' => '',
		'sanitize_callback' => 'crockery_store_sanitize_choices'
 	));
 	$wp_customize->add_control('crockery_store_menu_text_tranform',array(
		'type' => 'select',
		'label' => __('Menu Text Transform','crockery-store'),
		'section' => 'crockery_store_menu_typography',
		'choices' => array(
		   'Uppercase' => __('Uppercase','crockery-store'),
		   'Lowercase' => __('Lowercase','crockery-store'),
		   'Capitalize' => __('Capitalize','crockery-store'),
		),
	) );
	$wp_customize->add_setting('crockery_store_menu_font_size', array(
	  'default' => '',
      'sanitize_callback' => 'crockery_store_sanitize_number_range',
	));
	$wp_customize->add_control(new Crockery_Store_Range_Slider($wp_customize, 'crockery_store_menu_font_size', array(
        'section' => 'crockery_store_menu_typography',
        'label' => esc_html__('Font Size', 'crockery-store'),
        'input_attrs' => array(
          'min' => 0,
          'max' => 20,
          'step' => 1
    )
	)));

	$wp_customize->add_setting( 'crockery_store_menu_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'crockery_store_menu_color', array(
			'label'     => __('Change Menu Color', 'crockery-store'),
	    'section' => 'crockery_store_menu_typography',
	    'settings' => 'crockery_store_menu_color',
  	)));

	// Top Bar
	$wp_customize->add_section( 'crockery_store_topbar', array(
    	'title'      => __( 'Header Details', 'crockery-store' ),
    	'priority' => 2,
    	'description' => __( 'Add your contact details', 'crockery-store' ),
		'panel' => 'crockery_store_panel_id'
	) );

	$wp_customize->add_setting('crockery_store_topbar_visibility', array(
	    'default'           => false,
	    'transport'         => 'refresh',
	    'sanitize_callback' => 'crockery_store_sanitize_checkbox',
	));
	$wp_customize->add_control(new Crockery_Store_Toggle_Control($wp_customize, 'crockery_store_topbar_visibility', array(
	    'label'       => esc_html__('Show / Hide Topbar', 'crockery-store'),
	    'section'     => 'crockery_store_topbar',
	    'type'        => 'toggle',
	    'settings'    => 'crockery_store_topbar_visibility',
	)));

	$wp_customize->add_setting('crockery_store_discount_text_top',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('crockery_store_discount_text_top',array(
		'label'	=> __('Add Topbar Text','crockery-store'),
		'section'=> 'crockery_store_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'crockery_store_currency_switcher', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'crockery_store_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Crockery_Store_Toggle_Control( $wp_customize, 'crockery_store_currency_switcher', array(
		'label'       => esc_html__( 'Show / Hide Currency Switcher', 'crockery-store' ),
		'section'     => 'crockery_store_topbar',
		'type'        => 'toggle',
		'settings'    => 'crockery_store_currency_switcher',
	) ) );

	$wp_customize->add_setting( 'crockery_store_cart_language_translator', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'crockery_store_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Crockery_Store_Toggle_Control( $wp_customize, 'crockery_store_cart_language_translator', array(
		'label'       => esc_html__( 'Show / Hide Language Translator', 'crockery-store' ),
		'section'     => 'crockery_store_topbar',
		'type'        => 'toggle',
		'settings'    => 'crockery_store_cart_language_translator',
	) ) );

	$wp_customize->add_setting('crockery_store_help_center_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('crockery_store_help_center_text',array(
		'label'	=> __('Add Help Center Text','crockery-store'),
		'section'	=> 'crockery_store_topbar',
		'type'		=> 'text'
	));
	$wp_customize->add_setting('crockery_store_help_center_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('crockery_store_help_center_link',array(
		'label'	=> __('Add Help Center Page Link','crockery-store'),
		'section'	=> 'crockery_store_topbar',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('crockery_store_order_tracking_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('crockery_store_order_tracking_text',array(
		'label'	=> __('Add Order Tracking Text','crockery-store'),
		'section'	=> 'crockery_store_topbar',
		'type'		=> 'text'
	));
	
	$wp_customize->add_setting('crockery_store_order_tracking_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('crockery_store_order_tracking_link',array(
		'label'	=> __('Add Order Tracking Link','crockery-store'),
		'section'	=> 'crockery_store_topbar',
		'type'		=> 'url'
	));

	// Social Link
	$wp_customize->add_section( 'crockery_store_social_media', array(
    	'title'      => __( 'Social Media Links', 'crockery-store' ),
    	'description' => __( 'Add your Social Links', 'crockery-store' ),
		'panel' => 'crockery_store_panel_id',
      'priority' => 2,
	) );

	$wp_customize->add_setting( 'crockery_store_linkedin_new_tab', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'crockery_store_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Crockery_Store_Toggle_Control( $wp_customize, 'crockery_store_linkedin_new_tab', array(
		'label'       => esc_html__( 'Open in new tab', 'crockery-store' ),
		'section'     => 'crockery_store_social_media',
		'type'        => 'toggle',
		'settings'    => 'crockery_store_linkedin_new_tab',
	) ) );

	$wp_customize->add_setting('crockery_store_linkedin_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('crockery_store_linkedin_url',array(
		'label'	=> __('Linkedin Link','crockery-store'),
		'section'=> 'crockery_store_social_media',
		'type'=> 'url'
	));

	$wp_customize->add_setting('crockery_store_linkedin_icon',array(
		'default'	=> 'fab fa-linkedin-in',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Crockery_Store_Icon_Changer(
        $wp_customize,'crockery_store_linkedin_icon',array(
		'label'	=> __('Linkedin Icon','crockery-store'),
		'transport' => 'refresh',
		'section'	=> 'crockery_store_social_media',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'crockery_store_header_twt_new_tab', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'crockery_store_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Crockery_Store_Toggle_Control( $wp_customize, 'crockery_store_header_twt_new_tab', array(
		'label'       => esc_html__( 'Open in new tab', 'crockery-store' ),
		'section'     => 'crockery_store_social_media',
		'type'        => 'toggle',
		'settings'    => 'crockery_store_header_twt_new_tab',
	) ) );

	$wp_customize->add_setting('crockery_store_twitter_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('crockery_store_twitter_url',array(
		'label'	=> __('Twitter Link','crockery-store'),
		'section'=> 'crockery_store_social_media',
		'type'=> 'url'
	));

	$wp_customize->add_setting('crockery_store_twitter_icon',array(
		'default'	=> 'fab fa-twitter',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Crockery_Store_Icon_Changer(
        $wp_customize,'crockery_store_twitter_icon',array(
		'label'	=> __('Twitter Icon','crockery-store'),
		'transport' => 'refresh',
		'section'	=> 'crockery_store_social_media',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'crockery_store_header_fb_new_tab', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'crockery_store_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Crockery_Store_Toggle_Control( $wp_customize, 'crockery_store_header_fb_new_tab', array(
		'label'       => esc_html__( 'Open in new tab', 'crockery-store' ),
		'section'     => 'crockery_store_social_media',
		'type'        => 'toggle',
		'settings'    => 'crockery_store_header_fb_new_tab',
	) ) );

	$wp_customize->add_setting('crockery_store_facebook_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('crockery_store_facebook_url',array(
		'label'	=> __('Facebook Link','crockery-store'),
		'section'=> 'crockery_store_social_media',
		'type'=> 'url'
	));

	$wp_customize->selective_refresh->add_partial( 'crockery_store_facebook_url', array(
		'selector' => '.social-media',
		'render_callback' => 'Crockery_Store_Customize_partial_crockery_store_facebook_url',
	) );

	$wp_customize->add_setting('crockery_store_facebook_icon',array(
		'default'	=> 'fab fa-facebook-f',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Crockery_Store_Icon_Changer(
        $wp_customize,'crockery_store_facebook_icon',array(
		'label'	=> __('Facebook Icon','crockery-store'),
		'transport' => 'refresh',
		'section'	=> 'crockery_store_social_media',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'crockery_store_header_ins_new_tab', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'crockery_store_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Crockery_Store_Toggle_Control( $wp_customize, 'crockery_store_header_ins_new_tab', array(
		'label'       => esc_html__( 'Open in new tab', 'crockery-store' ),
		'section'     => 'crockery_store_social_media',
		'type'        => 'toggle',
		'settings'    => 'crockery_store_header_ins_new_tab',
	) ) );

	$wp_customize->add_setting('crockery_store_instagram_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('crockery_store_instagram_url',array(
		'label'	=> __('Instagram Link','crockery-store'),
		'section'=> 'crockery_store_social_media',
		'type'=> 'url'
	));

	$wp_customize->add_setting('crockery_store_instagram_icon',array(
		'default'	=> 'fab fa-instagram',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Crockery_Store_Icon_Changer(
        $wp_customize,'crockery_store_instagram_icon',array(
		'label'	=> __('Instagram Icon','crockery-store'),
		'transport' => 'refresh',
		'section'	=> 'crockery_store_social_media',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'crockery_store_youtube_new_tab', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'crockery_store_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Crockery_Store_Toggle_Control( $wp_customize, 'crockery_store_youtube_new_tab', array(
		'label'       => esc_html__( 'Open in new tab', 'crockery-store' ),
		'section'     => 'crockery_store_social_media',
		'type'        => 'toggle',
		'settings'    => 'crockery_store_youtube_new_tab',
	) ) );

	$wp_customize->add_setting('crockery_store_youtube_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('crockery_store_youtube_url',array(
		'label'	=> __('Youtube Link','crockery-store'),
		'section'=> 'crockery_store_social_media',
		'type'=> 'url'
	));

	$wp_customize->add_setting('crockery_store_youtube_icon',array(
		'default'	=> 'fab fa-youtube',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Crockery_Store_Icon_Changer(
        $wp_customize,'crockery_store_youtube_icon',array(
		'label'	=> __('Youtube Icon','crockery-store'),
		'transport' => 'refresh',
		'section'	=> 'crockery_store_social_media',
		'type'		=> 'icon'
	)));

	//home page slider
	$wp_customize->add_section( 'crockery_store_slider_section' , array(
    	'title'      => __( 'Slider Section', 'crockery-store' ),
    	'priority' => 2,
		'panel' => 'crockery_store_panel_id'
	) );

	$wp_customize->add_setting( 'crockery_store_slider_arrows', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'crockery_store_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Crockery_Store_Toggle_Control( $wp_customize, 'crockery_store_slider_arrows', array(
		'label'       => esc_html__( 'Show / Hide slider', 'crockery-store' ),
		'section'     => 'crockery_store_slider_section',
		'type'        => 'toggle',
		'settings'    => 'crockery_store_slider_arrows',
	) ) );

	for ( $crockery_store_count = 1; $crockery_store_count <= 4; $crockery_store_count++ ) {

		$wp_customize->add_setting( 'crockery_store_slider_page' . $crockery_store_count, array(
			'default'           => '',
			'sanitize_callback' => 'crockery_store_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'crockery_store_slider_page' . $crockery_store_count, array(
			'label'    => __( 'Select Slide Image Page', 'crockery-store' ),
			'section'  => 'crockery_store_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting('crockery_store_slider_short_heading',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('crockery_store_slider_short_heading',array(
		'label'	=> __('Add short Heading','crockery-store'),
		'section'=> 'crockery_store_slider_section',
		'type'=> 'text'
	));

	/*=========================================
	product Section
	=========================================*/
	$wp_customize->add_section(
		'crockery_store_our_products_section', array(
			'title' => esc_html__( 'Our Products Sale Section', 'crockery-store' ),
			'priority' => 4,
			'panel' => 'crockery_store_panel_id',
		)
	);

	$wp_customize->add_setting( 'crockery_store_our_products_show_hide_section', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'crockery_store_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Crockery_Store_Toggle_Control( $wp_customize, 'crockery_store_our_products_show_hide_section', array(
		'label'       => esc_html__( 'Show / Hide Section', 'crockery-store' ),
		'section'     => 'crockery_store_our_products_section',
		'type'        => 'toggle',
		'settings'    => 'crockery_store_our_products_show_hide_section',
	) ) );

	$wp_customize->add_setting('crockery_store_product_short_heading',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('crockery_store_product_short_heading',array(
		'label'	=> __('Add short Heading','crockery-store'),
		'section'=> 'crockery_store_our_products_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 
    	'crockery_store_our_products_heading_section',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);	
	$wp_customize->add_control( 
		'crockery_store_our_products_heading_section',
		array(
		    'label'   		=> __('Add Heading','crockery-store'),
		    'section'		=> 'crockery_store_our_products_section',
			'type' 			=> 'text',
		)
	);

	$crockery_store_args = array(
	    'type'           => 'product',
	    'child_of'       => 0,
	    'parent'         => '',
	    'orderby'        => 'term_group',
	    'order'          => 'ASC',
	    'hide_empty'     => false,
	    'hierarchical'   => 1,
	    'number'         => '',
	    'taxonomy'       => 'product_cat',
	    'pad_counts'     => false
	);
	$categories = get_categories($crockery_store_args);
	$crockery_store_cats = array();
	$i = 0;
	foreach ($categories as $category) {
	    if ($i == 0) {
	        $default = $category->slug;
	        $i++;
	    }
	    $crockery_store_cats[$category->slug] = $category->name;
	}

	// Set the default value to "none"
	$crockery_store_default_value = 'none';

	$wp_customize->add_setting(
	    'crockery_store_our_product_product_category',
	    array(
	        'default'           => $crockery_store_default_value,
	        'sanitize_callback' => 'crockery_store_sanitize_select',
	    )
	);
	// Add "None" as an option in the select dropdown
	$crockery_store_cats_with_none = array_merge(array('none' => 'None'), $crockery_store_cats);

	$wp_customize->add_control(
	    'crockery_store_our_product_product_category',
	    array(
	        'type'    => 'select',
	        'choices' => $crockery_store_cats_with_none,
	        'label'   => __('Select Product Category', 'crockery-store'),
	        'section' => 'crockery_store_our_products_section',
	    )
	);

	$wp_customize->add_setting('crockery_store_product_clock_timer_end',array(
		'default'=> '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('crockery_store_product_clock_timer_end',array(
		'label' => __('Countdown Timer End Date','crockery-store'),
		'section' => 'crockery_store_our_products_section',
		'description' => __('Set the end date and time for the countdown timer. Use the following format: "Month Day, Year Hour:Minute:Second" (e.g., "June 30, 2025 11:00:00"). The timer will automatically calculate the remaining time based on the current date and time.','crockery-store'),
		'type'=> 'text'
	));

	/*SOCIAL LINK*/
	$wp_customize->add_setting(
		'crockery_store_product_social_link1',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => 'https://facebook.com',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'crockery_store_product_social_link1',
		array(
			'label'       => __('Edit Facebook Link', 'crockery-store'),
			'section'     => 'crockery_store_our_products_section',
			'type'        => 'text',
		)
	);

	$wp_customize->add_setting(
		'crockery_store_product_social_link2',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => 'https://twitter.com',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'crockery_store_product_social_link2',
		array(
			'label'       => __('Edit Twitter Link', 'crockery-store'),
			'section'     => 'crockery_store_our_products_section',
			'type'        => 'text',
		)
	);

	$wp_customize->add_setting(
		'crockery_store_product_social_link3',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => 'https://instagram.com',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'crockery_store_product_social_link3',
		array(
			'label'       => __('Edit Instagram Link', 'crockery-store'),
			'section'     => 'crockery_store_our_products_section',
			'type'        => 'text',
		)
	);

	//footer
	$wp_customize->add_section('crockery_store_footer_section',array(
		'title'	=> __('Footer Widget Settings','crockery-store'),
		'panel' => 'crockery_store_panel_id',
		'priority' => 4,
	));

	$wp_customize->add_setting('crockery_store_footer_columns',array(
		'default'	=> 4,
		'sanitize_callback'	=> 'crockery_store_sanitize_number_absint'
	));
	$wp_customize->add_control('crockery_store_footer_columns',array(
		'label'	=> __('Footer Widget Columns','crockery-store'),
		'section'	=> 'crockery_store_footer_section',
		'setting'	=> 'crockery_store_footer_columns',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 4,
		),
	));
	$wp_customize->add_setting( 'crockery_store_tp_footer_bg_color_option', array(
		'default' => '#151515',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'crockery_store_tp_footer_bg_color_option', array(
		'label'     => __('Footer Widget Background Color', 'crockery-store'),
		'description' => __('It will change the complete footer widget backgorund color.', 'crockery-store'),
		'section' => 'crockery_store_footer_section',
		'settings' => 'crockery_store_tp_footer_bg_color_option',
	)));

	$wp_customize->add_setting('crockery_store_footer_widget_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'crockery_store_footer_widget_image',array(
       'label' => __('Footer Widget Background Image','crockery-store'),
       'section' => 'crockery_store_footer_section'
	)));

	//footer widget title font size
	$wp_customize->add_setting('crockery_store_footer_widget_title_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'crockery_store_sanitize_number_absint'
	));
	$wp_customize->add_control('crockery_store_footer_widget_title_font_size',array(
		'label'	=> __('Change Footer Widget Title Font Size in PX','crockery-store'),
		'section'	=> 'crockery_store_footer_section',
	    'setting'	=> 'crockery_store_footer_widget_title_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));

	$wp_customize->add_setting( 'crockery_store_footer_widget_title_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'crockery_store_footer_widget_title_color', array(
			'label'     => __('Change Footer Widget Title Color', 'crockery-store'),
	    'section' => 'crockery_store_footer_section',
	    'settings' => 'crockery_store_footer_widget_title_color',
  	)));
  	
	$wp_customize->add_setting( 'crockery_store_return_to_header', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'crockery_store_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Crockery_Store_Toggle_Control( $wp_customize, 'crockery_store_return_to_header', array(
		'label'       => esc_html__( 'Show / Hide Return to header', 'crockery-store' ),
		'section'     => 'crockery_store_footer_section',
		'type'        => 'toggle',
		'settings'    => 'crockery_store_return_to_header',
	) ) );

	$wp_customize->add_setting('crockery_store_return_icon',array(
		'default'	=> 'fas fa-arrow-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Crockery_Store_Icon_Changer(
       $wp_customize,'crockery_store_return_icon',array(
		'label'	=> __('Return to header Icon','crockery-store'),
		'transport' => 'refresh',
		'section'	=> 'crockery_store_footer_section',
		'type'		=> 'icon'
	)));

	//footer
	$wp_customize->add_section('crockery_store_footer_copyright_section',array(
		'title'	=> __('Footer Copyright Settings','crockery-store'),
		'description'	=> __('Add copyright text.','crockery-store'),
		'panel' => 'crockery_store_panel_id',
		'priority' => 5,
	));

	$wp_customize->add_setting('crockery_store_footer_text',array(
		'default'	=> 'Crockery Store WordPress Theme',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('crockery_store_footer_text',array(
		'label'	=> __('Copyright Text','crockery-store'),
		'section'	=> 'crockery_store_footer_copyright_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('crockery_store_footer_copyright_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'crockery_store_sanitize_number_absint'
	));
	$wp_customize->add_control('crockery_store_footer_copyright_font_size',array(
		'label'	=> __('Change Footer Copyright Font Size in PX','crockery-store'),
		'section'	=> 'crockery_store_footer_copyright_section',
	    'setting'	=> 'crockery_store_footer_copyright_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));

	$wp_customize->add_setting( 'crockery_store_footer_copyright_text_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'crockery_store_footer_copyright_text_color', array(
			'label'     => __('Change Footer Copyright Text Color', 'crockery-store'),
	    'section' => 'crockery_store_footer_copyright_section',
	    'settings' => 'crockery_store_footer_copyright_text_color',
  	)));

  	$wp_customize->add_setting('crockery_store_footer_copyright_top_bottom_padding',array(
		'default'	=> '',
		'sanitize_callback'	=> 'crockery_store_sanitize_number_absint'
	));
	$wp_customize->add_control('crockery_store_footer_copyright_top_bottom_padding',array(
		'label'	=> __('Change Footer Copyright Padding in PX','crockery-store'),
		'section'	=> 'crockery_store_footer_copyright_section',
	    'setting'	=> 'crockery_store_footer_copyright_top_bottom_padding',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));

	// Add Settings and Controls for Scroll top
	$wp_customize->add_setting('crockery_store_copyright_text_position',array(
        'default' => 'Center',
        'sanitize_callback' => 'crockery_store_sanitize_choices'
	));
	$wp_customize->add_control('crockery_store_copyright_text_position',array(
        'type' => 'radio',
        'label'     => __('Copyright Text Position', 'crockery-store'),
        'description'   => __('This option work for Copyright', 'crockery-store'),
        'section' => 'crockery_store_footer_copyright_section',
        'choices' => array(
            'Right' => __('Right','crockery-store'),
            'Left' => __('Left','crockery-store'),
            'Center' => __('Center','crockery-store')
        ),
	) );

	//Mobile resposnsive
	$wp_customize->add_section('crockery_store_mobile_media_option',array(
		'title'         => __('Mobile Responsive media', 'crockery-store'),
		'description' => __('Control will not function if the toggle in the main settings is off.', 'crockery-store'),
		'priority' => 5,
		'panel' => 'crockery_store_panel_id'
	) );

	$wp_customize->add_setting( 'crockery_store_mobile_blog_description', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'crockery_store_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Crockery_Store_Toggle_Control( $wp_customize, 'crockery_store_mobile_blog_description', array(
		'label'       => esc_html__( 'Show / Hide Blog Page Description', 'crockery-store' ),
		'section'     => 'crockery_store_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'crockery_store_mobile_blog_description',
	) ) );

	$wp_customize->add_setting( 'crockery_store_return_to_header_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'crockery_store_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Crockery_Store_Toggle_Control( $wp_customize, 'crockery_store_return_to_header_mob', array(
		'label'       => esc_html__( 'Show / Hide Return to header', 'crockery-store' ),
		'section'     => 'crockery_store_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'crockery_store_return_to_header_mob',
	) ) );

	$wp_customize->add_setting( 'crockery_store_slider_buttom_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'crockery_store_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Crockery_Store_Toggle_Control( $wp_customize, 'crockery_store_slider_buttom_mob', array(
		'label'       => esc_html__( 'Show / Hide Slider Button', 'crockery-store' ),
		'section'     => 'crockery_store_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'crockery_store_slider_buttom_mob',
	) ) );

	$wp_customize->add_setting( 'crockery_store_related_post_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'crockery_store_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Crockery_Store_Toggle_Control( $wp_customize, 'crockery_store_related_post_mob', array(
		'label'       => esc_html__( 'Show / Hide Related Post', 'crockery-store' ),
		'section'     => 'crockery_store_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'crockery_store_related_post_mob',
	) ) );

    // Add Settings and Controls for Scroll top
	$wp_customize->add_setting('crockery_store_scroll_top_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'crockery_store_sanitize_choices'
	));
	$wp_customize->add_control('crockery_store_scroll_top_position',array(
        'type' => 'radio',
        'label'     => __('Scroll to top Position', 'crockery-store'),
        'description'   => __('This option work for scroll to top', 'crockery-store'),
        'section' => 'crockery_store_footer_section',
        'choices' => array(
            'Right' => __('Right','crockery-store'),
            'Left' => __('Left','crockery-store'),
            'Center' => __('Center','crockery-store')
        ),
	) );
	
	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';

	//site Title
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'Crockery_Store_Customize_partial_blogname',
	) );

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'Crockery_Store_Customize_partial_blogdescription',
	) );

	$wp_customize->add_setting( 'crockery_store_site_title', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'crockery_store_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Crockery_Store_Toggle_Control( $wp_customize, 'crockery_store_site_title', array(
		'label'       => esc_html__( 'Show / Hide Site Title', 'crockery-store' ),
		'section'     => 'title_tagline',
		'type'        => 'toggle',
		'settings'    => 'crockery_store_site_title',
	) ) );

	// logo site title size
	$wp_customize->add_setting('crockery_store_site_title_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'crockery_store_sanitize_number_absint'
	));
	$wp_customize->add_control('crockery_store_site_title_font_size',array(
		'label'	=> __('Site Title Font Size in PX','crockery-store'),
		'section'	=> 'title_tagline',
		'setting'	=> 'crockery_store_site_title_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
		    'step'             => 1,
			'min'              => 0,
			'max'              => 30,
			),
	));

	$wp_customize->add_setting( 'crockery_store_site_tagline_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'crockery_store_site_tagline_color', array(
			'label'     => __('Change Site Title Color', 'crockery-store'),
	    'section' => 'title_tagline',
	    'settings' => 'crockery_store_site_tagline_color',
  	)));

	$wp_customize->add_setting( 'crockery_store_site_tagline', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'crockery_store_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Crockery_Store_Toggle_Control( $wp_customize, 'crockery_store_site_tagline', array(
		'label'       => esc_html__( 'Show / Hide Site Tagline', 'crockery-store' ),
		'section'     => 'title_tagline',
		'type'        => 'toggle',
		'settings'    => 'crockery_store_site_tagline',
	) ) );

	// logo site tagline size
	$wp_customize->add_setting('crockery_store_site_tagline_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'crockery_store_sanitize_number_absint'
	));
	$wp_customize->add_control('crockery_store_site_tagline_font_size',array(
		'label'	=> __('Site Tagline Font Size in PX','crockery-store'),
		'section'	=> 'title_tagline',
		'setting'	=> 'crockery_store_site_tagline_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 30,
		),
	));

	$wp_customize->add_setting( 'crockery_store_logo_tagline_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'crockery_store_logo_tagline_color', array(
			'label'     => __('Change Site Tagline Color', 'crockery-store'),
	    'section' => 'title_tagline',
	    'settings' => 'crockery_store_logo_tagline_color',
  	)));

    $wp_customize->add_setting('crockery_store_logo_width',array(
	   'default' => 80,
	   'sanitize_callback'	=> 'crockery_store_sanitize_number_absint'
	));
	$wp_customize->add_control('crockery_store_logo_width',array(
		'label'	=> esc_html__('Here You Can Customize Your Logo Size','crockery-store'),
		'section'	=> 'title_tagline',
		'type'		=> 'number'
	));

	$wp_customize->add_setting('crockery_store_per_columns',array(
		'default'=> 3,
		'sanitize_callback'	=> 'crockery_store_sanitize_number_absint'
	));
	$wp_customize->add_control('crockery_store_per_columns',array(
		'label'	=> __('Product Per Row','crockery-store'),
		'section'=> 'woocommerce_product_catalog',
		'type'=> 'number'
	));

	$wp_customize->add_setting('crockery_store_product_per_page',array(
		'default'=> 9,
		'sanitize_callback'	=> 'crockery_store_sanitize_number_absint'
	));
	$wp_customize->add_control('crockery_store_product_per_page',array(
		'label'	=> __('Product Per Page','crockery-store'),
		'section'=> 'woocommerce_product_catalog',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'crockery_store_product_sidebar', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'crockery_store_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Crockery_Store_Toggle_Control( $wp_customize, 'crockery_store_product_sidebar', array(
		'label'       => esc_html__( 'Show / Hide Shop Page Sidebar', 'crockery-store' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'crockery_store_product_sidebar',
	) ) );
	$wp_customize->add_setting('crockery_store_sale_tag_position',array(
        'default' => 'right',
        'sanitize_callback' => 'crockery_store_sanitize_choices'
	));
	$wp_customize->add_control('crockery_store_sale_tag_position',array(
        'type' => 'radio',
        'label'     => __('Sale Badge Position', 'crockery-store'),
        'description'   => __('This option work for Archieve Products', 'crockery-store'),
        'section' => 'woocommerce_product_catalog',
        'choices' => array(
            'left' => __('Left','crockery-store'),
            'right' => __('Right','crockery-store'),
        ),
	) );
	$wp_customize->add_setting( 'crockery_store_single_product_sidebar', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'crockery_store_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Crockery_Store_Toggle_Control( $wp_customize, 'crockery_store_single_product_sidebar', array(
		'label'       => esc_html__( 'Show / Hide Product Page Sidebar', 'crockery-store' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'crockery_store_single_product_sidebar',
	) ) );

	$wp_customize->add_setting( 'crockery_store_related_product', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'crockery_store_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Crockery_Store_Toggle_Control( $wp_customize, 'crockery_store_related_product', array(
		'label'       => esc_html__( 'Show / Hide related product', 'crockery-store' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'crockery_store_related_product',
	) ) );

	
	//Page template settings
	$wp_customize->add_panel( 'crockery_store_page_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Page Template Settings', 'crockery-store' ),
	    'description' => __( 'Description of what this panel does.', 'crockery-store' ),
	) );

	// 404 PAGE
	$wp_customize->add_section('crockery_store_404_page_section',array(
		'title'         => __('404 Page', 'crockery-store'),
		'description'   => 'Here you can customize 404 Page content.',
		'panel' => 'crockery_store_page_panel_id'
	) );

	$wp_customize->add_setting('crockery_store_edit_404_title',array(
		'default'=> __('Oops! That page cant be found.','crockery-store'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('crockery_store_edit_404_title',array(
		'label'	=> __('Edit Title','crockery-store'),
		'section'=> 'crockery_store_404_page_section',
		'type'=> 'text',
	));

	$wp_customize->add_setting('crockery_store_edit_404_text',array(
		'default'=> __('It looks like nothing was found at this location. Maybe try a search?','crockery-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('crockery_store_edit_404_text',array(
		'label'	=> __('Edit Text','crockery-store'),
		'section'=> 'crockery_store_404_page_section',
		'type'=> 'text'
	));

	// Search Results
	$wp_customize->add_section('crockery_store_no_result_section',array(
		'title'         => __('Search Results', 'crockery-store'),
		'description'   => 'Here you can customize Search Result content.',
		'panel' => 'crockery_store_page_panel_id'
	) );

	$wp_customize->add_setting('crockery_store_edit_no_result_title',array(
		'default'=> __('Nothing Found','crockery-store'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('crockery_store_edit_no_result_title',array(
		'label'	=> __('Edit Title','crockery-store'),
		'section'=> 'crockery_store_no_result_section',
		'type'=> 'text',
	));

	$wp_customize->add_setting('crockery_store_edit_no_result_text',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','crockery-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('crockery_store_edit_no_result_text',array(
		'label'	=> __('Edit Text','crockery-store'),
		'section'=> 'crockery_store_no_result_section',
		'type'=> 'text'
	));

	 // Header Image Height
    $wp_customize->add_setting(
        'crockery_store_header_image_height',
        array(
            'default'           => 350,
            'sanitize_callback' => 'absint',
        )
    );
    $wp_customize->add_control(
        'crockery_store_header_image_height',
        array(
            'label'       => esc_html__( 'Header Image Height', 'crockery-store' ),
            'section'     => 'header_image',
            'type'        => 'number',
            'description' => esc_html__( 'Control the height of the header image. Default is 350px.', 'crockery-store' ),
            'input_attrs' => array(
                'min'  => 220,
                'max'  => 1000,
                'step' => 1,
            ),
        )
    );

    // Header Background Position
    $wp_customize->add_setting(
        'crockery_store_header_background_position',
        array(
            'default'           => 'center',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        'crockery_store_header_background_position',
        array(
            'label'       => esc_html__( 'Header Background Position', 'crockery-store' ),
            'section'     => 'header_image',
            'type'        => 'select',
            'choices'     => array(
                'top'    => esc_html__( 'Top', 'crockery-store' ),
                'center' => esc_html__( 'Center', 'crockery-store' ),
                'bottom' => esc_html__( 'Bottom', 'crockery-store' ),
            ),
            'description' => esc_html__( 'Choose how you want to position the header image.', 'crockery-store' ),
        )
    );

    // Header Image Parallax Effect
    $wp_customize->add_setting(
        'crockery_store_header_background_attachment',
        array(
            'default'           => 1,
            'sanitize_callback' => 'absint',
        )
    );
    $wp_customize->add_control(
        'crockery_store_header_background_attachment',
        array(
            'label'       => esc_html__( 'Header Image Parallax', 'crockery-store' ),
            'section'     => 'header_image',
            'type'        => 'checkbox',
            'description' => esc_html__( 'Add a parallax effect on page scroll.', 'crockery-store' ),
        )
    );

    //Opacity
	$wp_customize->add_setting('crockery_store_header_banner_opacity_color',array(
       'default'              => '0.8',
       'sanitize_callback' => 'crockery_store_sanitize_choices'
	));
    $wp_customize->add_control( 'crockery_store_header_banner_opacity_color', array(
		'label'       => esc_html__( 'Header Image Opacity','crockery-store' ),
		'section'     => 'header_image',
		'type'        => 'select',
		'settings'    => 'crockery_store_header_banner_opacity_color',
		'choices' => array(
           '0' =>  esc_attr(__('0','crockery-store')),
           '0.1' =>  esc_attr(__('0.1','crockery-store')),
           '0.2' =>  esc_attr(__('0.2','crockery-store')),
           '0.3' =>  esc_attr(__('0.3','crockery-store')),
           '0.4' =>  esc_attr(__('0.4','crockery-store')),
           '0.5' =>  esc_attr(__('0.5','crockery-store')),
           '0.6' =>  esc_attr(__('0.6','crockery-store')),
           '0.7' =>  esc_attr(__('0.7','crockery-store')),
           '0.8' =>  esc_attr(__('0.8','crockery-store')),
           '0.9' =>  esc_attr(__('0.9','crockery-store'))
		), 
	) );

   $wp_customize->add_setting( 'crockery_store_header_banner_image_overlay', array(
	    'default'   => true,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'crockery_store_sanitize_checkbox',
	));
	$wp_customize->add_control( new Crockery_Store_Toggle_Control( $wp_customize, 'crockery_store_header_banner_image_overlay', array(
	    'label'   => esc_html__( 'Show / Hide Header Image Overlay', 'crockery-store' ),
	    'section' => 'header_image',
	)));

    $wp_customize->add_setting('crockery_store_header_banner_image_ooverlay_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'crockery_store_header_banner_image_ooverlay_color', array(
		'label'    => __('Header Image Overlay Color', 'crockery-store'),
		'section'  => 'header_image',
	)));

    $wp_customize->add_setting(
        'crockery_store_header_image_title_font_size',
        array(
            'default'           => 40,
            'sanitize_callback' => 'absint',
        )
    );
    $wp_customize->add_control(
        'crockery_store_header_image_title_font_size',
        array(
            'label'       => esc_html__( 'Change Header Image Title Font Size', 'crockery-store' ),
            'section'     => 'header_image',
            'type'        => 'number',
            'description' => esc_html__( 'Control the font Size of the header image title. Default is 40px.', 'crockery-store' ),
            'input_attrs' => array(
                'min'  => 10,
                'max'  => 200,
                'step' => 1,
            ),
        )
    );

	$wp_customize->add_setting( 'crockery_store_header_image_title_text_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'crockery_store_header_image_title_text_color', array(
			'label'     => __('Change Header Image Title Color', 'crockery-store'),
	    'section' => 'header_image',
	    'settings' => 'crockery_store_header_image_title_text_color',
  	)));

}
add_action( 'customize_register', 'Crockery_Store_Customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Crockery Store 1.0
 * @see Crockery_Store_Customize_register()
 *
 * @return void
 */
function Crockery_Store_Customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Crockery Store 1.0
 * @see Crockery_Store_Customize_register()
 *
 * @return void
 */
function Crockery_Store_Customize_partial_blogdescription() {
	bloginfo( 'description' );
}

if ( ! defined( 'CROCKERY_STORE_PRO_THEME_NAME' ) ) {
	define( 'CROCKERY_STORE_PRO_THEME_NAME', esc_html__( 'Crockery Store Pro', 'crockery-store'));
}
if ( ! defined( 'CROCKERY_STORE_PRO_THEME_URL' ) ) {
	define( 'CROCKERY_STORE_PRO_THEME_URL', esc_url('https://www.themespride.com/products/crockery-store-wordpress-theme', 'crockery-store'));
}
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Crockery_Store_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Crockery_Store_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Crockery_Store_Customize_Section_Pro(
				$manager,
				'crockery_store_section_pro',
				array(
					'priority'   => 9,
					'title'    => CROCKERY_STORE_PRO_THEME_NAME,
					'pro_text' => esc_html__( 'Upgrade Pro', 'crockery-store' ),
					'pro_url'  => esc_url( CROCKERY_STORE_PRO_THEME_URL, 'crockery-store' ),
				)
			)
		);

	}
	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'crockery-store-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'crockery-store-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Crockery_Store_Customize::get_instance();