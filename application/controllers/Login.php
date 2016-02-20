<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	function index() {
		redirect('/player');
	}

	function logMeIn() {
		$this->load->library('session');

		$isValidPlayer = false;

		$player = $_POST['usr'];

 		$playerList = $this->PlayerModel->getAllPlayers();

	   	foreach ($playerList as $row) {

	  		if ($row['Player'] == $player) {
				$isValidPlayer = true;
				$this->session->set_userdata('user_id', $player); 
			} else {
				$isValidPlayer = false;
			}
		} 

		redirect('/');
	
	}
}