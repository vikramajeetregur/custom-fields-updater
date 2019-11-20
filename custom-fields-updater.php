<?php
/*
 Plugin Name: Custom Fields Updater  
 Plugin URI:  https://www.regur.net/
 Description: This plugin help you to quickly manupulate your meta data of your posts, pages and custom post types without having to go into the editor for each time.
 Version:     0.0.1
 Author:      Regur Technology Solutions
 Author URI:  https://www.regur.net/
 Text Domain:
 Domain Path:
 License:
 */


// If this file is called directly, abort.
defined('ABSPATH') or die('you are not allow to access this page');

// Plugin Folder Path AND  URL.
if (! defined('CMFU_PLUGIN_DIR') && ! defined('CMFU_PLUGIN_URL') ) {
    
    define('CMFU_PLUGIN_DIR', plugin_dir_path(__FILE__) );
    define( 'CMFU_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}
 

require_once CMFU_PLUGIN_DIR .'includes/admin-menu.php';
require_once CMFU_PLUGIN_DIR .'includes/cmfu-enqueue_scripts.php';
require_once CMFU_PLUGIN_DIR .'includes/class-main.php';
require_once CMFU_PLUGIN_DIR .'includes/controller.php';
 

  
// class Custom_Meta_Fields_Updater  {
    
//     function __construct() {
//        // $this->includes();
       
        
       
//      }
      
// }
// $cmba =  new Custom_Meta_Fields_Updater();
 