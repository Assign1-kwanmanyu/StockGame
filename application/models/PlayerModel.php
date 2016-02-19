<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PlayerModel extends CI_Model {

    public function getPlayerInfo(){
        $this->db->select('*');
        $this->db->from('players');
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



