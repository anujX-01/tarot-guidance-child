<?php

function tarot_guidance_enqueue_assets() { 



    // wp_enqueue_style(
    //     'main-css',
    //     get_stylesheet_directory_uri() . '/assets/css/main.css',
    //     array(),
    //     '1.0'
    // );

    /* Load Home CSS only on Home Page */

if ( is_front_page() ) {

    wp_enqueue_style(

        'home-css',

        get_stylesheet_directory_uri() . '/assets/css/home.css',

        array(),

        '1.0'

    );

}

if ( is_page( 'about' ) ) {

    wp_enqueue_style(

        'about-css',

        get_stylesheet_directory_uri() . '/assets/css/about.css',

        array(),

        '1.0'

    );

} 

if ( is_page( 'testimonial' ) ) {

    wp_enqueue_style(

        'testimonial-css',

        get_stylesheet_directory_uri() . '/assets/css/testimonial.css',

        array(),

        '1.0'

    );

} 

if ( is_page( 'tarot-card' ) ) {

    wp_enqueue_style(

        'tarot-card-css',

        get_stylesheet_directory_uri() . '/assets/css/TarotCard.css',

        array(),

        '1.0'

    );

}

wp_enqueue_style(

    'footer-css',

    get_stylesheet_directory_uri() . '/assets/css/footer.css',

    array(),

    '1.0'

); 

if ( is_page( 'booking' ) ) {

    wp_enqueue_style(

        'booking-css',

        get_stylesheet_directory_uri() . '/assets/css/booking.css',

        array(),

        '1.0'

    );

} 

wp_enqueue_style(

    'header-css',

    get_stylesheet_directory_uri() . '/assets/css/header.css',

    array(),

    '1.0'

); 

if ( is_page( 'service' ) ) {

    wp_enqueue_style(

        'services-css',

        get_stylesheet_directory_uri() . '/assets/css/service.css',

        array(),

        '1.0'

    );

} 

if ( is_page( 'tarot-card-detail' ) ) {

    wp_enqueue_style(

        'tarot-detail-css',

        get_stylesheet_directory_uri() . '/assets/css/CardDetail.css',

        array(),

        '1.0'

    );

} 


    wp_enqueue_style(
    'font-awesome',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css',
    array(),
    '6.7.2'
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

    if ( is_page('testimonial') ) {

        wp_enqueue_script(
            'testimonial-js',
            get_stylesheet_directory_uri() . '/assets/js/testimonial.js',
            array(),
            '1.0',
            true
        );

    } 

     if ( is_page('tarot-card') ) {

        wp_enqueue_script(
            'tarot-js',
            get_stylesheet_directory_uri() . '/assets/js/tarot.js',
            array(),
            '1.0',
            true
        );

    } 

    if ( is_page('tarot-card-detail') ) {

    wp_enqueue_script(
        'card-detail-js',
        get_stylesheet_directory_uri() . '/assets/js/cardDetail.js',
        array(),
        '1.0',
        true
    );

} 

    wp_enqueue_script(
    'header-js',
    get_stylesheet_directory_uri() . '/assets/js/header.js',
    array(),
    '1.0',
    true
);

if ( is_page('booking') ) {

    wp_enqueue_script(

        'booking-js',

        get_stylesheet_directory_uri() . '/assets/js/booking.js',

        array(),

        '1.0',

        true

    );

} 




} 

 

add_action( 'wp_enqueue_scripts', 'tarot_guidance_enqueue_assets' );