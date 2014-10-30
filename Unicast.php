<?php

/*
 * A unicast message is a personnal message.
 */

class Unicast extends Message 
{
	public $receiver; 

	public function setReceiver($a){
		$this->receiver = $a;
	}
	public function getReceiver(){
		return $this->receiver;
	}

}

?>