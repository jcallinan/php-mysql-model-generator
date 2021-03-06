<?php
class Database {
	public static $dbh;
	private static $config;

	public static function init() {
		self::$config = Core::getConfig('Database');
		$user = self::$config['user'];
		$pass = self::$config['pass'];
		$host = self::$config['host'];
		$db = self::$config['db'];
		self::$dbh = new PDO("mysql:dbname=$db;host=$host", $user, $pass);
		self::$dbh -> exec("SET NAMES 'utf8';");
		self::$dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
}
?>
