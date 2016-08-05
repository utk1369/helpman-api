<?php
include_once PATH_TO_DAO."OrderDAO.php";

class OrdersEndpoint {
	public static function submitRequest($payload) {
		$orderDAO = new OrderDAO();
		$submissionId = $orderDAO->submitRequest($payload);
		if($submissionId == null)
			return null;	
		return self::getOrder($submissionId);
	}
	
	public static function getOrder($submissionId) {
		$orderDAO = new OrderDAO();
		return $orderDAO->getOrderDetails($submissionId);
	}
	
	public static function getAllOrdersForUser($userId) {
		$orderDAO = new OrderDAO();
		return $orderDAO->getAllOrderDetails($userId);
	}
}
