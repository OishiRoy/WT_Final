
<?php
          include 'Dashboard.php';
		  include 'controllers/Gallery_Controller.php';
		  
		
		 
?>

<html>
  <head>
    <script>
 var hasError=false;
 function get(id){
 return document.getElementById(id);
 }
 
 function validate(){
 
 refresh();
 
 //.............Ptype........................
            
            if(get("Photographertype").selectedIndex==0){
                    hasError = true;
                    get("err_Photographertype").innerHTML = "**Photographertype required";
                }
                
 //.......................description......................
            
            if(get("desc").value == ""){
                    hasError = true;
                    get("err_desc").innerHTML = "**desc required";
                }
				
				 return !hasError;
 }
 function refresh(){
 hasError=false;
 get("err_pass").innerHTML="";
 get("err_email").innerHTML="";
 }      
   
</script>
 
	<title>Add Gallery</title>
  </head>
  <body>
                 <form action="" method="post" enctype="multipart/form-data">
                	  <table align="center">
                             <tr>
                             	 <td  align="center" colspan="2">
								   <b>
								     <h2>Add Gallery</h2>
								   </b>
								 </td>
                             </tr>
							 
							 
							 <tr>
                              <td>
                              	<span>
                              		<?php echo $err_db;?>	
                              	</span>
                              </td>
                            </tr>						 
							      
                	  	     
				          <tr>
                            <td>
							<b>Photographertype</b>
							</td>
							</tr>
							<tr>
							<td>
      	    	   	   	       <select  id="Photographertype" name="Photographertype">
      	    	   	   	   	       <option selected disabled>Photographertype</option>
								  <?php
								  foreach($Photographertype as $a)
								  {
								  	if($Photographertype == $a)
								  		echo "<option selected>$a</option>" ;
								  	else
								  		echo "<option>$a</option>";
								  }
								  ?>
      	    	   	   	        </select>
      	    	   	             </td>
								  </tr>
							 
                                 <tr>
                                 <td>
							     </td>								 
      	    	   	              <td>
                              	<span id="err_Photographertype">
                              	   <?php echo $err_Photographertype;?>
                              	</span>
                            </td>  
                            </tr>
				   
				      <tr>
                         <td>
                             <b>Image</b>
                         </td>
                     </tr>

                     <tr>
                         <td>
                             <input type="file" name="doc" >
                         </td>
                    </tr>
					 
					       <tr>
		                     <td>
							   <b>Description</b>
							 </td>
						   </tr>
							<tr>
      	    	   	           <td>
      	    	   	   	         <textarea  cols="30" rows="5" name="desc"  ><?php echo $desc; ?></textarea>
      	    	   	           </td>
      	    	   	           <td>
                              	<span>
                              		<?php echo $err_desc;?>
                              	</span>
                              </td> 
      	    	        </tr>
					   <tr>
                       <td align="center">
                            <input type="submit" name="Add_Gallery" value="Add_Gallery">
                       </td>
                  </tr>
            </table>
      </form>
</body>
</html>