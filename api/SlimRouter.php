<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/Helpman/config.php';
include_once PATH_TO_SLIM_LIBRARY."Slim/Slim.php";
include_once 'UsersEndpoint.php';
include_once 'OrdersEndpoint.php';
use Slim\Slim;
\Slim\Slim::registerAutoloader();

// create new Slim instance
$app = new Slim();

$app->get("/", function () {
	echo "<h1>Welcome to Helpman!</h1>";
});

// add new Route
$app->post("/login/", function() use ($app){
	$jsonPayload = $app->request()->getBody();
	$payload = json_decode($jsonPayload, true);
	$userDetails = UsersEndpoint::getUser($payload);
	$response = json_encode($userDetails);
	$app->response()->header("Content-Type", "application/json");
	echo $response;
});

$app->post("/submit-order/", function() use($app) {
	$jsonPayload = $app->request()->getBody();
	$payload = json_decode($jsonPayload, true);
	$orderDetails = OrdersEndpoint::submitRequest($payload);
	$response = json_encode($orderDetails);
	$app->response()->header("Content-Type", "application/json");
	echo $response;
});


$app->post("/register/", function() use($app) {
	$jsonPayload = $app->request()->getBody();
	$payload = json_decode($jsonPayload, true);
	$orderDetails = UsersEndpoint::registerUser($payload);
	$response = json_encode($orderDetails);
	$app->response()->header("Content-Type", "application/json");
	echo $response;
});

$app->get("/orders/user/:userId", function($userId) use($app) {
	$orderList = OrdersEndpoint::getAllOrdersForUser($userId);
	$response = json_encode($orderList);
	$app->response()->header("Content-Type", "application/json");
	echo $response;
});

// run the Slim app
$app->run();