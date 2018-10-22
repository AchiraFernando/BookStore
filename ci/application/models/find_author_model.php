<?php
class FindAuthorModel extends CI_Model {
    function __construct() {
        parent:: __construct();
        $this->load->database();
    }

    function FindAuthor($name) {
        if ($name == null || $name == '') {
            return false;
        }

        $this->db->where('id', $id);
        $res = $this->db->get('authors');
        $data = $res->row_array();
        $res->free_result();
        return $data;
    }
}