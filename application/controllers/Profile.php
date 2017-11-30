<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library(array('form_validation')); 
        $this->load->helper('url','form');
		$this->load->model('mindex');
		$this->load->model('mlogin');
    }

    public function index()  
    {
		
		$this->form_validation->set_rules('name', 'NAME','required');  
        $this->form_validation->set_rules('phone', 'PHONE','required');  
        $this->form_validation->set_rules('email','EMAIL','required|valid_email');  
        if($this->form_validation->run() == FALSE)  
        {  
			$data['user'] = $this->session->all_userdata();
			$user = $this->session->all_userdata();
			$userid = $user['id'];
			$data['hasil'] = $this->mindex->get_userid($userid);
			$data['isi'] = 'viewprofile';	
			$data['title'] = 'Profile';
			$this->load->view('layout_ts/wrapper',$data);
        }  
            else  
        { 
			$post['name']     = $this->input->post('name');  
            $post['phone']    = $this->input->post('phone');   
			$post['email']    = $this->input->post('email');   
			$id  = $this->input->post('id');   
			$this->mlogin->updateprofile($id,$post);  

			$data['user'] = $this->session->all_userdata();
			$user = $this->session->all_userdata();
			$userid = $user['id'];
			$data['hasil'] = $this->mindex->get_userid($userid);
			$data['isi'] = 'viewprofile';	
			$data['title'] = 'Profile';
			$this->load->view('layout_ts/wrapper',$data);
        }  
    }  
	
}
