<?php

function bicm_widgets()
{
    register_sidebar(
        [
            'name' => __('Default Sidebar', 'bicm'),
            'id' => 'bicm_default',
            'description' => __('Theme\'s default sidebar', 'bicm'),
            'class' => '',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        ]
    );

    register_sidebar(
        [
            'name' => __('Footer Sidebar', 'bicm'),
            'id' => 'bicm_footer',
            'description' => __('Theme\'s footer sidebar', 'bicm'),
            'class' => '',
            'before_widget' => '<div id="%1$s" class="col-md-4 col-xs-12 Card-holder bg-gradient %2$s">',
            'after_widget' => '</p></div>',
            'before_title' => '<p class="Card-Title">',
            'after_title' => '</p><p>',
        ]
    );
}
