<?php
class User
{
	// déclaration d'une propriété
	public $id = 0;
	public $name = 'trololo';
	public $pwd;
	public $broadcast = 0;		//mode annonce broadcast activé si 0 et désactivé si 1
	public $place;
	public $friendList;			// liste d'amis
	public $messageList;  		//Liste de message à renvoyer à l'utilisateur

	// déclaration des méthodes
	
	//Constructeur de la classe
	public function __construct ($b) {
	}
}
?>
