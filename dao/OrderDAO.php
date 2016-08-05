<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/Helpman/config.php';
include_once PATH_TO_DAO."Queries.php";
include_once PATH_TO_DAO."UserDAO.php";

include_once PATH_TO_PDO."HelpmanQueryManager.php";


class OrderDAO {	
	public function submitRequest($orderDTO) {
		$userId = $orderDTO['userId'];
		$userDAO = new UserDAO();
		if($userDAO->getUserDetails($userId) == null)
			return null;
		return (HelpmanQueryManager::insertIntoTable($orderDTO, SUBMIT_ORDER));		
	}
	
	public function getOrderDetails($submissionId) {
		$parameters = array("id" => $submissionId);
		return HelpmanQueryManager::getResultSetAsAssociativeArrays($parameters, GET_ORDER_INFO_FROM_ID);
	}
	
	public function getAllOrderDetails($userId) {
		$parameters = array("userId" => $userId);
		return HelpmanQueryManager::getResultSetAsAssociativeArrays($parameters, GET_ALL_ORDERS_FOR_USER);
	}
}