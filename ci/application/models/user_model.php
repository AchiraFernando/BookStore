<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function register($name,$username,$pwd)
    {
        // is username unique?
        $res = $this->db->get_where('users',array('username' => $username));
        if ($res->num_rows() > 0) {
            return 'Username already exists';
        }
        // username is unique
        $hashpwd = sha1($pwd);
        $data = array('name' => $name,'username' => $username,
                      'password' => $hashpwd);
        $this->db->insert('users',$data);
        return null; // no error message because all is ok
    }

    function login($username,$pwd)
    {
        $this->db->where(array('username' => $username,'password' => sha1($pwd)));
        $res = $this->db->get('users',array('name'));

        if ($res->num_rows() != 1) { // should be only ONE matching row!!
                return false;}


        return $res->row_array();
    }

}