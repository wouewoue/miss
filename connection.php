<?php

class connection {
	
	private $username = "a7283594_mits";
	private $password = "molimo1";
	private $hostname = "mysql14.000webhost.com";
	private $dbname = "a7283594_mits";
	
	public function connect(){
		$connection = mysql_connect($hostname, $username, $password) or die ('Error connecting to mysql');
		mysql_select_db($dbname);
	}

}

?>