<?php
namespace Miss\DAO;

class UserDAO implements DAOInterface {
	

	private $tableOfUsers = "Users";
	
	public function __construct () {
		connect();

		/* check connection */
		if ($mysqli->connect_errno) {
			printf("Connect failed: %s\n", $mysqli->connect_error);
			exit();
		}
	}
	public function __destruct(){
		disconnect();
	}
	
	
	public function createObject($object){
		
		$nam = $object->name;
		$pass = $object->pwd;
		$broad = $object->broadcast;		//mode annonce broadcast activé si 0 et désactivé si 1
		$query = "INSERT INTO "+$this->tableOfUsers+" VALUES (LAST_INSERT_ID(),'$nam','$pass','$broad')";
		$mysqli->query($query);
		// récupération de l'ID de l'utilisateur après l'avoir crée.
		$object->id = $mysqli->insert_id;
	}
	
	public function getObject($id){
		$result = $mysqli->query("SELECT * FROM "+$this->tableOfUsers, MYSQLI_USE_RESULT);
		echo $result;
	}
	public function setObject(){
		
	}
	public function deleteObject($id){
		
	}
	
	// Function when the user asks a new friend, this function adds the friend request to the future frien list.
	public function refreshFriendRequestList($id){}
	// Function used when the user accepts a friend request. => update the friend list
	public  function  refreshFriendList($id){}
	// When the user object is created, we need to get his friends' list.
	public function getFriendList($id){}
	//Idem for his friend request list
	public function getFriendRequestList($id){
	
	}
	
	public function deleteUserAccount($id){}
	public function blackListMessage($id){}
	
	//Functions to get messages
	public function getUnicastMessage($param){}
	public function getAnycastMessage($param){}
	public function getBroadcastMessage($parm){}
	

	
}