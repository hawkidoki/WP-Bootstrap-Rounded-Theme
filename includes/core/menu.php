<?php
/**
 * Menu
 */
add_action('init', 'mpt_menu');
function mpt_menu() {
    register_nav_menus(array(
        'navbar-top'    => __('Menu Header'),
        'navbar-left'   => __('Menu Left'),
    ));
}

/**
 * Menu: <li> class
 */
add_filter('nav_menu_css_class', 'mpt_menu_li_class', 99, 3);
function mpt_menu_li_class($classes, $item, $args){
    $classes[] = 'nav-item';
    
    if(in_array('current-menu-item', $classes) || in_array('current_page_parent', $classes))
        $classes[] = 'active';
    
    return $classes;
}

/**
 * Menu: <a> class
 */
add_filter('nav_menu_link_attributes', 'mpt_menu_a_class', 10, 3);
function mpt_menu_a_class($atts, $item, $args){
    //print_r($args);
    
    $atts['class'] = $atts['class'] . ' nav-link';
    
    // Childrens
    if(in_array('menu-item-has-children', $item->classes)){
        $atts['class'] = $atts['class'] . ' nav-link-collapse collapsed';
        $atts['data-toggle'] = 'collapse';
        $atts['href'] = '#' . sanitize_title($atts['href']);
    }
    
    return $atts;
}

/**
 * Menu: Submenu <ul> class
 */
add_filter('nav_menu_submenu_css_class', 'mpt_menu_submenu_ul_class', 10, 3);
function mpt_menu_submenu_ul_class($classes, $args, $depth){
    if($depth === 0)
        $classes[] = 'sidenav-second-level';
    
    if($depth === 1)
        $classes[] = 'sidenav-third-level';
    
    $classes[] = 'collapse';
    return $classes;
}