<?php
namespace Miss\BO;

class BusinessObject {
	
    private $a;
	public function __construct () {}
	
	
	//echo $state;
	function userRegistration() {
		//Fetching Values from URL
		$name2 = $_POST['name1'];
		$email2 = $_POST['email1'];
		$login2 = $_POST['login1'];
		$password2 = $_POST['password1'];
		$contact2 = $_POST['contact1'];
		// Establishing connection with server..
		$connection = mysql_connect("localhost", "root", "");
		// Selecting Database
		$db = mysql_select_db("mobileapp", $connection);
		if (isset($_POST['name1'])) {
			//Insert query
			$query = mysql_query("insert into form_element(name, email, login, password, contact) values ('$name2', '$email2', '$login2', '$password2','$contact2')");
			echo "Form Submitted successfully";
		}
		//connection closed
		mysql_close($connection);
	}
	
	function userAuthentication() {
		//Fetching Values from URL
		$login2 = $_POST['login1'];
		$password2 = $_POST['password1'];
		// Establishing connection with server..
		$connection = mysql_connect("localhost", "root", "");
		// Selecting Database
		$db = mysql_select_db("mobileapp", $connection);
		if (isset($_POST['login1'])) {
			//Search user in users table
			$query = mysql_query("select * from form_element WHERE login='$login2' AND password='$password2'");
	
			if (mysql_num_rows($query) == 1) {
				//echo "Successfully Connected";
				echo "OK";
				exit;
			}else{
				//echo "Error connection";
				echo "KO";
			}
		}
		//connection closed
		mysql_close($connection);
	}
	
	
	function manageUserMessgae() {
		//Fetching Values from URL
		$messagetype2 = $_POST['messagetype1'];
		$message2 = $_POST['message1'];
		$latitude2 = $_POST['latitude1'];
		$longitude2 = $_POST['longitude1'];
		// Establishing connection with server..
		$connection = mysql_connect("localhost", "root", "");
		// Selecting Database
		$db = mysql_select_db("mobileapp", $connection);
		if (isset($_POST['message1'])) {
			//Search user in users table
			$query = mysql_query("insert into messages (messagetype, message, latitude, longitude)  values ('$messagetype2', '$message2', '$latitude2', '$longitude2')");
			//echo "Successfully Connected managing message";
			echo $latitude2;
			echo $longitude2;
		}
		//connection closed
		mysql_close($connection);
	}
	/**
	 switch ($state2) {
	 case "REGISTRATION":
	 //echo "registration";
	 userRegistration();
	 break;
	 case "AUTHENTICATION":
	 //echo "authentication";
	 userAuthentication();
	 break;
	 case "SENDMESSAGE":
	 manageUserMessgae();
	 break;
	 }
	 *
	 */

	//manageUserMessgae();
	//userRegistration();
}
?>