<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StockModel extends CI_Model {


	
	//
	public function getPlayerInfo(){
		$this->db->select('*');
		$this->db->from('players');
		$query=$this->db->get();
		return $query->result_array();
		/*
		echo "<h2>Player Information </h2>";
		echo "<table>";
		foreach ($query->result_array() as $row)
		{
			echo "<tr>";
			echo "<td>";
  	 		echo $row['Player'];
  	 		echo "</td>";
  	 		echo "<td>";
   			echo $row['Cash'];
   			echo "</td>";
   			echo "</tr>";

		}
		echo "</table>";
		*/


	}
	public function getStockInfo(){
		$this->db->select('*');
		$this->db->from('stocks');
		$query=$this->db->get();
		return $query->result_array();
		/*
		echo "<h2>Stock information</h2>";
		echo "<table>";
		foreach ($query->result_array() as $row)
		{
			echo "<tr>";
			echo "<td>";
  	 		echo $row['Code'];
  	 		echo "</td>";
  	 		echo "<td>";
   			echo $row['Name'];
   			echo "</td>";
   			echo "<td>";
   			echo $row['Category'];
   			echo "</td>";
   			echo "<td>";
   			echo $row['Value'];
   			echo "</td>";
   			echo "</tr>";
		}
		echo "</table>";
		*/

	}

	public function getStockInfoRange($count, $from){
		$this->db->select('*');
		$this->db->from('stocks');
		$this->db->limit($count,$from);
		$query=$this->db->get();
		return $query->result_array();
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



