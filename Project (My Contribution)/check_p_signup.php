<?php
          include 'controllers/P_Controller.php';
		  $email=$_GET["email"];
		  $pg=checkPhotographerEmail($email);
		  //echo "$pg";
		  if($pg){
		    echo "INVALID";
		  }
		else echo "VALID";    
?>



