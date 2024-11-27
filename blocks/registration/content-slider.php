<?php

/**
 * The following registers custom ACF Block: Content Slider.
 *
 * @link https://www.advancedcustomfields.com/resources/acf_register_block_type/
 *
 * @package dpiChild
 */

acf_register_block(array(
    'name'            => 'content-slider',
    'title'           => __('Content Slider', 'dpiChild'),
    'description'     => __('Custom Content Slider Blocks.', 'dpiChild'),
    'render_callback' => 'acf_block_render_callback',
    'category'        => 'layout',
    'icon'            => 'screenoptions',
    'keywords'        => array('content-slider', 'list'),
));

wp_enqueue_script("content-slider-scripts", get_template_directory_uri() . "/blocks/assets/js/content-slider.js", array("jquery"), $hash, false);