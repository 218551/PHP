<?php
	
	class dbLogin{
		private $con;
		function __construct(){
			require_once "dbConnection.php";
			$this->con=setConnection();
		}
	function loginUser($username,$pass){
			$password = md5($pass);
			$stmt=$this->con->prepare("SELECT FROM `users` WHERE username=? AND password=?;");
			$stmt->bind_param("sss",$username,$password);
			if($stmt->execute()){
					echo "znaleziono uzytkownika";
					return true;
					
					
			}	
			else{
				echo "nie znaleziono";
				return false;
			}
		}
	}

	
	