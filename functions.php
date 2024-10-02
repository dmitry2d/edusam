<?php
    // Displaying only errors
    define( 'WP_DEBUG_DISPLAY', false );
    define( 'WP_DEBUG', false );
    @ini_set( 'display_errors', 1);
    // define('WP_HOME','https://едусам.рф');
    // define('WP_SITEURL','https://едусам.рф');
    
    update_option( 'siteurl','https://едусам.рф' );
    update_option( 'home', 'https://едусам.рф' );
    // Print formatted variables
    function print_pre($content) {
        echo '<pre>';
        print_r($content);
        echo '</pre>';
    }
?>