<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Premiere_league extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->database();
        $this->load->model('mindex');
    }

    function index()
    {
		redirect('premier_league');
		
    }
}
