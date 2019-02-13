<?php

  if (!function_exists('import_style'))
  {
    function import_style()
    {
      wp_enqueue_style('boolean', get_template_directory_uri() . '/style.css');
    }

    add_action('wp_enqueue_scripts', 'import_style');
  }

  if (!function_exists('boolean_setup'))
  {
    function boolean_setup()
    {
      register_nav_menus(array('header' => 'header'));
    }

    add_action('after_setup_theme', 'boolean_setup');


  }

 ?>
