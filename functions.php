<?php

function sakuraUI_register_styles()
{
  $version = wp_get_theme()->get('Version');

  wp_enqueue_style('sakuraUI-style', get_template_directory_uri() . '/style.css', array('sakuraUI-bootstrap'), $version, 'all');

  wp_enqueue_style('sakuraUI-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'sakuraUI_register_styles');
