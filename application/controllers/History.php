<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->database();
        $this->load->model('mindex');
		if ($this->session->userdata('logged')<>1) {
                redirect(site_url('login'));
            }
		$this->load->library('session');
    }

    function index()
    {
		$this->load->helper(array('url','form'));
		$user = $this->session->all_userdata();
		$data['hasil'] = $this->mindex->list_guess($user['username']);
		$data['title'] = 'Semua Tebakan';
		$data['isi'] = 'history';
		$this->load->view('layout_ts/wrapper',$data);
		
		
    }
}
