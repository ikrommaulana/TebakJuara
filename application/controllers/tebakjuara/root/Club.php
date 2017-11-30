<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Club extends CI_Controller {
    function __construct()
    {
        parent::__construct();
		if ($this->session->userdata('logged')<>1) {
                redirect(site_url('root/login'));
            }
		$this->load->library('session');
        $this->load->database();
        $this->load->model('root/mmatch');
        $this->load->helper('url');
    }

    function index()
    {
		$data['user'] = $this->session->all_userdata();
        $data['club'] = $this->mmatch->list_club();
        $data['isi'] = 'root/club';
        $data['title'] = 'Administrator | All Club';
        $this->load->view('root/layout/wrapper',$data);
    }

}