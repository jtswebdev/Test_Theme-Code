<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />

    </head>
    <body>
            <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

            <header class="header">

                <!--<img id="banner_img" src="<?php echo get_theme_file_uri( 'img/cropped_banner.jpg' ); ?>" alt="" />-->
				<img id="banner_img" src="<?php echo esc_url( get_theme_mod( 'customizer_header_bg_image_setting', get_theme_file_uri().'/img/cropped_banner.jpg' ) ); ?>" alt="" />
                <img id="banner_overlay" src="<?php echo get_theme_file_uri( 'img/banner_overlay_cropped.png' ); ?>" alt="" />

                <div class="header_items">
                    <img id="main_logo" src="<?php echo esc_url( get_theme_mod( 'customizer_header_logo_setting', get_theme_file_uri().'/img/codersclan_logo.png' ) ); ?>" alt="" />
                    <h3 id="main_header"><?php echo get_post_meta($post->ID, 'main_header', true); ?></h3>
                    <h5 id="main_subheader"><?php echo get_post_meta($post->ID, 'main_subheader', true); ?></h5>
                    <button id="start_now_button"><?php echo get_post_meta($post->ID, 'header_button_text', true); ?></button>
                </div>

            </header>