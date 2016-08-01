<?php

function bicm_admin_init()
{
    add_action('admin_enqueue_scripts', 'bicm_admin_enqueue');
    add_action('admin_post_bicm_save_options', 'bicm_save_options');
}
