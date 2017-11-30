<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	function index($error = NULL)
	{
		$data = array(
            'title' => 'Administrator Login',
            'error' => $error
        );
		$this->load->view('tebakjuara/root/login', $data);
	}

	function dologin()
	{
		$this->load->model('tebakjuara/mlogin');

		$login = $this->mlogin->login($this->input->post('username'), md5($this->input->post('password')));

		if ($login == 1) {
            $row = $this->mlogin->data_login($this->input->post('username'), md5($this->input->post('password')));
            $data = array(
                'logged' => TRUE,
                'username' => $row->username
            );
            $this->session->set_userdata($data);
            redirect(site_url('tebakjuara/root/dashboard'));
        } else {
            $error = 'Username / Password Salah';
            $this->index($error);
        }
	}
 
    function logout() {
        $this->session->sess_destroy();
        redirect(site_url('tebakjuara/root/login'));
    }
}