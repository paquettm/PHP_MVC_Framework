<?php
namespace app\core;

class Model{

	protected static $_connection;
	//connect to the database
	function __construct(){
		self::$_connection = DBConnection::getInstance();
	}

	function isValid(){//aplication of all validators on the object properties
		$reflection = new \ReflectionObject($this);
		//find the properties
		$classProperties = $reflection->getProperties();
		foreach ($classProperties as $property) {
			$propertyAttributes = $property->getAttributes();
			foreach ($propertyAttributes as $attribute) {
				$test = $attribute->newInstance();
				if(!$test->valid($property->getValue($this)))
					return false;
			}
		}
		return true;
	}

}