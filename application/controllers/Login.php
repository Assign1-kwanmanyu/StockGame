<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	function index() {
		/*$player = $_POST['usr'];

 		$playerList = $this->PlayerModel->getPlayerInfo();

	    foreach ($playerList as $row) {
	    	if ($row->Player == $_POST['usr']) {
				$this->session->set_userdata('usr', $_POST['usr']);
			}
		}
		print_r($this->session);*/
		redirect('/player');
	}

	function sexme() {
		$this->load->library('session');

		$player = $_POST['usr'];

	/* $this->session->set_userdata(array(
									'user_id' => $_POST['usr'])); */

 		$playerList = $this->PlayerModel->getAllPlayers();

 		print_r($playerList);
	   	print_r($_POST['usr']);

	   	foreach ($playerList as $row) {
	   			print_r($row);
	   
	  		 if ($row['Player'] == $player) {
				echo 'fireworks';
				$this->session->set_userdata('user_id', $player); 
			} 
		} 
		redirect('/');
	}
}