<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function search_contacts($search_term) {
        $this->db->like('name', $search_term);
        $this->db->or_like('email', $search_term);
        $this->db->or_like('phone_number', $search_term);
        $query = $this->db->get('contacts');
        return $query->result();
    }
}
