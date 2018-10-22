<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BrowseBooksController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('CategoriesModel');
        $this->load->model('BookDetailsModel');
        // load base_url
        $this->load->helper('url');

    }

    public function index()
    {
        $data['categories'] = $this->CategoriesModel->getAllCategories();
        $data['book_details'] = $this->BookDetailsModel->getAllBookDetails();

        $this->load->view('browse_books_view', $data);
        $this->load->helper('url');

    }

    public function GetSearchedBook()
    {
        $keyword = $this->input->post('keyword');
        echo 'Search for: ' . $keyword . '<br>';

        $data['categories'] = $this->CategoriesModel->getAllCategories();
        $data['book_details'] = $this->BookDetailsModel->searchBooks($keyword);

        $this->load->view('browse_books_view', $data);
    }

    public function FilterByCategory()
    {
        $selectedCategory = $this->input->post('selectedCategory');
        echo 'Selected category: ' . $selectedCategory . '<br>';

        $data['categories'] = $this->CategoriesModel->getAllCategories();
        $data['book_details'] = $this->BookDetailsModel->getAllBooksForCategory($selectedCategory);

        $this->load->view('browse_books_view', $data);

    }

}