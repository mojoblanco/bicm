<?php

function bicm_admin_enqueue()
{
    if (!isset($_GET['page']) || $_GET['page'] != "bicm_theme_opts") {
        return;
    }

    wp_register_style('bicm_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

    wp_enqueue_style('bicm_bootstrap');

    wp_register_script('bicm_options', get_template_directory_uri() . '/assets/js/options.js', [], false, true);

    wp_enqueue_script('bicm_options');
}
