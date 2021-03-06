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

		//get current stocks
		$query = $this->getCurrentStocks();

		//iterate through it to make sure that stock code exists
//		foreach($query as $row){
//			if($row['code'] == $stockCode){
//				echo $row['code'];
//			}
//		}

		$recentTransactions = $this->getRecentStockTransactions();
//		print_r($recentMovements);

		$recentTransactionArray = array();

		if(isset($recentTransactions)){
			foreach($recentTransactions as $row){
				if($row['stock'] == $stockCode){
					array_push($recentTransactionArray, $row);
				}
			}
		} else {
			return array();
		}

//		print_r($recentTransactionArray);
		return $recentTransactionArray;
	}

	public function getSelectedStockMovement($stockCode){

		//get current stocks
		$query = $this->getCurrentStocks();

		//iterate through it to make sure that stock code exists
//		foreach($query as $row){
//			if($row['code'] == $stockCode){
//				echo $row['code'];
//			}
//		}

		$recentMovements = $this->getRecentStockMovements();
//		print_r($recentMovements);

		$recentMovementArray = array();

		foreach($recentMovements as $row){
			if($row['code'] == $stockCode){
				array_push($recentMovementArray, $row);
			}
		}

//		print_r($recentMovementArray);
		return $recentMovementArray;
	}

	public function getCurrentStocks(){

		$query = $this->ImportCSV2Array(DATAPATH . 'data/' . 'stocks', "r");
		if($query != null)
			return $query;

//		$csvResource = fopen(DATAPATH . 'data/' . 'stocks', "r");
//
//		$csvArray = array();
//
//		$row = 0;
//		while(!feof($csvResource)){
//			$csvArray[$row++] = fgetcsv($csvResource);
//		}
//
////		print_r($csvArray);
//		fclose($csvResource);
//
//		return $csvArray;
	}

	public function getRecentStockMovements(){
		$query = $this->ImportCSV2Array(DATAPATH . 'data/' . 'movement', "r");
		if($query != null)
			return $query;
	}

	public function getRecentStockTransactions(){
		$query = $this->ImportCSV2Array(DATAPATH . 'data/' . 'transactions', "r");
		if($query != null)
			return $query;
	}

	public function ImportCSV2Array($filename)
	{
		$row = 0;
		$col = 0;

		$handle = @fopen($filename, "r");
		if ($handle)
		{
			while (($row = fgetcsv($handle, 4096)) !== false)
			{
				if (empty($fields))
				{
					$fields = $row;
					continue;
				}

				foreach ($row as $k=>$value)
				{
					$results[$col][$fields[$k]] = $value;
				}
				$col++;
				unset($row);
			}
			if (!feof($handle))
			{
				echo "Error: unexpected fgets() failn";
			}
			fclose($handle);
		}

		if(isset($results)){
			return $results;
		}
	}

}


