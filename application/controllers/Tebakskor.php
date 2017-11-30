<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tebakskor extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->database();
        $this->load->model('mindex');
        $this->load->model('mlogin');
		if ($this->session->userdata('logged')<>1) {
                redirect(site_url('login'));
            }
		$this->load->library('session');
    }

    function index()
    {
		$this->load->helper(array('url','form'));
		$user = $this->session->all_userdata();
		$username = $user['username'];
		$userid = $user['id'];
		$id = $this->mindex->id_check($userid,$username); //cek apakah sudah ada id
		$cek = $this->mindex->user_check($userid,$username); //cek apakah sudah ada user_id
		
		if(($id > 0)||($cek > 0)){
			$get_match = $this->mindex->get();
			$user = $this->session->all_userdata();
			//print_r($user);
			$guess_check = $this->mindex->guess_check($user['username'],$get_match->id_match); //cek apakah user sudah tebak atau belum
			
			if($guess_check > 0){
				//$user = $this->session->all_userdata();
				//$username = $user['username'];
				//$data['user'] = $this->mindex->get_user($username);
				$data['user'] = $this->session->all_userdata();
				$data['hasil'] = $this->mindex->get();
				$data['guess'] = $this->mindex->get_guess($user['username'],$get_match->id_match);
				$data['title'] = 'Tebak Skor';
				$data['isi'] = 'tebakskor_2';
				$this->load->view('layout_ts/wrapper',$data);
			}
			else{
				//$user = $this->session->all_userdata();
				//$username = $user['username'];
				//$data['user'] = $this->mindex->get_user($username);
				$data['user'] = $this->session->all_userdata();
				$data['hasil'] = $this->mindex->get();
				$get_time = $this->mindex->get_time();
				foreach($get_time as $get_time){
					$limit = $get_time->match_date;
				}
				$createdate = date_create($limit);
				$matchdate = date_add($createdate, date_interval_create_from_date_string('-1 hours')); //match date
				$limitday = date_format($matchdate,'d'); //limit tanggal 
				$limitmonth = date_format($matchdate,'m'); //limit bulan 
				$limityear = date_format($matchdate,'y'); //limit tahun
				$limittime = date_format($matchdate,'H:i'); //limit jam
				$nowday = date('d'); //now tanggal
				$nowmonth = date('m'); //now bulan
				$nowyear = date('y'); //now tahun
				$timenow = date('H:i'); //now time
				
				//if(($datenow<=$limitdate)&&($timenow<=$limittime)){$data['isi'] = 'tebakskor';}else{$data['isi'] = 'tebakskorditutup';}
				if(($nowday<=$limitday)&&($nowmonth<=$limitmonth)&&($nowyear<=$limityear)){
				/*	$data['isi'] = 'tebakskor';
				} elseif (($nowday==$limitday)&&($nowmonth==$limitmonth)&&($nowyear==$limityear)) {*/
					if($timenow<=$limittime){
						$data['isi'] = 'tebakskor';
					}else{
						$data['isi'] = 'tebakskorditutup';
					}
				} else {
					$data['isi'] = 'tebakskorditutup';
				}
				
				$data['title'] = 'Tebak Skor';
				$this->load->view('layout_ts/wrapper',$data);
			
			}
		}else{
				$data['user'] = $this->session->all_userdata();
				$data['isi'] = 'profile';
				$data['title'] = 'Profil';
				$max = $this->mindex->get_max_id();
				$max_id = $max->id;
				$this->load->view('layout_ts/wrapper',$data); 
				if($this->input->post('submit') ) {
					$query['id']     = $max_id+1; 
					$query['name']     = $this->input->post('name');  
					$query['phone']    = $this->input->post('phone'); 
					$query['username'] = $this->input->post('username');  
					$query['email']    = $this->input->post('email');  
					$query['user_id'] = $this->input->post('user_id');  
					$query['status']   = $this->input->post('status');  
					$id = $this->mlogin->register($query);
					redirect('tebakskor/');
					}
			 
		}
		
    }

    function save()
    {	
        
        $this->load->helper(array('url','form'));
            
        if($this->input->post('submit') ) {
            $query = array (
                'id_match' => $this->input->post('pertandingan'),
                'guess_home' => $this->input->post('tebak_skor_1'),
                'guess_away' => $this->input->post('tebak_skor_2'),
                'id_user' => $this->input->post('id'),
                'username' => $this->input->post('username'),
                'guess_date' => $this->input->post('tanggal_dibuat')
            );
            echo $this->mindex->save($query);
            }
		$data['user'] = $this->session->all_userdata();
		redirect('tebakskor/');
    }
}
