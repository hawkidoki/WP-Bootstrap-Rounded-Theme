<?php
/**
 * Thumbnail URL
 */
function wmpt_the_post_thumbnail_url($size = '420x180'){
    if($url = mpt_get_the_post_thumbnail_url(null, $size))
        echo esc_url($url);
}

/**
 * Get Thumbnail URL
 */
function mpt_get_the_post_thumbnail_url($post = null, $size = '420x180'){
    if(!$post_thumbnail_id = get_post_thumbnail_id($post))
        return MPT_THEME_URL . '/assets/img/placeholders/placeholder-' . $size . '.jpg';
    
    return wp_get_attachment_image_url($post_thumbnail_id, $size);
}

/**
 * Thumbnail ALT
 */
function mpt_the_post_thumbnail_alt($post_id = null){
    echo mpt_get_the_post_thumbnail_alt($post_id);
}

/**
 * Get Thumbnail URL
 */
function mpt_get_the_post_thumbnail_alt($post_id = null){
    if(!$alt = get_post_meta(get_post_thumbnail_id($post_id), '_wp_attachment_image_alt', true))
        return get_the_title($post_id);
    
    return $alt;
}

/**
 * Unregister Native Thumbnails sizes
 */
add_filter('intermediate_image_sizes_advanced', 'mpt_image_sizes');
function mpt_image_sizes($sizes){
    unset($sizes['thumbnail']);
    unset($sizes['medium']);
    unset($sizes['medium_large']);
    unset($sizes['large']);
    
    return $sizes;
}