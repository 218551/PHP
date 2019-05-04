<?php
			
	function setConnection(){
		require_once "dbAddress.php";
		$connection = @new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
		if($connection->connect_errno!=0)
		{
			//echo "Connection failed. Error: ".$connection->connect_errno;
		}
		else
		{
			//echo "Connected";
		}
	return $connection;
	}
	