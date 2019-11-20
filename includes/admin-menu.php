<?php
class CMFU_Admin_Menu {
 
    public function __construct() {
    
        add_action( 'admin_menu', array($this,'add_admin_menu') );
    }
     
   function add_admin_menu () {
        add_menu_page(
            esc_html__(  'Custom Fields Updater' ),
            esc_html__(  'Custom Fields Updater' ),
            'administrator',
            'cmba-custom-fields-updater.php',
            array( $this, 'custom_admin_menu_callback'),
            'dashicons-nametag', '2');
        
         add_submenu_page(
             'cmba-custom-fields-updater.php', 
              esc_html__(  'Custom Fields Updater' ),
              esc_html__(  'Custom Fields Updater' ),
              'manage_options', 
              'cmba-custom-fields-updater.php',
              array( $this, 'custom_admin_menu_callback'));
            
    } 
    
    function custom_admin_menu_callback() {
   
       // Double check user capabilities
       if ( !current_user_can('manage_options') ) {
           return;
       }
      
       // load templates
       require_once CMFU_PLUGIN_DIR .'includes/dashboard.php';
       
             
    }
    
    
}


new CMFU_Admin_Menu (); 