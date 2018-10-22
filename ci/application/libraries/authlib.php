<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authlib {

 function __construct()
 {
     $this->ci = &get_instance();
     $this->ci->load->model('user_model');
 }


 public function register($name,$user,$pwd,$conf_pwd)
 {
     if ($name == '' || $user == '' || $pwd == '' || $conf_pwd == '') {
         return 'Missing field';
     }
     if ($pwd != $conf_pwd) {
         return "Passwords do not match";
     }
     return $this->ci->user_model->register($name,$user,$pwd);
 }

 public function login($user,$pwd){

	if ($user == '' || $pwd == '') {return false;}

	return $this->ci->user_model->login($user,$pwd);
 }


}