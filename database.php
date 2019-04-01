<?php
class Database 
{
	
	// CSIS db variables
/* 	private static $dbName = 'bmricha4355wi19' ; 
	private static $dbHost = '10.8.30.49' ;
	private static $dbUsername = 'bmricha4355wi19';
	private static $dbUserPassword = '159357bb'; */
	

	// Local db variables
/* 	private static $dbName = 'cis355' ; 
	private static $dbHost = 'localhost' ;
	private static $dbUsername = 'root';
	private static $dbUserPassword = ''; */

	// 000webhost variables
	private static $dbName = 'id6987810_cis355'; 
	private static $dbHost = 'localhost' ;
	private static $dbUsername = 'id6987810_bmricha4';
	private static $dbUserPassword = '159357bb';

	private static $dbConnection  = null;
	
	public function __construct() {
		exit('Init function is not allowed');
	}
	
	// Returns instance of PDO class
	public static function connect()
	{
	   // One connection through whole application
       if ( null == self::$dbConnection )
       {      
        try 
        {
          self::$dbConnection =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);  
        }
        catch(PDOException $e) 
        {
          die($e->getMessage());  
        }
       } 
       return self::$dbConnection;
	}
	
	public static function disconnect()
	{
		self::$dbConnection = null;
	}
}
?>