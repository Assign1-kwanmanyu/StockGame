<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PlayerModel extends CI_Model {

    public function getAllPlayers(){
        $this->db->select('*');
        $this->db->from('players');
        $query=$this->db->get();
        return $query->result_array();
    }

    public function getPlayerInformation($playerName){
        $this->db->select('*');
        $this->db->from('players');
        $this->db->where('Player', $playerName);
        $query=$this->db->get();
        return $query->result_array();
    }

    public function getPlayerStocks($playerName){
        $this->db->select('*');
        $this->db->from('playerHoldings');
        $this->db->where('Player', $playerName);
        $query=$this->db->get();
        return $query->result_array();
    }

    public function getRecentPlayerTransactions($playerName){
        $this->db->select('*');
        $this->db->from('transactions');
        $this->db->where('Player', $playerName);
        $query=$this->db->get();
        return $query->result_array();
    }
}



