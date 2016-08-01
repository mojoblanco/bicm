<?php

// Set Up
add_theme_support('menu');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

// Includes
include(get_template_directory() . '/includes/front/enqueue.php');
include(get_template_directory() . '/includes/setup.php');
include(get_template_directory() . '/includes/widgets.php');
include(get_template_directory() . '/includes/activate.php');
include(get_template_directory() . '/includes/admin/menus.php');
include(get_template_directory() . '/includes/admin/options-page.php');
include(get_template_directory() . '/includes/admin/init.php');
include(get_template_directory() . '/includes/admin/enqueue.php');
include(get_template_directory() . '/process/save-options.php');

// Action and Filters Hooks
add_action('wp_enqueue_scripts', 'bicm_enqueue');
add_action('after_setup_theme', 'bicm_setup_theme');
add_action('widgets_init', 'bicm_widgets');
add_action('after_switch_theme', 'bicm_activate');
add_action('admin_menu', 'bicm_admin_menus');
add_action('admin_init', 'bicm_admin_init');

// Shortcodes
