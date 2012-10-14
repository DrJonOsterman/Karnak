<?php
class dbAccess
{
	private static $instance = false;
	private static $host 	  = 'localhost';
	private static $sn 		  = 'tester';
	private static $pwd 	  = 'pass';
	private static $db 		  = 'karnak';
	
	public function connect()
	{
		$dbhandle = mysql_connect(self::$host, self::$sn, self::$pwd) or die("Unable to connect to MySQL");
		echo "Connected to MySQL<br>";

		$selected = mysql_select_db(self::$db, $dbhandle) or die("Could not select ".$db.".");
		echo "Connected to Database \"Karnak\"<br>";
	}
		
	private function __construct(){}
	
	public static function getInstance()
	{
			if (self::$instance === false)
			{
				self::$instance = new dbAccess;
			}
		return self::$instance;
	}
}
//  usage
// $dab = dbAccess::getInstance();
// $dab->connect();

 $dab = dbAccess::getInstance();
 $dab->connect();



?>