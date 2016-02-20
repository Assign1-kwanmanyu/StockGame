<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Player extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->data['pagebody'] = 'Player';

		$playerName = $this->session->userdata['user_id'];

		if (empty($playerName)) {
			redirect('/');
		} else {

			$playerBalance = $this->PlayerModel->getPlayerInformation($playerName);
			$this->data['playerBalance'] = $playerBalance;

			$playerStocks = $this->PlayerModel->getPlayerStocks($playerName);
			$this->data['playerStocks'] = $playerStocks;

			$playerTransactions = $this->PlayerModel->getRecentPlayerTransactions($playerName);
			$this->data['playerTransactions'] = $playerTransactions;

			$this->render();
		}
	}
	public function playerpage($name){
		$this->data['pagebody']='otherplayers';
		//$temp=$this->PlayerModel->getPlayerEquity('Mickey');
		//$info['playinfo']=$name;
		$tempeq= $this->PlayerModel->getPlayerEquity($name);
		$tempeq2= $this->PlayerModel->getAllPlayers();
		$this->data['nameinfo'] = $name;
		$this->data['allInfo'] 	=$tempeq2;
		$this->data['curcash'] = $tempeq[0]->Cash;
		$this->data['cureq'] = $tempeq[0]->Equity;
		//print_r($tempeq);
		//$this->data['curequity'] = $this->PlayerModel->getPlayerEquity($name);
		//print_r($temp);
		//$ad["EquityInfo"]=$this->PlayerModel->getPlayerEquity();
		$this->render();
	}


}
