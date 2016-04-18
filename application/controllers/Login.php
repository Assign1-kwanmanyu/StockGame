<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	function index() {
		redirect('/player');
	}

	function logMeIn() {
		$this->load->model("UserModel");
		$this->load->library('session');

		$isValidPlayer = false;

		$player = $_POST['usr'];
		$pwd = $_POST['password'];

 		$playerList = $this->UserModel->getAllUsers();

	   	foreach ($playerList->result() as $row) {
			//debug_to_console($row->name);

	  		if ($row->name == $player && password_verify($pwd, $row->password)) {
				echo "worked";
				$isValidPlayer = true;
			} else {
				echo "didn't work";
				$isValidPlayer = false;
			}
		} 

		if ($isValidPlayer) {
			echo "PELASE WORK";
			$this->session->set_userdata('user_id', $player);
		} else {
			echo "i am a failure";
		//	redirect('/bye');
		}

		redirect('/');
	
	}
}