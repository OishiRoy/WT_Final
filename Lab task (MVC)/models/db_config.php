<?php
	$db_server="localhost";
	$db_uname="root";
	$db_pass="";
	$db_name="lab task(mvc)";
	
	function execute($query){ // responsible for running insert,update,delete
		global $db_server,$db_Name,$db_DOB,$db_Credit,$db_CGPA,$db_DEPT_ID;
		$conn = mysqli_connect($db_server,$db_Name,$db_DOB,$db_Credit,$db_CGPA,$db_DEPT_ID);
		if($conn){
			if(mysqli_query($conn,$query)){
				return true;
			}
			return mysqli_error($conn);
		}
	}
	function get($query){ //responsible for running select
		global $db_server,$db_Name,$db_DOB,$db_Credit,$db_CGPA,$db_DEPT_ID;
		$conn = mysqli_connect($db_server,$db_Name,$db_DOB,$db_Credit,$db_CGPA,$db_DEPT_ID);
		$data = array();
		if($conn){
			$result = mysqli_query($conn,$query);
			while($row = mysqli_fetch_assoc($result)){
				$data[] = $row;
			}
			
		}
		return $data;
	}

?>