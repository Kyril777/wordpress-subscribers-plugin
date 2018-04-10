<?php
/*
Plugin Name: Subscribers
Plugin URI: localhost/subscribersplugin
Description: Displays subscriber button and count
Version: 1.0.0
Author: Kyril J.
Author URI: http://iKyril.com


*/

// Exit when directly accessed.
if(!defined('ABSPATH')){
  exit;
}

// Load the JavaScript.
require_once(plugin_dir_path(__FILE__).'/includes/subscribers-scripts.php');

// Load Class.
require_once(plugin_dir_path(__FILE__).'/includes/subscribers-class.php');

// Register widget_title
function register_subscribers(){
  register_widget('Subscribers_Widget');
}

// Function hook
add_action('widgets_init', 'register_subscribers');
