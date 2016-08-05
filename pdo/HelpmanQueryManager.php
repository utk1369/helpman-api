<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/Helpman/config.php';
include_once 'dbConnect.php';

class HelpmanQueryManager {
	public static $dbHandle;
	
	public static function getDbHandle() {
		return (self::$dbHandle==null) ? (DbConnect::getDatabaseHandle()):(self::$dbHandle);
	}
	
	public static function getResultSetAsAssociativeArrays($parameters, $query) {
		self::$dbHandle = self::getDbHandle();
		$statementHandle = self::$dbHandle->prepare($query);
		$statementHandle->execute($parameters);
		return $statementHandle->fetchAll(PDO::FETCH_ASSOC);
	}
	
	public static function insertIntoTable($parameters,$query) {
		self::$dbHandle = self::getDbHandle();
		$statementHandle = self::$dbHandle->prepare($query);
		$statementHandle->execute($parameters);
		return self::$dbHandle->lastInsertId();
	}
	
	public static function updateRowInTable($parameters, $query) {
		self::$dbHandle = self::getDbHandle();
		$statementHandle = self::$dbHandle->prepare($query);
		return $statementHandle->execute($parameters);
	}
	
	/* public static function deleteRowFromTable($parameterArray, $query) {
		try {
			self::$dbHandle = (self::$dbHandle == null) ? (DB_Connection::getDatabaseHandle()):(self::$dbHandle);
			$statementHandle = self::$dbHandle->prepare($query);
			return $statementHandle->execute($parameterArray);
		}
		catch (Exception $e) {
			$logMessage = 'QUERY: '.$query.'\nERROR: '.$e->getMessage();
			Logger::writeMessageToErrorLog('ToolkitQuery.php',$logMessage);
		}
	} */
}
