<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StockModel extends CI_Model {

	public function getStockInfo(){
		$this->db->select('*');
		$this->db->from('stocks');
		$query=$this->db->get();
		return $query->result_array();
	}

	public function getStockInfoRange($count, $from){
		$this->db->select('*');
		$this->db->from('stocks');
		$this->db->limit($count,$from);
		$query=$this->db->get();
		return $query->result_array();
	}

	public function getTotalStockNum(){
		$this->db->select('*');
		$this->db->from('stocks');
		$query=$this->db->get();
		return $query->num_rows();
	}

	public function getMostRecentStock(){
		//SELECT * FROM transactions INNER JOIN stocks ON transactions.Stock = stocks.Code ORDER BY DateTime DESC Limit 1

		$this->db->select('*');
		$this->db->from('transactions');
		$this->db->join('stocks','stocks.Code = transactions.Stock', 'inner');
		$this->db->order_by('Datetime', 'desc');
		$this->db->limit(1);
		$query=$this->db->get();
		return $query->result_array();
	}

	public function getSelectedStockTransactions($stockCode){
		//SELECT * FROM stocks LEFT JOIN transactions ON stocks.Code = transactions.Stock where stock = $stockCode

		$this->db->select('*');
		$this->db->from('stocks');
		$this->db->join('transactions','transactions.Stock = stocks.Code', 'left');
		$this->db->where('Code', $stockCode);
		$this->db->order_by('Datetime', 'desc');
		$query=$this->db->get();
		return $query->result_array();
	}

	public function getSelectedStockMovement($stockCode){
		//SELECT * FROM movements WHERE (Stock = 'GOLD')
		$this->db->select('*');
		$this->db->from('movements');
		$this->db->where('Stock', $stockCode);
		$this->db->order_by('Datetime', 'desc');
		$query=$this->db->get();
		return $query->result_array();
	}
}

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



