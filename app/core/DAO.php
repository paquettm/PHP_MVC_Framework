<?php
namespace app\core;

class DAO{

	protected static $_connection;
	//connect to the database
	public static function connect(){
		self::$_connection = DBConnection::getInstance();
	}

	//if the function was called and not accessible it must require validation
	public function __callStatic($method_name, $args){
		if(!method_exists(self, $method_name)){
			//call validation and then call the method
			//the first argument of this call should be the data
			if($args[0]->isValid()){
				return self::$method_name($args);
			}
		}else{
			throw(new \Exception("No method {$method_name}!"));
		}
	}

	//must be protected to cause validation
	protected abstract function insert($data);
	protected abstract function update($data);
	//programmer should care to enforce other custom data modificaton
	// operations to also cause validation
}