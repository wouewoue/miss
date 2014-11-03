<?php

namespace Miss\DAO;

class DAOFactory {
	
	protected  $userDAO;
	protected  $adminDAO;
	protected  $placeDAO;
	protected  $messDAO;
	
	public function createUserDao(){
		return ($this->userDAO = new UserDAO());
	}
	public function createMessDao(){
		return ($this->messDAO = new MessageDAO());
	}
	public function createPlaceDao(){
		return ($this->placeDAO = new PlaceDAO());
	}
	public function createAdminDao(){
		return ($this->adminDAO = new AdminDAO());
	}
}
?>