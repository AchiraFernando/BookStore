<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookDetailsModel extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getAllBookDetails()
    {
        $query = $this->db->get('book_details');

        return $query->result();
    }

    function searchBooks($keyword)
    {
        $this->db->like('book_name', $keyword);
        $query = $this->db->get('book_details');

        return $query->result();
    }

    function getAllBooksForCategory($category)
    {
        $query = $this->db->get_where('book_details', array('category_id' => $category));

        return $query->result();
    }

}