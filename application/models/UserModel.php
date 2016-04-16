<?php
/**
 * Created by PhpStorm.
 * User: Oscar
 * Date: 4/15/2016
 * Time: 2:23 PM
 */


class UserModel extends CI_Model {

    public function __construct()
    {
        parent::__construct('users', 'id');
    }

    function addUser($user, $pw) {
        $this->load->database();

        $userData = array(
            'name' => $user,
            'password' => $pw
        );

        echo "HELLO ITS ME";
        $this->db->insert('users', $userData);
    }

    function getAllUsers() {
        $this->load->database();
        $this->db->select('*');
        $this->db->from('users');
        $query=$this->db->get();
        return $query;
    }

}
