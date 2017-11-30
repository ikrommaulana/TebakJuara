<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class User extends CI_Controller {
    function __construct()
    {
        parent::__construct();
		if ($this->session->userdata('logged')<>1) {
                redirect(site_url('tebakjuara/root/login'));
            }
		$this->load->library('session');
        $this->load->database();
        $this->load->model('root/mmatch');
        $this->load->helper('url');
    }

    function index()
    {
		$data['user'] = $this->session->all_userdata();
        $data['list_user'] = $this->mmatch->list_user();
        $data['isi'] = 'tebakjuara/root/user';
        $data['title'] = 'Administrator | All User';
        $this->load->view('tebakjuara/root/layout/wrapper',$data);
    }

}