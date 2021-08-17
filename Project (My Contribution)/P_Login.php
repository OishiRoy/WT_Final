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
 
  return !hasError;
 }
 function refresh(){
 hasError=false;
 get("err_pass").innerHTML="";
 get("err_email").innerHTML="";
 }      
   
</script>

	<title>Photographer Login</title>
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
      

      
     <form method="Post"  onsubmit="return validate()"  action="" style="
        background: aqua;
        width: 40%;
        margin: 150px auto;
        padding: 20px 0; 
        border-radius: 15px;
        box-shadow: 5px 5px 8px gray;
      ">

      	    <table align="center">
                             <tr>
                             	 <td  align="center" colspan="2">
								   <b>
								     <h2> Sign in</h2>
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
      	    	   	   	   Email
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="text" id="email" placeholder="Email" name="email" size="40" value="<?php echo $email;?>">
      	    	   	   </td>

      	    	   	   <td><span id="err_email">
      	    	   	   	   <?php echo $err_email;?>
						   </span>
      	    	   	   </td>
      	    	   </tr>
				   
				   <tr>
      	    	   	   <td>
      	    	   	   	   Password
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="Password" id="pass"  placeholder="Password" name="password" size="40" value="<?php echo $pass;?>">
      	    	   	   </td>

      	    	   	   <td>
					        <span id="err_pass">
      	    	   	   	   <?php echo $err_pass;?>
						   </span>
      	    	   	   </td>
      	    	   </tr>
				   
				   
                            <tr>
						     <td align="center" colspan="2"><input type="submit" name="login" value="Login"></td>
					        </tr>
							
      	    	   </tr>
				   
				   <tr>
                	  	     	<td align="center" colspan="2">Create Account?  <a href="P_Signup.php">Sign Up </a></td>
                  </tr>
      	    	 
      	    </table>
      </form>
</html>
		
	