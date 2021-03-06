<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StockHistory extends MY_Controller {

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
		$this->data['pagebody']='StockHistory';

//		$test = $this->StockModel->getSelectedStockTransactions("DHS");
//		$test2 = $this->StockModel->getSelectedStockMovement("IND");
//
//
//
//		print_r($test2);
/*
		$activestocks= $this->GameModel->getActiveStocks();
		var_dump($activestocks);
		echo "test";
		*/
//
//		$mostRecentStock = $this->StockModel->getMostRecentStock();
//		$this->data['SelectedStockTransactions'] = $this->StockModel->getSelectedStockTransactions($mostRecentStock[0]['Stock']);
//
//		//Parse replaces templating with data
//		$this->data['StockInfo']=$this->parser->parse("Anthony",$ad,true);
		$this->render();
	}

	public function getSelectedStock($stock)
	{
		$selectedStock = $this->StockModel->getSelectedStockTransactions($stock);
		$activestocks= $this->StockModel->getCurrentStocks();
		$movements = $this->StockModel->getSelectedStockMovement($stock);
		$this->data['pagebody']='StockHistory';
		$this->data['title'] = $stock;
		$this->data['stock'] = $selectedStock;
		$this->data['actStocks'] = $activestocks;
		$this->data['movement'] = $movements;
		$this->render();
	}

	public function getMostRecentStock(){

		$activestocks= $this->StockModel->getCurrentStocks();
		//var_dump($activestocks);
		$mostRecentStock = $this->StockModel->getMostRecentStock();
		$movements = $this->StockModel->getSelectedStockMovement($mostRecentStock[0]['Stock']);
		$this->data['pagebody']='StockHistory';
		$this->data['title'] = "Most Recent Stock";
		$this->data['stock'] = $mostRecentStock;
		$this->data['actStocks'] = $activestocks;
		$this->data['movement'] = $movements;
		$this->render();
	}


}
