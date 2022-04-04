<?php
namespace app\models;

class AddressAPI extends \app\core\Model{

	#[\app\validators\NonEmpty]
	var $postal;
	#[\app\validators\NonEmpty]
	var $result;

	function __construct(){
		parent::__construct();
	}

	function find($postal){
		$SQL = 'SELECT * FROM AddressAPI WHERE postal = :postal';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['postal'=>$postal]);
		//TODO:add something here to make the return types cooler
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\AddressAPI");
		return $STMT->fetch();
	}

	function insert(){
		if($this->isValid()){//call to validation
			$SQL = 'INSERT INTO AddressAPI(postal,result) VALUES(:postal,:result)';
			$STMT = self::$_connection->prepare($SQL);
			$STMT->execute(['postal'=>$this->postal,'result'=>$this->result]);
		}	
	}

}