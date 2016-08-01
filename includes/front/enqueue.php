<?php

function bicm_enqueue()
{
    wp_register_style('bicm_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_register_style('bicm_style', get_template_directory_uri() . '/assets/css/style.css');
    wp_register_style('bicm_fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
    wp_register_style('bicm_lato', 'http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic');

    wp_enqueue_style('bicm_bootstrap');
    wp_enqueue_style('bicm_style');
    wp_enqueue_style('bicm_fa');
    wp_enqueue_style('bicm_lato');

    wp_register_script('bicm_bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', [], false, true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('bicm_bootstrapjs');
}
