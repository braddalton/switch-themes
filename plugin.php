<?php
/**
 * Plugin Name: Switch Themes
 * Plugin URI:  http://wpsites.net/
 * Description: Changes the theme based on the theme folder name you use in the code.
 * Version:     1.0
 * Author:      Brad Dalton
 * Author URI:  http://wpsites.net/
 */
add_filter( 'stylesheet', 'wpsites_change_themes' );
add_filter( 'template',   'wpsites_change_themes' );
function wpsites_change_themes( $theme ) {
    if ( ! is_user_logged_in() ) 
        $theme = 'twentyfourteen';
    return $theme;
}
