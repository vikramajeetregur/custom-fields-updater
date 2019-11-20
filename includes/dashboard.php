<?php 

class CMFU_Dashboard { 
     
    public function __construct() {
        
       $this->template();
    }
    
    function template ()
    {
        ?>
              <div class="wrap-custom">
                       <?php  echo '<div id="setting-error-settings_updated" class="updated settings-error notice is-dismissible"> 
                            <p><strong>success message</strong></p>
                            <button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>' ; 
                     ?> 
                        <h1><?php esc_html_e( get_admin_page_title() ); ?></h1>
                         
             <form method="post" action="<?php esc_url( admin_url('admin.php?page=cmba-custom-fields-updater.php') );  ?>">
            		<table class="form-table" id="cmfu-setting-table">
            			<tbody>
            			<tr  scope="row">
            				<th> 
                			  <label><input type="radio" name="cmfu-custom-field-action" value="add"> <span>Add</span></label></br> 
                			 </td>
                		 </tr>
                		 
                		 	<tr scope="row" id="cmfu-add-meta">
            				   <td> 
                	   		 	  <label><input type="text" name="cmfu-add-meta-key" placeholder="Key"></label>
                               </td> 
                			
                				<td> 
                			  	   <label><input type="text" name="cmfu-add-meta-value" placeholder="Value"></label>
                               </td> 
                		 	</tr>
                		
                			<tr scope="row">
                				<th> 
                                 	<label><input type="radio" name="cmfu-custom-field-action" value="update"><span>Update</span></label></br> 
                                 </th>
                             </tr>
                                
                        	 <tr scope="row" id="cmfu-update-meta">
                        	 	<td>  
                        	 		 <label><input type="text" name="cmfu-update-meta-key" placeholder="Key"></label>
                                </td> 
                                    
                                 <td> 
                                  	 <label><input type="text" name="cmfu-update-meta-value" placeholder="Value"> </label>
                				</td> 
                        	 </tr>
                         
                            <tr scope="row">
                                <th> 
                                 	<label><input type="radio" name="cmfu-custom-field-action" value="delete"> <span>Delete</span></br>
                                </th>
                            </tr>
                                   
                             <tr scope="row" id="cmfu-delete-meta">
            				 	<td>   	
                                     <label><input type="text" name="cmfu-delete-meta-key" placeholder="Key"><label>
                                </td> 
                                
                                <td>   	
                                 	  <label> <input type="text" name="cmfu-delete-meta-value" placeholder="Value"><label>
                                </td> 
                              </tr>
            				 
            				 
            				  <tr scope="row">
            					<th> 
                				  	<label>Select Post type</label> 
            					</th>
            				
            				 <td> 
                				 <select name="select-post-types" required>
                				  		<option value="">Select posts type</option>
                                      	<option value="post">Posts</option>
                                      	<option value="page">Pages</option>
                                      	<option value="cpt">Custom post types</option>
            			 		</select> 
            			 		<b>All: </b><input type="checkbox" name="select-all-posts" value="all-posts">
                         	</td>
                         	 
            			</tr>
            	 
            			  	 <tr scope="row" id="sort-out-post-id-block">
            					<th> 
                				  	<label>Selected Posts</label> 
            					</th>
            				
            				 <td>
                				   <table class="form-table">
                					  	<tbody>
                					 		 <tr scope="row">
                            					<th> 
                                			    	<label> <input name="cmfu-filter-by-post" type="radio" value="selected-posts-ids">Post IDs  </label>  
                                			 	</td>
                                	  		</tr>
                                	  
                                	  		 <tr id="update-post-ids">
                            					<td> 
                                			 	 <label><input type="text" name="selected-posts-ids" placeholder="posts IDs"><label>
                                			  		<code>
                                			  			Please insert post ids saparated by ','(comma) 
                                			  		</code>
                                			 	</td>
                                	 		 </tr>
                                	  
                                	   		<tr  scope="row">
                                				<th> 
                                    			      <label><input name="cmfu-filter-by-post" type="radio" value="selected-posts-meta-keys">Meta Keys and Values </label>
                                    			 </td>
                                    	 	</tr>
                                	  
                                    	   <tr id="update-post-meta-keys">
                                				<td> 
                                    				<fieldset>
                                        			 	 <label><input type="text"  name="cmfu_meta_key0" placeholder="Key"></input></label> 
                                        			 	 <label><input type="text"  name="cmfu_meta_value0" placeholder="Value"></input></label>
                                        			 	 <br>
                                        			 	 <label><input type="text"  name="cmfu_meta_key1" placeholder="Key"></input></label>  
                                        			 	 <label><input type="text"  name="cmfu_meta_value1" placeholder="Value"></input></label>   
                                        			 	 <br>
                                        			 	 <label><input type="text"  name="cmfu_meta_key2" placeholder="Key"></input></label>  
                                        			 	 <label><input type="text"  name="cmfu_meta_value2" placeholder="Value"></input></label>   
                                        			 <fieldset>
                                    			</td>
                                    	  </tr>
                                	  </tbody>
                				</table>
            				 
                         	</td>
            			</tr>
            			
            			 <tr> 
            			  	 <td>
                			 	 <p class="submit"><input type="submit" name="cmfu-submit" class="button button-primary" value="Apply Changes"></p>
            				</td>
            			</tr>
            	 </tbody>
            	 </table>
			</form>
          </div>
        <?php
    }
}
    
 
new CMFU_Dashboard();