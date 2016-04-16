<?php
/**
 * Created by PhpStorm.
 * User: Oscar
 * Date: 4/15/2016
 * Time: 3:51 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller
{
    function index() {
        // redirect('/player');
       // $this->data['pagebody'] = 'Register';
        $this->data['errorMsg'] = "";
       // $this->render();
    }

    function runThis() {
        $this->load->model("UserModel");

        $good = true;

        if ($_POST['usr'] == "") {
            $this->data['errorMsg'] = "abc";
            $good = false;
        }

        if ($_POST['pwd'] != $_POST['confirmPwd']) {
            $good = false;
        }

        if ($good) {
            $this->UserModel->addUser($_POST['usr'], password_hash(($_POST['pwd']), PASSWORD_DEFAULT));
        }

        redirect('/player');
    }

}