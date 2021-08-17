<script src="js/P_Signup.js"></script>
<?php
          include 'controllers/P_Controller.php';
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
// .............pass....................
 if(get("pass").value == ""){
 hasError = true;
 get("err_pass").innerHTML = "*Pass Req*";
 }
 
 else if(get("pass").value.length <= 5){
 hasError = true;
 get("err_pass").innerHTML = "*Password must be >= 5 characters";
 get("err_pass").innerHTML = "*Password must contain at least 5 characters";
 } 


 //.........email validation.................
 if(get("email").value == "")
    	     	{
    	     		hasError = true;
    	     		get("err_email").innerHTML= "**Email Req";
    	     	}

                //var atThe = get("email").value.indexOf('@');
                //var dot = get("email").value.indexOf('.');

                if(get("email").value.indexOf('@') > get("email").value.indexOf('.'))
                {
                    hasError = true;
                    get("err_email").innerHTML="**Invalid ('@') & ('.') Position";
                }
				
 //.........................address..................................
 
                
            
            
            if(get("address").value == ""){
                    hasError = true;
                    get("err_add").innerHTML = "**address req";
                }
            
  return !hasError;
 }
 function refresh(){
 hasError=false;
 get("err_pass").innerHTML="";
 get("err_email").innerHTML="";
 get("err_add").innerHTML="";
 }      
   
</script>
	<style>
        input{
            padding: 8px 10px;
            border-radius: 5px;
            margin: 5px;
            border: 2px solid red;
        }
		</style>'
         
  </head>
  <body>
                 <form method="Post"action=""  style="
        background: #7DEDFF;
        width: 40%;
        margin: 45px auto;
        padding: 20px 0; 
        border-radius: 15px;
        box-shadow: 5px 5px 8px gray;
		">
                	  <table align="center">
                             <tr>
                             	 <td  align="center" colspan="2">
								   <b>
								     <h2>SignUp</h2>
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
                                   <b> Name  </b> 
                              </td>
							  </tr>
							  <tr>
							  <td>
                                  <input type="text" id="name" placeholder="Name" name="name" value="<?php echo $name; ?>" size="40">
                              </td>
							  
                              <td>
                              	<span id="err_name">
                              		<?php echo $err_name;?>	
                              	</span>
                              </td>
                            </tr>
							 
							 </tr>
                	  	     <tr>
                	  	     	 <td>
								    <b>Email</b>
								</td>
								</tr>
								<tr>
                	  	     	 <td>
                                    <input type="text" id="email" onfocusout="checkEmail(this)" placeholder="Email" name="email" value="<?php echo $email; ?>" size="40">
                                 </td>
								 </tr>
							 
                                 <tr>
								 <td>
								 </td>
                                 <td>
                                    <span id="err_email">
                                        <?php echo $err_email;?>    
                                    </span>
                                 </td> 
      	    	            </tr>
                	  	     
							 <tr>
                             <td>
							     <b>Gender:</b>
							 
                                  <input type="radio" name="gender" value="Male" <?php if($gender == "Male") echo "checked"?> > Male 
                                  <input type="radio" name="gender" value="Female" <?php if($gender == "Female") echo "checked"?> > Female
                            </td>
                             <td>
                                <span><?php echo $err_gender;?></span>
                            </td>
                              </tr>
							  
							  
                            <tr>
                         <td>
                           <b> Address</b>
                         </td>
						 </tr>
						 <tr>
                        
                          <td> 
                              	<textarea cols="38" rows="3" id="address" name="Address"  ><?php echo $add; ?></textarea>
                              </td>
                              <td>
                              	<span id="err_add"> <?php echo $err_add; ?> </span>
                              </td>
                            </tr>
							

                	  	     <tr>
                	  	     	 <td>
								    <b>Password<b>
								</td>
								
								</tr>
								<tr>
							    <td>
      	    	   	   	           <input type="Password" placeholder="Password" name="password" value="<?php echo $pass;?>" size="40">
      	    	   	            </td>
                             </tr>
							 
                             <tr>
							 <td>
							 </td>
      	    	   	            <td>
      	    	   	   	             <?php echo $err_pass;?>
      	    	   	            </td>
      	    	            </tr>
							 
							 <tr>
                	  	     	 <td>
								   <b>Confirm Password</b>
								 </td>
								 </tr>
								 <tr>
                	  	
							 <td>
      	    	   	   	         <input type="Password" placeholder="Confirm Password" name="confirm_password" value="<?php echo $cpass;?>" size="40">
      	    	   	         </td>
                             </tr>
							 
                             <tr>
							 <td>
							 </td>
      	    	   	         <td>
      	    	   	   	             <?php echo $err_cpass;?>
      	    	   	         </td>
                             </tr>
							 
							 
							
							 <tr>
							   <td  colspan="2">
							   <br><input type="checkbox" value="" <?php if(Service("")) echo "checked" ?> name="services[]"> I agree to the term of services<br><br>
							   </td>
							 
                              <td>
                              	<span>
                              	   <?php echo $err_services;?>
                              	</span>
                              </td>
							 </tr>
							 
                             <tr>
						       <td align="center" colspan="2">
							     <input type="submit" name="SignUp" value="SignUp">
							   </td><br>
					        </tr>
							 <tr>
                	  	     	<td align="center" colspan="2"> Do you have an account? <a href="P_Reg.php">Sign in </a></td>
                	  	     </tr>
							
                	  </table>
                </form>   	
   </body>
</html>