<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Updateprofile extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library(array('form_validation')); 
        $this->load->helper('url','form');
		$this->load->model('mlogin');
		$this->load->model('mindex');
    }

    public function index()  
    {  
        $this->form_validation->set_rules('name', 'NAME','required');  
        $this->form_validation->set_rules('phone', 'PHONE','required');  
        $this->form_validation->set_rules('username', 'USERNAME','required|callback_username_check');  
        $this->form_validation->set_rules('email','EMAIL','required|valid_email|callback_username_check');  
        if($this->form_validation->run() == FALSE)  
        {  
            $data['user'] = $this->session->all_userdata();
			$data['isi'] = 'profile';
			$user = $this->session->all_userdata();
			$username = $user['username'];
			$data['hasil'] = $this->mindex->get_user($username);
			$data['title'] = 'Profil';
			$this->load->view('layout_ts/wrapper',$data); 
        }  
            else  
        { 
			$data['id']     = $this->input->post('id');  
			$data['name']     = $this->input->post('name');  
            $data['phone']    = $this->input->post('phone'); 
            $data['username'] = $this->input->post('username');  
			$data['email']    = $this->input->post('email');  
			$data['status']   = $this->input->post('status');  
			$id = $this->mlogin->updateprofile($data);  

			$this->load->view('reg_success',$data);		
        }  
    }  
	
	function username_check($username) 
	{ 
		$this->load->model('mlogin');
		$cek_username = $this->mlogin->username_check($username);
		if ($cek_username > 0) 
		{ 
			$this->form_validation->set_message('username_check', 'Username sudah digunakan'); 
			return FALSE; 
		} 
		else 
		{ 
			return TRUE; 
		} 
	} 
	
	function email_check($email) 
	{ 
		$this->load->model('mlogin');
		$cek_email = $this->mlogin->email_check($email);
		if ($cek_email > 0) 
		{ 
			$this->form_validation->set_message('email_check', 'Email sudah digunakan'); 
			return FALSE; 
		} 
		else 
		{ 
			return TRUE; 
		} 
	} 
}
