<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoriesModel extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getAllCategories()
    {
        $query = $this->db->get('book_category');

        return $query->result();
    }

}