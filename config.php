<?php
define("ROOT", $_SERVER['DOCUMENT_ROOT']."/Helpman/");      // path to directory

define("SITE_URL", "http://".$_SERVER['HTTP_HOST'].'/Helpman/');

define("SQL_USER", "root");           						// Database username
define("SQL_PASS", "");           									// Database password
define("SQL_DB", "helpman");     							// Database name

define("SQL_HOST", "localhost");        					// Database host

define("DEBUG", false);

define("PATH_TO_DAO", ROOT."dao/");
define("PATH_TO_PDO", ROOT."pdo/");
define("PATH_TO_SLIM_LIBRARY", ROOT."libs/Slim/");
