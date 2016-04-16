<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GameModel extends CI_Model {

    public function getGameData(){
        $xml = simplexml_load_file(DATAPATH . 'status');

        $gameState = array();
        $gameState['round'] = (string) $xml->round;
        $gameState['state'] = (string) $xml->state;
        $gameState['countdown'] = (string) $xml->countdown;
        $gameState['desc'] = (string) $xml->desc;

        return $gameState;
    }
/*
    public function getActiveStocks(){

        $xml = simplexml_load_file(DATAPATH . 'data/stocks');

        $activeStocks = array();
        $activeStocks['code'] = (string) $xml->code;
        $gameState['desc'] = (string) $xml->desc;

        return $gameState;

    }
*/



}


