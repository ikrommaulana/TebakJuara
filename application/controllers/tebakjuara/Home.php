<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->helper(array('url','form'));
		
		$user = $this->session->all_userdata();
		$username = $user['username'];
		$userid = $user['id'];
		$cek = $this->mindex->user_check($userid,$username); //cek apakah sudah ada user_id
		if($cek > 0){
			$data = array(
				'user'  => $this->session->all_userdata(),
				'title' => 'Home | Tebak Juara Premier League 2017',
				'error' => $error,
				'first_club'  => $this->mindex->get_first_club(),
				'last_club'  => $this->mindex->get_last_club()
			);
		$this->load->view('tebakjuara/home', $data);
		} else {
			$data['user'] = $this->session->all_userdata();
			$this->load->view('tebakjuara/register_sosmed',$data); 
			if($this->input->post('submit') ) {
				$query['name']     = $this->input->post('name');  
				$query['phone']    = $this->input->post('phone'); 
				$query['username'] = $this->input->post('username');  
				$query['email']    = $this->input->post('email');  
				$query['password'] = md5($this->input->post('password'));
				$query['user_id'] = $user['id']; 
				$query['status']   = 1;  
				$this->mlogin->register($query);
				redirect('tebakjuara/home');
			}
		}
    }
}
