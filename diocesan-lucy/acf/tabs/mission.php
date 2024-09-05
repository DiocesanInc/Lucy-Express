<?php

function acf_mission()
{
    return  array(
        array(
            'key' => 'field_6182f5c8311cc',
            'label' => 'Mission',
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'placement' => 'top',
            'endpoint' => 0,
        ),
        array(
            'key' => 'field_6182f5e7311cd',
            'label' => 'Mission Header',
            'name' => 'mission_header',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '50',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array(
            'key' => 'field_623a1c6e4f924',
            'label' => 'Overlay Color',
            'name' => 'mission_overlay_color',
            'type' => 'select',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '25',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'overlay-primary' => 'Primary',
                'overlay-secondary' => 'Secondary',
                'overlay-tertiary' => 'Tertiary',
                'overlay-quaternary' => 'Quaternary',
                'overlay-black' => 'Black',
            ),
            'default_value' => false,
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 1,
            'ajax' => 0,
            'return_format' => 'value',
            'placeholder' => '',
        ),
        array(
            'key' => 'field_623a1c6e4f924a',
            'label' => 'Overlay Opacity',
            'name' => 'mission_overlay_opacity',
            'type' => 'select',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '25',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'overlay-very-light' => 'Very Light',
                'overlay-light' => 'Light',
                'overlay-medium' => 'Medium',
                'overlay-dark' => 'Dark',
                'overlay-very-dark' => 'Very Dark',
            ),
            'default_value' => false,
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 1,
            'ajax' => 0,
            'return_format' => 'value',
            'placeholder' => '',
        ),
        array(
            'key' => 'field_6182f608311ce',
            'label' => 'Mission Content',
            'name' => 'mission_content',
            'type' => 'wysiwyg',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '50',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'tabs' => 'all',
            'toolbar' => 'full',
            'media_upload' => 1,
            'delay' => 0,
        ),
        array(
            'key' => 'field_623a114b91882',
            'label' => 'Background Image',
            'name' => 'mission_background_image',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '50',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'array',
            'preview_size' => 'medium',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
        )
    );
}