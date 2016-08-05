<?php
include_once "libs/Slim/Slim/Slim.php";
use Slim\Slim;
\Slim\Slim::registerAutoloader();

// create new Slim instance
$app = new Slim();

// add new Route
$app->get("/", function () {
	echo "<h1>Hello Slim World</h1>";
});

// run the Slim app
$app->run();