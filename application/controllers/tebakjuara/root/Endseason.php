<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Endseason extends CI_Controller {
    function __construct()
    {
        parent::__construct();
		if ($this->session->userdata('logged')<>1) {
                redirect(site_url('tebakjuara/root/login'));
            }
		$this->load->library('session');
        $this->load->database();
        $this->load->model('tebakjuara/madmin');
        $this->load->helper('url');
    }

    function index()
    {
		$data['user'] = $this->session->all_userdata();
        $data['tebakan'] = $this->madmin->tebakan_endseason();
        $data['isi'] = 'tebakjuara/root/endseason';
        $data['title'] = 'Administrator | Tebakan Akhir Musim';
        $this->load->view('tebakjuara/root/layout/wrapper',$data);
    }
}