<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller {

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
		
		$this->data['pagebody']='Homepage';
		$this->data['pagetitle']='Homepage';
		$this->data['PlayerInfo']=$this->StockModel->getPlayerInfo();
		$this->data['StockInfo']=$this->StockModel->getStockInfo();


		//get the total number of queries

		//divide the total number by 4 to get the number of rows

		//for loop that goes through and calls getStockInfoRange for each row
		//eg: getStockInfoRange(4,0); getStockInfoRange(4,4); getStockInfoRange(4,8);

		//put those calls into each individual variable

		//pass the number of data variables to the view
		//pass all the data variables to the view

		//then in the view, access the database depending on the number passed in




		$this->data['StockInfo2']=$this->StockModel->getStockInfoRange(4,1);
		////$ad["StockInfo"]=$this->StockModel->getStockInfo();
		//Parse replaces templating with data
		////$this->data['StockInfo']=$this->parser->parse("Anthony",$ad,true);
		//$this->load->view('Homepage', $d2);
		//$this->getPlayerInfo();
		//$this->getStockInfo();
		//$this->getStockInfo();
		$this->render();	
	}



	


}


/*


		/*
		$this->db->select('*');
		$this->db->from('players');
		//$this->db->where('Player','Mickey');
		//var_dump($query);
		$query=$this->db->get();
		//$data=$query->result_array();
		//print_r($query->result());
		//echo($data[0]['Cash']);
		//echo($data[1]['Cash']);
		*/



