<?php

class Admin {

	public $id;
	public $name;
	public $pwd;
	protected $dao;
	
	// Constructeurs & destructeurs
	public function __construct ($i,$nom,$pass,$da) {
		$this->id = $i;
		$this->name = $nom;
		$this->pwd = $pass;
		$this->dao = $da->createAdminDao();
	}
	
	/*  *********** Methods ***********  */
	public function getStatistics(){
		
	}
	public function getBlackList(){
		
	}
	public function updateBlackList(){
		
	}
	public function createAdminAccount(){
		
	}
	public function getUserList(){
		
	}
	public function findUser(){
		
	}
	public function deleteUser(){
		
	}
	public function deleteAccount(){
		
	}
	
	//Getter & Setters
	public function setID($a){
		$this->id=$a;
	}
	public function setName($a){
		$this->name=$a;
	}
	public function setPwd($a){
		$this->pwd=$a;
	}
	public function getID(){
		return $this->id;
	}
	public function getName(){
		return $this->name;
	}
	public function getPwd(){
		return $this->pwd;
	}


}
?>