<?php

class sql extends PDO{

	private $conn;

	public function __construct(){

		//$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
		//$this->conn = new PDO("mysql:host=dbphp7.mysql.dbaas.com.br;dbname=dbphp7", "dbphp7", "Sab@1720");
		$this->conn = new PDO("mysql:host=sisouv_db.mysql.dbaas.com.br;dbname=sisouv_db", "sisouv_db", "Sab@1720");

	}

	private function setParams($statment, $parameters = array()){


		foreach ($parameters as $key => $value) {

			$this->setParam($statment, $key, $value);
		}


	}

	private function setParam($statment, $key, $value){

		$statment->bindParam($key, $value);

	}

	public function query($rawQuery, $params = array()){

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;
	}

	public function select($rawQuery, $params = array()):array
	{

		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchALL(PDO::FETCH_ASSOC);
	}


}

?>