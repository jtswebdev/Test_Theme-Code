<?php

	/*function insert_jquery(){
		wp_enqueue_script('jquery', false, array(), false, false);
	}
	add_filter('wp_enqueue_scripts','insert_jquery',1);*/

    function testtheme_customize_register( $wp_customize ) {

	/* --- Header Background Image --- */

    	// Add Settings
    	$wp_customize->add_setting('customizer_header_bg_image_setting', array(
        	'transport'         => 'refresh',
        	'height'         => 325,
    	));

    	// Add Section
    	$wp_customize->add_section('headerimages', array(
        	'title'             => __('Header Background Image', 'name-theme'), 
        	'priority'          => 70,
    	));    

    	// Add Controls
    	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'customizer_header_bg_image_setting_control', array(
        	'label'             => __('Header Background Image', 'name-theme'),
        	'section'           => 'headerimages',
        	'settings'          => 'customizer_header_bg_image_setting',    
    	)));
    
	/* ------------ */

	/* --- Header Logo --- */

    	// Add Settings
    	$wp_customize->add_setting('customizer_header_logo_setting', array(
        	'transport'         => 'refresh',
        	'height'         => 325,
    	));

    	// Add Section
    	$wp_customize->add_section('headerlogo', array(
        	'title'             => __('Header Logo', 'name-theme'), 
        	'priority'          => 70,
    	));    

    	// Add Controls
    	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'customizer_header_logo_setting_control', array(
        	'label'             => __('Header Logo', 'name-theme'),
        	'section'           => 'headerlogo',
        	'settings'          => 'customizer_header_logo_setting',    
    	)));
    
	/* ------------ */

	/* --- Bar Logos --- */

    	// Add Settings
    	$wp_customize->add_setting('customizer_bar_logo_1_setting', array(
        	'transport'         => 'refresh',
        	'height'         => 325,
    	));

		$wp_customize->add_setting('customizer_bar_logo_2_setting', array(
        	'transport'         => 'refresh',
        	'height'         => 325,
    	));

		$wp_customize->add_setting('customizer_bar_logo_3_setting', array(
        	'transport'         => 'refresh',
        	'height'         => 325,
    	));

    	// Add Sections
    	$wp_customize->add_section('barlogos', array(
        	'title'             => __('Bar Logos', 'name-theme'), 
        	'priority'          => 70,
    	));

    	// Add Controls
    	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'customizer_bar_logo_1_setting_control', array(
        	'label'             => __('Bar Logo 1', 'name-theme'),
        	'section'           => 'barlogos',
        	'settings'          => 'customizer_bar_logo_1_setting',

    	)));

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'customizer_bar_logo_2_setting_control', array(
        	'label'             => __('Bar Logo 2', 'name-theme'),
        	'section'           => 'barlogos',
        	'settings'          => 'customizer_bar_logo_2_setting',

    	)));

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'customizer_bar_logo_3_setting_control', array(
        	'label'             => __('Bar Logo 3', 'name-theme'),
        	'section'           => 'barlogos',
        	'settings'          => 'customizer_bar_logo_3_setting',

    	)));
    
	/* ------------ */

	/* --- Section 1 Images --- */

    	// Add Settings
    	$wp_customize->add_setting('customizer_section_1_image_1_setting', array(
        	'transport'         => 'refresh',
        	'height'         => 325,
    	));

		$wp_customize->add_setting('customizer_section_1_image_2_setting', array(
        	'transport'         => 'refresh',
        	'height'         => 325,
    	));

		$wp_customize->add_setting('customizer_section_1_image_3_setting', array(
        	'transport'         => 'refresh',
        	'height'         => 325,
    	));

    	// Add Sections
    	$wp_customize->add_section('section1images', array(
        	'title'             => __('Section 1 Images', 'name-theme'), 
        	'priority'          => 70,
    	));

    	// Add Controls
    	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'customizer_section_1_image_1_setting_control', array(
        	'label'             => __('Image 1', 'name-theme'),
        	'section'           => 'section1images',
        	'settings'          => 'customizer_section_1_image_1_setting',

    	)));

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'customizer_section_1_image_2_setting_control', array(
        	'label'             => __('Image 2', 'name-theme'),
        	'section'           => 'section1images',
        	'settings'          => 'customizer_section_1_image_2_setting',

    	)));

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'customizer_section_1_image_3_setting_control', array(
        	'label'             => __('Image 3', 'name-theme'),
        	'section'           => 'section1images',
        	'settings'          => 'customizer_section_1_image_3_setting',

    	)));
    
	/* ------------ */

	/* --- Section 2 Image --- */

    	// Add Settings
    	$wp_customize->add_setting('customizer_section_2_image_setting', array(
        	'transport'         => 'refresh',
        	'height'         => 325,
    	));

    	// Add Section
    	$wp_customize->add_section('section2image', array(
        	'title'             => __('Section 2 Image', 'name-theme'), 
        	'priority'          => 70,
    	));    

    	// Add Controls
    	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'customizer_section_2_image_setting_control', array(
        	'label'             => __('Section 2 Image', 'name-theme'),
        	'section'           => 'section2image',
        	'settings'          => 'customizer_section_2_image_setting',    
    	)));
    
	/* ------------ */

}
add_action('customize_register', 'testtheme_customize_register');


function register_widget_areas() {
	register_sidebar( array(
		'name'          => 'Slider Widget Area',
		'id'            => 'slider_widget_area',
		'description'   => 'Add widgets here.',
		'before_widget' => '', 
		'after_widget'  => '', 
		'before_title'  => '<h2 class="widget-title">', 
		'after_title'   => '</h2>' )); 
} 
add_action( 'widgets_init', 'register_widget_areas' );
