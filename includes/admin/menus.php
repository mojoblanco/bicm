<?php

function bicm_admin_menus()
{
    add_menu_page(
        'BICM Theme Options',
        'Theme Options',
        'edit_theme_options',
        'bicm_theme_opts',
        'bicm_theme_opts_page'
    );
}
