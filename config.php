<?php
define("ROOT", $_SERVER['DOCUMENT_ROOT']."/Helpman/");      // path to directory

define("SITE_URL", "http://".$_SERVER['HTTP_HOST'].'/Helpman/');

define("SQL_USER", "sql6152814");           						// Database username
define("SQL_PASS", "Ty5pn8MDfV");           									// Database password
define("SQL_DB", "sql6152814");     							// Database name

define("SQL_HOST", "sql6.freemysqlhosting.net");        					// Database host

define("DEBUG", false);

define("PATH_TO_DAO", ROOT."dao/");
define("PATH_TO_PDO", ROOT."pdo/");
define("PATH_TO_SLIM_LIBRARY", ROOT."libs/Slim/");
