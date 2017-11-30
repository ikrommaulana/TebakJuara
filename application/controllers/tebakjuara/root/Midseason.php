<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Midseason extends CI_Controller {
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
        $data['tebakan'] = $this->madmin->tebakan_midseason();
        $data['isi'] = 'tebakjuara/root/midseason';
        $data['title'] = 'Administrator | Tebakan Tengah Musim';
        $this->load->view('tebakjuara/root/layout/wrapper',$data);
    }

    function detail($id)
    {
		$data['user'] = $this->session->all_userdata();
        $data['guess'] = $this->mguess->list_guess($id);
        $data['isi'] = 'root/detail_guess';
        $data['title'] = 'Administrator | Guess Page';
        $this->load->view('root/layout/wrapper',$data);
    }

    function all($id)
    {
		$data['user'] = $this->session->all_userdata();
        $data['guess'] = $this->mguess->all_guess($id);
        $data['isi'] = 'root/all_guess';
        $data['title'] = 'Administrator | Guess Page';
        $this->load->view('root/layout/wrapper',$data);
    }
}