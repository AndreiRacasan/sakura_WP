<?php

// Adds dynamic title tag support
function sakuraUI_theme_support()
{
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'sakuraUI_theme_support');

function sakuraUI_menus()
{
  $locations = array(
    'primary' => 'Desktop Primary Left SideBar',
    'footer' => 'Footer Menu Items'
  );
  register_nav_menus($locations);
}

add_action('init', 'sakuraUI_menus');

function sakuraUI_register_styles()
{
  $version = wp_get_theme()->get('Version');

  wp_enqueue_style('sakuraUI-style', get_template_directory_uri() . '/style.css', array('sakuraUI-bootstrap'), $version, 'all');

  wp_enqueue_style('sakuraUI-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'sakuraUI_register_styles');


function sakuraUI_register_scripts()
{
  wp_enqueue_script('sakuraUI-jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array(), '3.2.1', true);

  wp_enqueue_script('sakuraUI-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), '1.12.9', true);

  wp_enqueue_script('sakuraUI-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl', array(), '4.0.0', true);

  wp_enqueue_script('sakuraUI-ownJS', get_template_directory_uri() . '/assets/javascript/main.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'sakuraUI_register_scripts');
