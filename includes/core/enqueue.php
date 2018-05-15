<?php
/**
 * Enqueue
 */
add_action('wp_enqueue_scripts', 'mpt_enqueue');
function mpt_enqueue(){
    // Google Fonts
    wp_register_style('google-fonts-primary', add_query_arg(array('family' => 'Roboto:300,400,500,700'), '//fonts.googleapis.com/css'), array(), null, false);
    wp_register_style('google-fonts-secondary', add_query_arg(array('family' => 'Quicksand:400,500,700'), '//fonts.googleapis.com/css'), array(), null, false);
    
    // Styles
    wp_enqueue_style('google-fonts-primary');
    wp_enqueue_style('google-fonts-secondary');
    wp_enqueue_style('bootstrap',           MPT_THEME_URL . '/assets/css/lib/bootstrap.min.css',                    array(),            null);
    
    // SB Admin
    //wp_enqueue_style('sba',                 MPT_THEME_URL . '/assets/css/lib/sb-admin/sb-admin.css',                array(),            null);
    wp_enqueue_style('sba-dt',              MPT_THEME_URL . '/assets/css/lib/datatables/dataTables.bootstrap4.css', array(),            null);
    wp_enqueue_style('sba-fa',              MPT_THEME_URL . '/assets/css/lib/fontawesome/font-awesome.min.css',     array(),            null);
    
    wp_enqueue_style('acf-login-register',  MPT_THEME_URL . '/includes/acf/login-register/style.css',               array(),            null);
    wp_enqueue_style('style',               MPT_THEME_URL . '/assets/css/style.css',                                array(),            null);
    
    // Scripts
    wp_enqueue_script('bootstrap',          MPT_THEME_URL . '/assets/js/lib/bootstrap.bundle.min.js',               array('jquery'),    null);
    
    // SB Admin
    wp_enqueue_script('jquery-easing',      MPT_THEME_URL . '/assets/js/lib/jquery/jquery.easing.min.js',           array('jquery'),    null, true);
    wp_enqueue_script('sba-chart',          MPT_THEME_URL . '/assets/js/lib/chart/Chart.min.js',                    array(),            null, true);
    wp_enqueue_script('sba-dt',             MPT_THEME_URL . '/assets/js/lib/datatables/jquery.dataTables.js',       array('jquery'),    null, true);
    wp_enqueue_script('sba-dt-bs',          MPT_THEME_URL . '/assets/js/lib/datatables/dataTables.bootstrap4.js',   array('jquery'),    null, true);
    
    wp_enqueue_script('sba',                MPT_THEME_URL . '/assets/js/lib/sb-admin/sb-admin.js',                  array('jquery'),    null, true);
    wp_enqueue_script('sb-charts',          MPT_THEME_URL . '/assets/js/lib/sb-admin/sb-admin-charts.js',       array('jquery'),    null, true);
    
    wp_enqueue_script('script',             MPT_THEME_URL . '/assets/js/script.js',                                 array('jquery'),    null);
    wp_enqueue_script('acf-login-register', MPT_THEME_URL . '/includes/acf/login-register/script.js',               array('jquery'),    null);
}

add_action('admin_enqueue_scripts', 'mpt_admin_enqueue');
function mpt_admin_enqueue(){
    wp_enqueue_style('acf',                 MPT_THEME_URL . '/includes/acf/style.css',                          array(),            null);
}