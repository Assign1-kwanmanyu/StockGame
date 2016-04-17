<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stocks extends MY_Controller {

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
        $this->data['pagebody']='Stocks';
        $this->data['currentStocks']=$this->StockModel->getCurrentStocks();

        $this->render();
    }

    public function getAgentToken(){
        $url = 'http://www.comp4711bsx.local/register';
        $data = array('team' => "o01",
            'name' => "x3",
            'password' => "tuesday"
        );

        // use key 'http' even if you send the request to https://...
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        if ($result === FALSE) { return "unavailable"; }

        $xml = simplexml_load_string($result);

        return $xml->token;

    }


}
