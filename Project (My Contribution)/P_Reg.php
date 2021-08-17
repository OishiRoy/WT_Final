<?php
          include 'controllers/R_Controller.php';
?>
<html>
  <head>
  
  
  
 <script>
 var hasError=false;
 function get(id){
 return document.getElementById(id);
 }
 
 function validateGender(){
				var gn = document.querySelector('input[name="gender"]:checked');
				if(gn == null){
					return false;
				}
				return true;
			}
 
 function validate(){
 
 refresh();
 
//................name.............................

if(get("name").value == ""){
 hasError = true;
 get("err_name").innerHTML = "*Name Req*";
 }
 
 else if(get("name").value.length <= 3){
 hasError = true;
 get("err_name").innerHTML = "*Name must be >= 3 characters";
 get("err_name").innerHTML = "*Space req";
 get("err_name").innerHTML = "*Name must contain at least 3 characters with space";
 }
 
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
				
 //....................gender...................................
 
 if(!validateGen()){
					hasError = true;
					get("err_gender").innerHTML = "*Gender Req";
				}
 
  return !hasError;
 }
 function refresh(){
 hasError=false;
 get("err_pass").innerHTML="";
 get("err_email").innerHTML="";
 get("err_name").innerHTML="";
 }      
   
</script>



	<title>Photographer Registration</title>
	
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
                
				 
				  
     <form action="" onsubmit="return validate()" method="Post" style="
        background: #BCFFB9;
        width: 40%;
        margin: 50px auto;
        padding: 20px 0; 
        border-radius: 15px;
        box-shadow: 5px 5px 8px gray;
      enctype="multipart/form-data">
                	  <table align="center">
                             <tr>
                             	 <td  align="center" colspan="2">
								   <b>
								     <h2>Registration</h2>
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
                                   <b> Name</b> 
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
							 
                	  	     <tr>
                	  	     	 <td>
								    <b>Email</b>
								</td>
							</tr>
							<tr>
                	  	     	 <td>
                                    <input type="text" id="email" placeholder="Email" name="email" value="<?php echo $email; ?>" size="40">
									</span>
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
							 
                                  <input type="radio" id="male" name="gender" value="Male" <?php if($gender == "Male") echo "checked"?> > Male 
                                  <input type="radio" id="female" name="gender" value="Female" <?php if($gender == "Female") echo "checked"?> > Female
                              </td>
                              <td>
                                <span id="err_gender"><?php echo $err_gender;?></span>
                              </td>
                             </tr>
							  
                          
                	  	     <tr>
                	  	     	 <td>
								    <b>Photographer Type</b>
								</td>
							</tr>
							<tr>
                	  	     	 <td>
                                    <input type="text" placeholder="Ptype" name="Ptype" value="<?php echo $Ptype; ?>" size="40">
                                 </td>
								 
                                 <td>
                                    <span>
                                        <?php echo $err_Ptype;?>    
                                    </span>
                                 </td> 						   
						    </tr>
							
					<tr>
                         <td>
                             <b>Upload Your Photo</b>
                         </td>
                    </tr>
					<tr>
                         <td>
                             <input type="file" name="u_image">
                         </td>
                    </tr>

                	  	     <tr>
                	  	     	 <td>
								    <b>Password<b>
								</td>
							</tr>
							<tr>
							    <td>
      	    	   	   	           <input type="Password" id="pass"  placeholder="Password" name="password" value="<?php echo $pass;?>" size="40">
      	    	   	            </td>
                             
      	    	   	            <td> <span id="err_pass">
      	    	   	   	             <?php echo $err_pass;?>
									 </span>
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
                             
      	    	   	            <td>
      	    	   	   	             <?php echo $err_cpass;?>
      	    	   	            </td>
                             </tr>
							 
							 
							 
                            <tr>
						       <td align="center" colspan="2">
							     <input type="submit" name="Register" value="Register">
							   </td>
					        </tr>
							 
							
                	  </table>
                </form>   	
   </body>
</html>