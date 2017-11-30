<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reg extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library(array('form_validation')); 
        $this->load->helper('url','form');
		$this->load->model('tebakjuara/mlogin');
    }

    public function index()  
    {  
        $this->form_validation->set_rules('name', 'NAME','required');  
        $this->form_validation->set_rules('phone', 'PHONE','required');  
        $this->form_validation->set_rules('username', 'USERNAME','required|callback_username_check');  
        $this->form_validation->set_rules('email','EMAIL','required|valid_email|callback_username_check');  
        $this->form_validation->set_rules('password','PASSWORD','required');  
        $this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');  
		$max = $this->mlogin->get_max_id();
		$max_id = $max->id;
        if($this->form_validation->run() == FALSE)  
        {  
            $this->load->view('tebakjuara/register');  
        }  
            else  
        { 
			$data['id']       = $max_id+1; 
			$data['user_id']       = $max_id+1; 
			$data['name']     = $this->input->post('name');  
            $data['phone']    = $this->input->post('phone'); 
            $data['username'] = $this->input->post('username');  
			$data['email']    = $this->input->post('email');  
			$data['password'] = md5($this->input->post('password'));  
			$data['status']   = $this->input->post('status');  
			$id = $this->mlogin->register($data);  
			
			$email = $this->input->post('email'); 
			$encrypted_id = md5($id);
			
			$this->load->library('email');
			$config['charset'] = 'utf-8';
			$config['useragent'] = 'Codeigniter';
			$config['protocol']= "sendmail";
            $config['mailpath'] = '/usr/sbin/sendmail';
			$config['mailtype']= "html";
			$config['smtp_host']= "ssl://smtp.mncplaymedia.com";//pengaturan smtp
			$config['smtp_port']= "465";
			$config['smtp_timeout']= "400";
			$config['smtp_user']= "no-reply@mncplaymedia.com"; // isi dengan email kamu
			$config['smtp_pass']= "noreply@mncplaymedia"; // isi dengan password kamu
			$config['crlf']="\r\n"; 
			$config['newline']="\r\n"; 
			$config['wordwrap'] = TRUE;
		   
			$this->email->initialize($config);
			//konfigurasi pengiriman
			$this->email->from($config['smtp_user']);
			$this->email->to($email);
			$this->email->subject("Verifikasi Akun");
			$this->email->message(
			 "Terimakasih telah melakukan pendaftaran, untuk verifikasi silahkan klik tautan dibawah ini<br/><br/>".
			  site_url("tebakjuara/reg/verification/$encrypted_id")
			);
		  
			if($this->email->send())
			{
			   $data['message'] = "Berhasil melakukan registrasi, silahkan cek email kamu";
			}else
			{
			   $data['message'] = "Berhasil melakukan registrasi, tapi gagal mengirim verifikasi email";
			}
			
			$this->load->view('tebakjuara/reg_success',$data);		
        }  
    }  
	
	function username_check($username) 
	{ 
		$this->load->model('tebakjuara/mlogin');
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
		$this->load->model('tebakjuara/mlogin');
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
	
	public function verification($key)
	{
		$this->load->helper('url');
		$this->mlogin->changeActiveState($key);
		$data['message'] = "Verifikasi Email berhasil!";
		$this->load->view('tebakjuara/reg_success',$data);	
	}
}
