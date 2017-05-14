<?php
/**
 * D4TW register theme styles
 *
 * @package understrap
 */

// Add the theme styles

function d4tw_enqueue_styles () {
    wp_enqueue_style( 'Open Sans', 'https://fonts.googleapis.com/css?family=Open+Sans' );
    wp_enqueue_style( 'Roboto', 'https://fonts.googleapis.com/css?family=Roboto:300' );
    wp_enqueue_style( 'Roboto-Condensed', 'https://fonts.googleapis.com/css?family=Roboto+Condensed' );
}

add_action('wp_enqueue_scripts', 'd4tw_enqueue_styles');