<?php 
namespace app\core;

class DBConnection{

	static $connection = null;

	private function __construct(){
		if(self::$connection == null){
			//fetch environment variables from .env
			$dotenv = \Dotenv\Dotenv::createImmutable(getcwd());
			$dotenv->load();
			$host = $_ENV['db_host'];
			$DBname = $_ENV['db_name'];
			$user = $_ENV['db_user'];
			$password = $_ENV['db_pass'];
			self::$connection = new \PDO("mysql:host=$host;dbname=$DBname", $user, $password);
		}
	}

	public static function getInstance(){
		new DBConnection();
		return self::$connection;
	}

}