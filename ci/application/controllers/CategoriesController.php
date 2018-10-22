<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoriesController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('CategoriesModel');

    }
    public function index()
    {
        $data['categories'] = $this->CategoriesModel->getAllCategories();
        $this->load->view('show_books_view', $data);

    }

}