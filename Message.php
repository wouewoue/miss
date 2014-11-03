<?php

class Message
{
	// déclaration d'une propriété
	public $id = 0;
	public $sender = 0;
	public $place;
	public $perimeter = 0;
	public $content;
	public $creation;
	public $extraOptions;
	public $timeToLive;
	protected $dao;

	// déclaration des méthodes
	
	//Constructeur de la classe
	public function __construct ($b,$perim, $mess, $time, $extraOptions, $ttl, $da) {
		$this->id = $b;
		print "Création du message" . $this->id. "\n";
		$place = new Place();
		$this->perimeter = $perim;
		$this->content = $mess;
		$this->creation = new DateTime($time);
		$this->extraOptions = $extraOptions;
		$this->timeToLive = $ttl;
		$this->dao = $da->createMessDao();
	}
	public function __construct ($b,$da) {
		$this->id = $b;
		$this->dao = $da->createMessDao();
		
	}
	//$obj = new Message();
	
	//Destructeur de la classe
	function __destruct() {
		print "Destruction de " . $this->id . "\n";
	}
	//Changer l'id du message
	public function setID($a) {
		$this->id = $a;
		echo $this->id;
	}
	public function getID() {
		return $this->id;
	}
	public function setPerimeter($a){
		$this->perimeter = $a;
		echo $this->perimeter;
	}
	public function getPerimeter(){
		return $this->perimeter;
	}	
	public function setSender($a) {
		$this->sender = $a;
		echo $this->sender;
	}
	public function getSender() {
		return $this->sender;
	}
	public function setPlace($a) {
		$this->place = $a;
		echo $this->place;
	}
	public function getPlace() {
		return $this->place;
	}
	public function setPerimeter($a) {
		$this->perimeter = $a;
		echo $this->perimeter;
	}	
	public function getPerimeter() {
		return $this->perimeter;
	}
	public function setContent($a) {
		$this->content = $a;
		echo $this->content;
	}
	public function getContent() {
		return $this->content;
	}
	public function getExtraOptions(){
		return $this->extraOptions;
	}
	public function setExtraOptions($a){
		$this->extraOptions = $a;
	}
	public function setTimeToLive($a){
		$this->timeToLive = $a;
	}
	public function getTimeToLive(){
		return $this->timeToLive;
	}
}
?>
