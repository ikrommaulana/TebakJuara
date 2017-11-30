<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Result extends CI_Controller {

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
		$get_match = $this->mindex->get();
		$user = $this->session->all_userdata();
		//print_r($user);
		$guess_check = $this->mindex->guess_check($user['username'],$get_match->id_match);
		
		$data['user'] = $this->session->all_userdata();
		$data['hasil'] = $this->mindex->get_result();
		$data['isi'] = 'matchresult';
			
		$data['title'] = 'Tebak Skor';
		$this->load->view('layout_ts/wrapper',$data);
		
    }
}
