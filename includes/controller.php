<?php
/**
 ** module for [submit]
 **/

/* form dashboard handler */

if(isset($_POST['cmfu-submit']))
{
    new CMFU_Controller();
}

class CMFU_Controller { 
     
    public function __construct() {
         $this->set_data();
    }

    function set_data()
    {
        $action     = '';
        $meta_key   = '';
        $meta_value = '';
        $posts_ids  = '';
        $post_type  = '';
        $all_posts  = '';
        $meta_keys_and_values = array();
            
            if(isset($_POST['cmfu-submit']))
            {    
                    if (isset($_POST['cmfu-custom-field-action']))
                    {
                         $action =   $_POST['cmfu-custom-field-action'];
                        
                            if($action == 'add') {
                                 
                                if (!empty($_POST['cmfu-add-meta-key']) && !empty($_POST['cmfu-add-meta-value']))
                                {
                                    $meta_key =  $_POST['cmfu-add-meta-key'];
                                    $meta_value = $_POST['cmfu-add-meta-value'];
                             
                                }
                            }
                            else if ($action == 'update') {
                              
                                if (!empty( $_POST['cmfu-update-meta-key']) && !empty($_POST['cmfu-update-meta-value']))
                                {
                                    $meta_key =  $_POST['cmfu-update-meta-key'];
                                    $meta_value = $_POST['cmfu-update-meta-value'];
                                }
                            }
                            else if ($action == 'delete') {
                                
                                if (!empty( $_POST['cmfu-delete-meta-key']) && !empty($_POST['cmfu-delete-meta-value']))
                                {
                                    $meta_key =  $_POST['cmfu-delete-meta-key'];
                                    $meta_value = $_POST['cmfu-delete-meta-value'];
                                }
                            }
                            else {
                                wp_die( "Please select an action first.");
                            }
                    }
                    
                    
                    if (isset($_POST['select-post-types'])) {
                        
                           $post_type =  $_POST['select-post-types'];
                          
                          if (isset($_POST['select-all-posts'])) {
                              
                              $all_posts =  $_POST['select-all-posts'];
                          }
                    }
                      
                    
                    if (isset($_POST['cmfu-filter-by-post']))
                    {
                           $filter_posts =   $_POST['cmfu-filter-by-post'];
                        
                        if ($filter_posts == 'selected-posts-ids') {
                             $posts_ids =  $_POST['selected-posts-ids'];
                        }
                        
                         if ($filter_posts == 'selected-posts-meta-keys') {
                             
                              
                              if (!empty( $_POST['cmfu_meta_key0']) && !empty($_POST['cmfu_meta_value0']))
                              {
                                  $meta_key0 =  $_POST['cmfu_meta_key0'];
                                  $meta_value0 =  $_POST['cmfu_meta_value0'];
                             
                                  array_push($meta_keys_and_values,array(
                                      'key' => $meta_key0,
                                      'value' => $meta_value0)
                                      );
                                 
                              }
                              
                              if (!empty( $_POST['cmfu_meta_key1']) && !empty($_POST['cmfu_meta_value1']))
                              {
                                  $meta_key1 =  $_POST['cmfu_meta_key1'];
                                  $meta_value1 =  $_POST['cmfu_meta_value1'];
                                  
                                  array_push($meta_keys_and_values,array(
                                      'key' => $meta_key1,
                                      'value' => $meta_value1)
                                      );
                                  
                              }
                              
                              if (!empty( $_POST['cmfu_meta_key2']) && !empty($_POST['cmfu_meta_value2']))
                              {
                                  $meta_key2 =  $_POST['cmfu_meta_key2'];
                                  $meta_value2 =  $_POST['cmfu_meta_value2'];
                                  
                                  array_push($meta_keys_and_values,array(
                                      'key' => $meta_key2,
                                      'value' => $meta_value2)
                                      );
                                  
                              }
                          }
                     }
            }
             
            new CMFU($action,$meta_key,$meta_value,$post_type,$all_posts,$posts_ids,$meta_keys_and_values);
    
       }
       
    
}




