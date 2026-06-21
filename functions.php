<?php

function tarot_guidance_enqueue_assets() {

    wp_enqueue_style(
        'main-css',
        get_stylesheet_directory_uri() . '/assets/css/main.css',
        array(),
        '1.0'
    );

    if ( is_front_page() ) {

        wp_enqueue_script(
            'home-js',
            get_stylesheet_directory_uri() . '/assets/js/home.js',
            array(),
            '1.0',
            true
        );

    }

    if ( is_page('about') ) {

        wp_enqueue_script(
            'about-js',
            get_stylesheet_directory_uri() . '/assets/js/about.js',
            array(),
            '1.0',
            true
        );

    }

    if ( is_page('services') ) {

        wp_enqueue_script(
            'services-js',
            get_stylesheet_directory_uri() . '/assets/js/services.js',
            array(),
            '1.0',
            true
        );

    }

} 

if ( is_page('testimonial') ) {

        wp_enqueue_script(
            'testimonal-js',
            get_stylesheet_directory_uri() . '/assets/js/testimonial.js',
            array(),
            '1.0',
            true
        );

    } 

add_action( 'wp_enqueue_scripts', 'tarot_guidance_enqueue_assets' );