<?php
	
	require_once "dbConnection.php";
	$database = setConnection();
	
	$result = $database->query(sprintf("SELECT * FROM product WHERE productcode = '%s'", $_POST['result']));
	if(mysqli_num_rows($result)!=0)
	{
		$fetchResult = $result->fetch_assoc();
		$id = $fetchResult['id'];
		$productName = $fetchResult['productname'];	
     
		$response = array();
		$response['message'] = "id: $id | Product name: $productName ";
	}
	else
	{
		$response['message'] = "Product not found";
	}
	echo json_encode($response);