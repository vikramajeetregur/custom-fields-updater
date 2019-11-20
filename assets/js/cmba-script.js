jQuery(document).ready(function(){
	 
	 jQuery('input:radio[name="cmfu-custom-field-action"]').change(function(){
	   
	  if(jQuery(this).val() == 'add')
	    {
	    	jQuery("#cmfu-add-meta").css({"display": "block"});
	    }
	    
	   else
	    {
	    	jQuery("#cmfu-add-meta").css({"display": "none"});
	    }
	    
	    
		 if(jQuery(this).val() == 'update')
		  {
		    	jQuery("#cmfu-update-meta").css({"display": "block"});
		  }
		  
		 else
		 {
			   	jQuery("#cmfu-update-meta").css({"display": "none"});
		 }
	    
	    
	    if(jQuery(this).val() == 'delete')
	    {
	    	jQuery("#cmfu-delete-meta").css({"display": "block"});
	    }
	    
	    else
	    {
		    	jQuery("#cmfu-delete-meta").css({"display": "none"});
		}
	 });
	 
	 
	 jQuery('input:radio[name="cmfu-filter-by-post"]').change(function(){
		    
		 if(jQuery(this).val() == 'selected-posts-ids')
		    {
		    	jQuery("#update-post-ids").css({"display": "block"});
		    }
		   
		 else
		    {
		    	jQuery("#update-post-ids").css({"display": "none"});
		    }
		    
		    
		  if(jQuery(this).val() == 'selected-posts-meta-keys')
		    {
		    	jQuery("#update-post-meta-keys").css({"display": "block"});
		    }
		  else
		   {
			    	jQuery("#update-post-meta-keys").css({"display": "none"});
		   }
		    
		 });
	 
	 
	 jQuery('input[name="select-all-posts"]').click(function(){
		 
		 if(jQuery(this).prop("checked") == true)
		 {
			  jQuery("#sort-out-post-id-block").toggle(); 
         }
         else if(jQuery(this).prop("checked") == false)
         {
        	 jQuery("#sort-out-post-id-block").toggle(); 
         }
     });
	 
	 

});