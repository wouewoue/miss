<?php
use Miss\DAO\DAOFactory;
class User
{
	// déclaration d'une propriété
	public $id = 0;
	public $name = 'trololo';
	public $pwd;
	public $broadcast = 0;		//mode annonce broadcast activé si 0 et désactivé si 1
	public $place;
	public $friendList;			// liste d'amis
	public $friendRequestList;	// Liste de requête d'amis.
	public $messageList;  		//Liste de message à renvoyer à l'utilisateur
	
	protected $userDao;
	protected $dao;
	// déclaration des méthodes
	
	//Constructeur de la classe
	public function __construct ($b,$nom,$pass,$place,$broad,$endroit,$amiListe, $request, $messList, $da) {
	 	$this->id=$b;
	 	$this->name=$nom;
	 	$this->pwd=$pass;
	 	$this->broadcast=$broad;
	 	$this->friendList=$amiListe;
	 	$this->friendRequestList=$request;
	 	$this->messageList=$messList;
	 	$this->place=$place;
	 	$this->userDao = $da->createUserDao();
	}
	public function  __construct($da){
		$this->place = new Place();
		$this->userDao = $da->createUserDao();
	}
	public function __construct($b,$nom,$pass,$place,$broad,$amiListe, $da){
		$this->id=$b;
		$this->name=$nom;
		$this->pwd=$pass;
		$this->broadcast=$broad;
		$this->friendList=$amiListe;
		$this->place=$place;
		$this->userDao = $da->createUserDao();
		
	}
	
	
	/* ************* METHODS **************** */
	public function refreshFriendList(){	
			
	}
	public function refreshFriendRequestList(){
		
	}

	public function deleteAccount(){
		
	}
	public function blacklistMessage(){
		
	}
	
	//Getter et settes
	public function setID($a){
		$this->id=$a;
	}
	public function setName($a){
		$this->name=$a;
	}
	public function setPwd($a){
		$this->pwd=$a;
	}
	public function setPlace($a){
		$this->place=$a;
	}
	public function setBroad($a){
		$this->broadcast=$a;
	}
	public function setFriendList($a){
		$this->friendList = $a;
	}
	public function setFriendRequestList($a){
		$this->friendRequestList=$a;
	}
	public function setMessageList($a){
		$this->messageList=$a;
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
	public function getPlace(){
		return $this->place;
	}
	public function getBroad(){
		return $this->broadcast;
	}	
	public function getFriendList(){
		return $this->friendList;
	}	
	public function getFriendRequestList(){
		return $this->friendRequestList;
	}
	public function getMessageList(){
		return $this->messageList;
	}
	
}
?>
