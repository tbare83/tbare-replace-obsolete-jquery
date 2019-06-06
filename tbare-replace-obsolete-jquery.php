<?php
/**
 * Plugin Name: Replace Obsolete jQuery
 * Plugin URI: https://www.tbare.com
 * Description: Repelace obsolete version of jQuery with 3.4.1, ensure jQuery-Migrate 1.4.1 is installed
 * Version: 1.0
 * Text Domain: tbare-replace-obsolete-jquery
 * Author: Tim Bare
 * Author URI: https://www.tbare.com
 */


function tbare_enqueued_jquery() {
    wp_deregister_script( 'jquery' );
	wp_deregister_script( 'jquery-migrate' );
	wp_enqueue_script( 'jquery', plugins_url( 'tbare-replace-obsolete-jquery/vendor/jquery/jquery-3.4.1.min.js' , dirname(__FILE__) ), array(), '3.4.1' );
	wp_enqueue_script( 'jquery-migrate', plugins_url( 'tbare-replace-obsolete-jquery/vendor/jquery-migrate/jquery-migrate-1.4.1.min.js' , dirname(__FILE__) ), array(), '1.4.1' );	
}
add_action( 'wp_enqueue_scripts', 'tbare_enqueued_jquery' );