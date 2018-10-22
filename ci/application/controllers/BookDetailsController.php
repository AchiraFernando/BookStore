<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookDetailsController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('CategoriesModel');
        // load base_url
        $this->load->helper('url');

    }
    public function index()
    {
        $this->load->view('book_details_view', $data);

    }

    public function ViewBook()
    {
        $id = $this->uri->segment(3);

        echo 'View book : ' . $id . '<br>';

        $this->load->view('book_details_view', $data);

    }

}