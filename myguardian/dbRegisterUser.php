<?php
require_once "dbRegister.php";
$response=array();
if($_SERVER['REQUEST_METHOD']=='POST'){
	
	if(
		isset($_POST['username']) and 
		isset($_POST['password']) and 
		isset($_POST['nrtel'] )
		){
			
			$db = new dbregister();
			if($db->createUser(
				$_POST['username'],
				$_POST['password'],
				$_POST['nrtel']
			)){
				$response['error']=false;
				$response['message']="User registered successfully";
			}else{
				$response['error']=true;
				$response['message']="error. try again.";
			}
			
			
		}else{
			$response['error'] = true;
			$response['message']="Required fields are missing";
		}
	  
}else{
	$response['error']=true;
	$response['message']="invaild request";
}
echo json_encode($response);