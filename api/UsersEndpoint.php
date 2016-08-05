<?php
include_once PATH_TO_DAO."UserDAO.php";

class UsersEndpoint {
	public static function getUser($payload) {
		$userDAO = new UserDAO();
		return $userDAO->verifyUser($payload);		
	}
	
	public static function registerUser($payload) {
		$userDAO = new UserDAO();
		return $userDAO->registerUser($payload);
	}
}
