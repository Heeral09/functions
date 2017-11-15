<?php

class Database {

private static $dsn = 'mysql:host=sql1.njit.edu;dbname=hp336';
private static $username = 'hp336';
private static $password = 'VrajHeeral';
private static $db;
private function _construct() {}
public static function getDB (){
  if(!isset(self::$db)){ 
  try {
        self::$db = new PDO(self::$dsn,self::$username,self::$password);
	      echo "Connected successfully";  
    }catch(PDOException $e)
      {
    	  echo "Connection failed: " . $e->getMessage();
        exit();
      }
    }
    return self::$db;
    }
}
 
?>