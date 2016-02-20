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


}
