<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tebak extends CI_Controller {

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
		redirect('tebakjuara/home');
		
    }

    function tengahmusim($error = NULL)
    {
		$this->load->helper(array('url','form'));
		$user = $this->session->all_userdata();
		$cek_tebakan = $this->mindex->check_tebakan($user['username'],'half');
		if($cek_tebakan > 0){
			$data = array(
				'user'  => $this->session->all_userdata(),
				'title' => 'Tebak ditutup | Tebak Juara Premier League 2017',
				'tebakan'  => $this->mindex->get_tebakan($user['username'],'half'),
				'season' => 'Mid Season'
			);
			$this->load->view('tebakjuara/sudahtebak', $data);
		}else{
			$data = array(
				'user'  => $this->session->all_userdata(),
				'title' => 'Juara Tengah Musim | Tebak Juara Premier League 2017',
				'error' => $error,
				'first_club'  => $this->mindex->get_first_club(),
				'last_club'  => $this->mindex->get_last_club()
			);
			$this->load->view('tebakjuara/tebakhalfseason', $data);
		}
    }

    function akhirmusim($error = NULL)
    {
		$this->load->helper(array('url','form'));
		$user = $this->session->all_userdata();
		$cek_tebakan = $this->mindex->check_tebakan($user['username'],'full');
		if($cek_tebakan > 0){
			$data = array(
				'user'  => $this->session->all_userdata(),
				'title' => 'Tebak ditutup | Tebak Juara Premier League 2017',
				'tebakan'  => $this->mindex->get_tebakan($user['username'],'full'),
				'season' => 'End Season'
			);
			$this->load->view('tebakjuara/sudahtebak', $data);
		}else{
			$data = array(
				'user'  => $this->session->all_userdata(),
				'title' => 'Juara Akhir Musim | Tebak Juara Premier League 2017',
				'error' => $error,
				'first_club'  => $this->mindex->get_first_club(),
				'last_club'  => $this->mindex->get_last_club()
			);
			$this->load->view('tebakjuara/tebakfullseason', $data);
		}
    }

    function save()
    {	
        
        $this->load->helper(array('url','form'));
        $user = $this->session->all_userdata();
		
		
        if($this->input->post('submit') ) {
            $win = $this->input->post('win');
            $draw = $this->input->post('draw');
            $lose = $this->input->post('lose');
			$poin = $win*3 + $draw*1 + $lose*0;
			
            $query = array (
                'season' => $this->input->post('season'),
                'klub' => $this->input->post('klub'),
                'w' => $win,
                'd' => $draw,
                'l' => $lose,
                'poin' => $poin,
                'id_user' => $user['id'],
                'username' => $user['username'],
                'date' => date('Y-m-d')
            );
            $this->mindex->save($query);
            }
		$data['user'] = $this->session->all_userdata();
		redirect('tebakjuara/tebak/sukses');
    }

    function sukses()
    {	
        $this->load->helper(array('url','form'));
		$user = $this->session->all_userdata();
		
		$data = array(
			'user'  => $this->session->all_userdata(),
            'title' => 'Juara Akhir Musim | Tebak Juara Premier League 2017'
		);
		$this->load->view('tebakjuara/sukses', $data);
    }
}
