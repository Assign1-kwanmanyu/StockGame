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
		//$this->getPlayerInfo();


		$this->getPlayerInfo();
		$this->getStockInfo();
		//$this->getStockInfo();
		$this->render();	
	}

	
	//
	public function getPlayerInfo(){
		$this->db->select('*');
		$this->db->from('players');
		$query=$this->db->get();
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


	}
	public function getStockInfo(){
		$this->db->select('*');
		$this->db->from('stocks');
		$query=$this->db->get();
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



