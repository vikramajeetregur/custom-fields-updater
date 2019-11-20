<?php
 // Load CSS on all admin pages
function cmba_admin_styles() {
    
    wp_enqueue_style(
        'cmba-admin',
        CMFU_PLUGIN_URL . 'assets/css/cmba-style.css',
        [],
        time()
        );
    
}
add_action( 'admin_enqueue_scripts', 'cmba_admin_styles' );

 
// Load JS on all admin pages
function cmba_admin_scripts() {
    
    wp_enqueue_script(
        'ewpplugin-admin',
        CMFU_PLUGIN_URL . 'assets/js/cmba-script.js',
        ['jquery'],
        time()
        );
    
}
add_action( 'admin_enqueue_scripts', 'cmba_admin_scripts');