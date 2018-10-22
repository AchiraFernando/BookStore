<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetBooksController extends CI_Controller {

	public function __contruct()
	{
        parent::__contruct()
        $this->load->model('get_books_model');
    }

    public function index() {
        $this->load->view('show_books_view');
    }

    public function GetAuthor() {
        $arrayCategoryList
        $name = $this->input->post('username');
        echo 'GetAuthor called, name is -' . $name . '<br>';
        $user = $this->find_author_model->FindAuthor($name);
        $data['userindex'] = $user;
        $this->load->view('author_details_view', $data);
    }




}
