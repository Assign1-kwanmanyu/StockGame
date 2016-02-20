<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Logout extends MY_Controller
{
  function index()
  {
    $this->session->unset_userdata('user_id');
    $this->session->sess_destroy();
    redirect('/');
  }
}