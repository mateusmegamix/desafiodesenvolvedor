<?php



class Connectar extends \PDO
{
    
    public static $type = 'mysql';
	private static $host = 'localhost';
	private static $dbname = 'desafio';
	private static $username = 'root';
	private static $password = '';
	private static $charset = 'utf8';
	private static $port = '3306';
	//"DRIVER={MySQL ODBC 5.1 Driver};SERVER=;PORT=3306;DATABASE=interagirc1_2;USER=interagirc1_2;PASSWORD=4GVGd2PUNQTzyP;OPTION=3;"

	public static function create()
	{
		$connString = self::$type . ":host=" . self::$host . ";port=" . self::$port . ";dbname=" . self::$dbname . ";charset=" . self::$charset;
		$dbh = new PDO($connString, self::$username, self::$password);
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $dbh;		
		
	}
}
