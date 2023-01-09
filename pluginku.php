<?php
/**
 * Plugin Name: Ukyy Plugins
 * Plugin URI: https://www.tiktok.com/@ukyy___?_t=8Ys6UUHKEyI&_r=1
 * Description: Ini Adalah Plugin ku
 * Author: UkyyPutra
 * Author URI: https://www.tiktok.com/@ukyy___?_t=8Ys6UUHKEyI&_r=1
 * License: GPLv2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

add_shortcode( 'shortcode_test', 'shortcode_handler_function' );
function shortcode_handler_function(){
    return "Hello World";
}