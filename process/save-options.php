<?php

function bicm_save_options()
{
    if (!current_user_can('edit_theme_options')) {
        wp_die(__('You are not allowed on this page.'));
    }

    check_admin_referer('bicm_options_verify');

    $opts               =   get_option('bicm_opts');
    $opts['facebook']   =   sanitize_text_field($_POST['bicm_inputFacebook']);
    $opts['twitter']   =   sanitize_text_field($_POST['bicm_inputTwitter']);
    $opts['youtube']   =   sanitize_text_field($_POST['bicm_inputYoutube']);
    $opts['logo_type']   =   absint($_POST['bicm_inputLogoType']);
    $opts['footer']   =   $_POST['bicm_inputFooter'];

    update_option('bicm_opts', $opts);

    wp_redirect(admin_url('admin.php?page=bicm_theme_opts&status=1'));
}
