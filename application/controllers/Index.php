<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->database();
        $this->load->model('tebakjuara/mindex');
        $this->load->model('tebakjuara/mlogin');
		if ($this->session->userdata('logged')<>1) {
                redirect(site_url('tebakjuara/login'));
            }
		$this->load->library('session');
    }

    function index($error = NULL)
    {
		redirect(site_url('tebakjuara'));
		
    }
}
