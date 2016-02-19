<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends MY_Controller {

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
		$ad["StockInfo"]=$this->StockModel->getStockInfo();
		$this->data['StockInfo'] = $this->StockModel->getStockInfo();

		$mostRecentStock = $this->StockModel->getMostRecentStock();
		$this->data['SelectedStockTransactions'] = $this->StockModel->getSelectedStockTransactions($mostRecentStock[0]['Stock']);

		//Parse replaces templating with data
		$this->data['StockInfo']=$this->parser->parse("Anthony",$ad,true);
		$this->render();
	}

	public function getSelectedStock($stock)
	{
		$selectedStock = $this->StockModel->getSelectedStockTransactions($stock);
		//print_r($selectedStock);
		$this->data['pagebody']='StockHistory';
		$this->data['title'] = $stock;
		$this->data['stock'] = $selectedStock;
		$this->render();
	}

	public function getMostRecentStock(){
		$mostRecentStock = $this->StockModel->getMostRecentStock();
		$mostRecentStockTransactions = $this->StockModel->getSelectedStockTransactions($mostRecentStock[0]['Stock']);
		$this->data['pagebody']='StockHistory';
		$this->data['title'] = "Most Recent Stock";
		$this->data['stock'] = $mostRecentStock;
		$this->data['stockTransactions'] = $mostRecentStockTransactions;
		$this->render();
	}


}
