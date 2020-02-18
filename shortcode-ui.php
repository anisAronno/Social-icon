<?php

function eduhub_google_map_ui() {
    $fields = array(
        array(
            'label'=>__('Place','eduhub'),
            'attr'=>'place',
            'type'=>'text',
            'meta'=>array(
                'placeholder'=>__('Place','eduhub')
            )
        ),array(
            'label'=>__('Width','eduhub'),
            'attr'=>'width',
            'type'=>'text',
        ),array(
            'label'=>__('Height','eduhub'),
            'attr'=>'height',
            'type'=>'text',
        ),array(
            'label'=>__('Zoom','eduhub'),
            'attr'=>'zoom',
            'type'=>'text',
        )
    );

    $settings = array(
        'label'=>__('Google Map','eduhub'),
        'listItemImage'=>'dashicons-admin-site',
        'post_type'=>array('post','page'),
        'attrs'=>$fields
    );

    shortcode_ui_register_for_shortcode('gmap',$settings);
}

add_action( 'register_shortcode_ui', 'eduhub_google_map_ui' );