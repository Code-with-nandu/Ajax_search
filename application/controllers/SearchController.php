<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('SearchModel');
    }

    public function index() {
        // Load the view for search form
        $this->load->view('search_form');
    }

    public function search() {
        $search_term = $this->input->post('search');

        // Call the model function to search
        $data['results'] = $this->SearchModel->search_contacts($search_term);

        // Load the view with search results
        $this->load->view('search_results', $data);
    }
}
