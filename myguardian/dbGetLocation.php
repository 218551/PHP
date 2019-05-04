<?php

 
    require_once "dbConnection.php";
		$con = setConnection();
        $userid = $_POST['userid'];
     
        if ($rezultat = @$con->query(
        $txt = sprintf("SELECT * FROM `locations` WHERE user_iduser =%d AND id=( SELECT max(id) FROM `locations` );", $userid)));			
        {
            $lastloc = $rezultat->num_rows;
            if($lastloc>0)
            {
				echo json_encode("Znaleziono lokalizacje");
				$lastloc = $rezultat->fetch_assoc();
				echo json_encode($lastloc);
				return $lastloc;
            } else 
			{
				echo json_encode("Uzytkownik nie posiada lokalizacji!");
				return -1;
            }
             
        }
         
 