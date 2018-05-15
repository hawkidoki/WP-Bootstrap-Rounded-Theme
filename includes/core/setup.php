<?php
/**
 * Theme Setup
 */
add_action('after_setup_theme', 'mpt_theme_setup');
function mpt_theme_setup(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    
    add_theme_support('html5', array(
        'comment-list', 
        'comment-form', 
        'search-form', 
        'gallery', 
        'caption'
    ));
    
    add_theme_support('custom-logo', array(
		'width'           	=> 139,
		'height'          	=> 86,
        'flex-width'    	=> false,
        'flex-height'    	=> false,
		'header-text'     	=> false
	));

    add_image_size('50x50',     50, 50, true);
    add_image_size('195x145',   195, 145, true);
    add_image_size('420x180',   420, 180, true);
    add_image_size('640x310',   640, 310, true);
    add_image_size('1310x310',  1310, 310, true);
    add_image_size('1900x310',  1900, 310, true);
}