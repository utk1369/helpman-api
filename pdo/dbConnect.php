<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/Helpman/config.php';

class DbConnect {
		
	public static function getDatabaseHandle() {
		try {
			$dbHandle = new PDO("mysql:host=".SQL_HOST.";dbname=".SQL_DB."",SQL_USER,SQL_PASS,
						array(
			                  PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
			                  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			                  PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
			              ));
		}
		catch(PDOException $e) {
			//Logger::writeMessageToErrorLog(__FILE__, $e->getMessage());
			//write error message in log.
			die($e->getMessage());
		}
		return $dbHandle;
	}		
}
