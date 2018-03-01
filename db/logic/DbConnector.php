<?php



namespace DB;
use PDO;


 class DbConnector {

	private static $dbase;
    private function __construct() {

    }

	 static function Load($nameDB,$login,$pass){
    	if (isset($dbase) == false){
				$dbase = new PDO("mysql:host=127.0.0.1;dbname=$nameDB", $login,$pass);
				return $dbase;
		}else return self::$dbase;
	}



}