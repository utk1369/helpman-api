<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/Helpman/config.php';
include_once PATH_TO_DAO."Queries.php";
include_once PATH_TO_PDO."HelpmanQueryManager.php";

class UserDAO {	
	
	public function verifyUser($userDTO) {
		return (HelpmanQueryManager::getResultSetAsAssociativeArrays($userDTO, VERIFY_USER));		
	}
	
	public function getUserDetails($id) {
		$params = array("id" => $id);
		return HelpmanQueryManager::getResultSetAsAssociativeArrays($params, GET_USER_FROM_ID);
	}
	
	public function registerUser($userDTO) {
		if(count($this->getUserDetails($userDTO['id'])) == 0) {
			HelpmanQueryManager::insertIntoTable($userDTO, REGISTER_USER);
			return $this->getUserDetails($userDTO['id']);
		}
		else {
			return "Id already exists!";
		}
	}
}