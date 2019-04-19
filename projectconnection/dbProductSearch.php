<?php
	
	require_once "dbConnection.php";
	$database = setConnection();
	
	$result = $database->query(sprintf("SELECT * FROM users WHERE username = '%s'", $_POST['username']));
	
	$fetchResult = $result->fetch_assoc();
	$id = $fetchResult['id'];
	$username = $fetchResult['username'];
	$password = $fetchResult['password'];
	$email = $fetchResult['email'];
     
	$response = array();
	$response['message'] = "id: $id username: $username password: $password email: $email";
	
	echo json_encode($response);