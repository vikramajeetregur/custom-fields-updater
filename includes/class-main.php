<?php 

class CMFU  {
      
    private $action;
    private $meta_key;
    private $meta_value;
    private $post_type;
    private $all_posts;
    private $sort_out_keys_values = array();
    private $posts_ids = array();
     
    public function __construct($action, $meta_key, $meta_value, $post_type, $all_posts = Null, $sort_out_posts_ids = Null,$sort_out_keys_values = Null) 
    { 
        $this->action                 =  $action ;
        $this->meta_key               =  $meta_key ;
        $this->meta_value             =  $meta_value;
		$this->sort_out_keys_values   =  $sort_out_keys_values;
        $this->all_posts              =  $all_posts;
        $this->sort_out_posts_ids     =  $sort_out_posts_ids;
         
        $this->posts_ids              =  $this->put_posts_ids($post_type);
        
        if (!empty( $this->posts_ids)) {
             $this->custom_fields_updater( $this->posts_ids) ;
        }
     }
      
       
    function custom_fields_updater($posts_ids) 
    {   
         if (empty($posts_ids)) return ;
        
            $meta_key   = $this->meta_key;
            $meta_value = $this->meta_value;
            $action     =  $this->action;
            
            if ($action == 'add') {
             
                 for($i = 0 ; $i < count($posts_ids); $i++) {
                    
                    add_post_meta( $posts_ids[$i] , $meta_key, $meta_value);
                }
            }
            elseif ($action == 'update') {
                
                 for($i = 0 ; $i < count($posts_ids); $i++) {
                     
                     update_post_meta( $posts_ids[$i] , $meta_key, $meta_value);
                 }
            }
            elseif ($action == 'delete') {
                
                for($i = 0 ; $i < count($posts_ids); $i++) {
                    
                    delete_post_meta( $posts_ids[$i] , $meta_key, $meta_value);
                  }
            }
            
    }
   
   function put_posts_ids ($post_type) {
       
       if(($post_type == 'post') ||  ($post_type == 'page')) {
           
           if (!empty( $this->all_posts)) {
              
               $posts_pids_temp = $this->get_posts_ids_by_post_type($post_type);
           }
           elseif (!empty($this->sort_out_posts_ids))
           {
               
               $posts_pids_temp  = explode(",", $this->sort_out_posts_ids);
           }
           elseif (!empty($this->sort_out_keys_values))
           {
               
               $sort_out_keys_values = $this->sort_out_keys_values;
               $posts_pids_temp =  $this->get_posts_ids_by_posts_meta_keys_values ($sort_out_keys_values);
           
           }
           else
           {
               $posts_pids_temp = '';
           }
           
           return  $posts_pids_temp;
       }
   }
   
    
     
    function get_posts_ids_by_post_type ($post_type) 
    {
  
       global $wpdb;
       
       $posts_ids_temp = array();
       
       $table_name = $wpdb->prefix.'posts';
       
       $sql="SELECT id FROM $table_name where post_type = '$post_type'";
       
       $results = $wpdb->get_results($sql);
        
       foreach ($results as $post_pid) {
       
           array_push($posts_ids_temp, $post_pid->id);
       }
    
       return $posts_ids_temp;
        
    }
    
   
    function get_posts_ids_by_posts_meta_keys_values ($sort_out_keys_values) 
    {
        global $wpdb;
        
        $posts_ids_temp = array();
        
        $query_condition      = "";
        
        for($i = 0; $i < count($sort_out_keys_values ) ; $i++)
        { 
             $key   = $sort_out_keys_values[$i]['key'];
             $value =  $sort_out_keys_values[$i]['value'];
        
             if ($i == 0) {
                  $query_condition = "(meta_key = '$key' AND meta_value = '$value') ";
             }
             else {
                  $query_condition .= "OR (meta_key = '$key' AND meta_value = '$value') ";
                  
             }
        }
          
        $table_name = $wpdb->prefix.'postmeta';
        
        $sql   =  "SELECT post_id FROM $table_name where $query_condition";
      
        $results = $wpdb->get_results($sql);
        
        foreach ($results as  $posts_ids)  {
        
            array_push($posts_ids_temp, $posts_ids->post_id);
        }
         
         
        return $posts_ids_temp;
        
    }
    
     
    
}



 
