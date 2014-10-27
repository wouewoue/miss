<?php
class Place
{
	// déclaration d'une propriété
	public $id = 0;
	public $longitude;
	public $latitude;

	// déclaration des méthodes
	
	//Constructeur et fonctions de base de la classe
	public function __construct ($i,$long,$lat) {
		$this->id = $i;
		$this->longitude = $long;
		$this->latitude = $lat;
	}
	public function __construct () {}
	function __destruct() {
		print "Destruction de la place" . $this->id . "\n";
	}
	public function setLong($long){
		$this->longitude = $long;
	}
	public function setLat($lat){
		$this->latitude = $lat;
	}
	public function setID($i){
		$this->id = $i;
	}
	public function setLong($s){
		$this->longitude = $s;
	}
	public function getLong(){
		return $this->longitude;
	}
	public function getLat(){
		return $this->latitude;
	}
	public function getID(){
		return $this->id;
	}
	
}

?>
