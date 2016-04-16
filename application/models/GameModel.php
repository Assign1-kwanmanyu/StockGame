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

    public function getActiveStocks(){
    	/*
		$url = 'http://bsx.jlparry.com/data/stocks';
		$data = array( );

		// use key 'http' even if you send the request to https://...
		$options = array(
		    'http' => array(
		        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
		        'method'  => 'POST',
		        'content' => http_build_query($data)
		    )
		);
		$context  = stream_context_create($options);
		$result = file_get_contents($url, false);
		if ($result == FALSE) { /* Handle error  }


		$actStocks = array();	
		$actStocks =str_getcsv ( string $result [, string $delimiter = "," [, string $enclosure = '"' [, string $escape = "\\" ]]] )
		//$gameState['stockinfo']=
		return $actStocks;
		//var_dump($result);
		*/


		$url = "http://bsx.jlparry.com/data/stocks";
		$csv = file_get_contents($url);
		$csvData = file_get_contents($csv);
		$lines = explode(PHP_EOL, $csvData);
		$array = array();
		foreach ($lines as $line) {
		    $array[] = str_getcsv($line);
		}
		print_r($array);
    }




}


