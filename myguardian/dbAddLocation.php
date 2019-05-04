<?php

	require_once "dbConnection.php";
		$con = setConnection();
        $geolength = $_POST['geolength'];
        $geowidth = $_POST['geowidth'];
		$userid	= $_POST['userid'];
		
		$stmt=$con->prepare("INSERT INTO `locations` (`id`, `geolength`, `geowidth`, `user_iduser`) VALUES (NULL,?,?,?);");
		$stmt->bind_param("sss",$geolength,$geowidth,$userid);
		if($stmt->execute()){
			echo"dodano lokalizacje";
			return true;		
		}	
		else{
			echo"nie dodano lokalizacji";
			return false;
		}