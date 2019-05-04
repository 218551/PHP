<?php
	
	class dbRegister{
		private $con;
		function __construct(){
			require_once "dbConnection.php";
			$this->con=setConnection();
		}
	function createUser($username,$pass,$nrtel){
			$password = md5($pass);
			$stmt=$this->con->prepare("INSERT INTO `users` (`id`, `username`, `password`, `nrtel`) VALUES (NULL, ?, ?,?);");
			$stmt->bind_param("sss",$username,$password,$nrtel);
			if($stmt->execute()){
					return true;
					
			}	
			else{
				return false;
			}
		}
	}