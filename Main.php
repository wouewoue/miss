<?php

use Miss\DAO\DAOFactory;
/* Variables */
	$dao = new DAOFactory();
	$bo = new BusinessObject();
	
	$place = new Place(1, 35, 77);
	$user = new User(0, "toto", "pass", $place, 2, [tralala,pouet,pouet],$dao);
	
	

?>