<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

 function __construct()
 {
    parent::__construct();
     $this->load->library('authlib');
     $this->load->helper('url');
 }

 public function index() {
    $this->load->view('auth_view', array('errmsg' => ''));
 }

 public function login() {
    $data['errmsg'] = '';
    $this->load->view('login_view', $data);
 }

 public function register() {
    $data['errmsg'] = '';
    $this->load->view('reg_view', $data);
 }

 public function createAccount() {
    $name = $this->input->post('name');
    $username = $this->input->post('uname');
    $password = $this->input->post('pword');
    $conf_password = $this->input->post('conf_pword');

    if (!($errmsg = $this->authlib->register($name,$username,$password,
                                         $conf_password))) {
        $data['errmsg'] = '';
        $this->load->view('login_view',$data);
    }
    else {
        $data['errmsg'] = $errmsg;
        $this->load->view('reg_view',$data);
    }
 }

 public function authenticate(){
	$username = $this->input->post('uname');
	$password = $this->input->post('pword');
	$user = $this->authlib->login($username,$password);

	if ($user !== false) {
	    $this->load->view('homepage_view',array('name' => $user['name']));
	}
	else {
	    $data['errmsg'] = 'Unable to login - please try again';
	    $this->load->view('login_view',$data);
	}
 }

}