<?php
namespace app\models;

class Client extends \app\core\Model{

	function __construct(){
		parent::__construct();
	}

	function get($client_id){
		$SQL = 'SELECT * FROM client WHERE client_id = :client_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['client_id'=>$client_id]);
		//TODO:add something here to make the return types cooler
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Client");
		return $STMT->fetch();
	}

	function getAll(){
		$SQL = 'SELECT * FROM client';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		//TODO:add something here to make the return types cooler
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Client");
		return $STMT->fetchAll();
	}

	function getAnimals(){
		$SQL = 'SELECT * FROM animal WHERE client_id=:client_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['client_id'=>$this->client_id]);
		//TODO:add something here to make the return types cooler
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Animal");
		return $STMT->fetchAll();
	}

	function insert(){
		$SQL = 'INSERT INTO client(first_name,last_name,notes,phone) VALUES(:first_name,:last_name,:notes,:phone)';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['first_name'=>$this->first_name,'last_name'=>$this->last_name,'notes'=>$this->notes,'phone'=>$this->phone]);
	}

	function update(){
		$SQL = 'UPDATE client SET first_name = :first_name, last_name = :last_name, notes = :notes, phone = :phone WHERE client_id = :client_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['first_name'=>$this->first_name,'last_name'=>$this->last_name,'notes'=>$this->notes,'phone'=>$this->phone,'client_id'=>$this->client_id]);
	}

	function delete($client_id){
		$SQL = 'DELETE FROM client WHERE client_id = :client_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['client_id'=>$client_id]);
	}

}