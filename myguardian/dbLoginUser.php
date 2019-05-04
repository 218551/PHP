<?php

 
    require_once "dbConnection.php";
		$con = setConnection();
        $username = $_POST['username'];
        $password = $_POST['password'];
     
        if ($rezultat = @$con->query(
        $txt = sprintf("SELECT * FROM users WHERE username='%s' AND password='%s'", $username, $password)));			
        {
            $ilu_userow = $rezultat->num_rows;
            if($ilu_userow>0)
            {
				echo json_encode("Zalogowano!");
				$user = $rezultat->fetch_assoc();
				return $user['id'];
            } else 
			{
				echo json_encode("Nie znaleziono uzytkownika!");
				return -1;
				
            }
             
        }
         
 
