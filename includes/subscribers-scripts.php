<?php
  // Include scripts
  function subscribers_add_scripts(){
    // Include stylesheet
    wp_enqueue_style('subscribers-main-style', plugins_url(). '/subscribers/css/style.css');

    // Include JavaScript
    wp_enqueue_script('subscribers-main-script', plugins_url(). '/subscribers/js/main.js');

     // Include Google script
     wp_register_script('google', 'https://apis.google.com/js/platform.js');
     wp_enqueue_script('google');
  }

  add_action('wp_enqueue_scripts', 'subscribers_add_scripts');
