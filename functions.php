<?php
    // Displaying only errors
    define( 'WP_DEBUG_DISPLAY', false );
    define( 'WP_DEBUG', false );
    @ini_set( 'display_errors', 1);
    // Print formatted variables
    function print_pre($content) {
        echo '<pre>';
        print_r($content);
        echo '</pre>';
    }
?>