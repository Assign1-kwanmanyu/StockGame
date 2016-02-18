<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StockModel extends CI_Model {

	public function getPlayerInfo(){
		$this->db->select('*');
		$this->db->from('players');
		$query=$this->db->get();
		return $query->result_array();
	}
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



