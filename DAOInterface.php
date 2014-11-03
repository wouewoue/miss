<?php
namespace Miss\DAO;

interface DAOInterface {
	
	protected $mysqli;
	private $user="username";
	private $password="password";
	private $database="database";
	private $dBaddress="localhost";
	private function connect(){
		$mysqli = new mysqli('$this->dBaddress','$this->user','$this->password','$this->database');
	}
	private function disconnect(){
		mysqli_close();
	}

	public function __construct () {}
	public function createObject($object){}
	public function getObject($id){}
	public function deleteObject($id){}
	
	
	
	
}


?>