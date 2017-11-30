<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Dashboard extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged')<>1) {
                redirect(site_url('root/login'));
            }
		$this->load->library('session');
        $this->load->database();
        $this->load->model('tebakjuara/madmin');
	}

	function index()
	{
		$data['user'] = $this->session->all_userdata();
		$data['user'] = $this->db->count_all('user');
		$data['midseason'] = $this->madmin->jumlah_tebakan('half');
		$data['endseason'] = $this->madmin->jumlah_tebakan('full');
		$data['isi'] = 'tebakjuara/root/dashboard';
		$data['title'] = 'Administrator | Dashboard Page';
		$this->load->view('tebakjuara/root/layout/wrapper',$data);
	}
}