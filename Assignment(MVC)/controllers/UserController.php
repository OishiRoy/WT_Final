<?php

     include '../models/db_config.php';
     $name="";
     $err_name="";
	 $uname="";
     $err_uname="";
     $email="";
     $err_email="";
	 $pass="";
     $err_pass="";
	 $hasError=false;
	 if(isset($_POST["sign_up"])){
		 if(empty($_POST["name"])){
			 $err_name="Name Required";
			 $hasError=false;
		 }else{
			 $name=$_POST["name"];
		    }
		 if (empty($_POST["uname"])){
			$err_uname="Username Required";
			 $hasError=false;
		 }else{
			 $uname=$_POST["uname"];
		    }
			
		 if (empty($_POST["email"])){
			$err_email="Email Required";
			 $hasError=false;
		    }else{
			 $email=$_POST["email"];
		    }
			
		 if (empty($_POST["pass"])){
			$err_pass="Password Required";
			 $hasError=false;
		    }else{
			 $pass=$_POST["pass"];
		    }
	    
			
		 if(!$hasError){
			 $rs = insertUser($name,$uname,$_POST["email"],$_POST["pass"]);
			 if($rs === true){
				header("Location: login.php");
			 }
			 echo $rs;
				
            }
	    }
		
	    function insertUser($name,$uname,$email,$pass){
			$query = "insert into users values(NULL,'$name','$uname','$email','$pass')";
		    return execute($query);
		}
		    
		
   ?>

   
   
   
   
   
   
  