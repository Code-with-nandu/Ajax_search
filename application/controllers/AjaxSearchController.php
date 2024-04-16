<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class AjaxsearchController extends CI_Controller {
    public function index()
    {
        $this->load->view('ajaxSerchView');
    }
}
