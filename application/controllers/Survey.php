<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->database();
		$this->load->model('msurvey');
        $this->load->helper('url','form');
        $this->load->library('form_validation'); 
    }
	
	function index(){
			$data['isi'] = 'survey/customer2017';
			$data['title'] = 'MNC Play | Survey Pelanggan MNC Play 2017';
			$this->load->view('survey/layout/wrapper',$data);
	}
	
	function employees2017(){
			$data['isi'] = 'survey/prolog_employees2017';
			$data['title'] = 'MNC Play | Welcome to Employee Survey 2017';
			$this->load->view('survey/layout/wrapper',$data);
	}

    function survey2017()
    {
		$this->load->helper(array('url','form'));
		$this->form_validation->set_error_delimiters('<div style="font-size:12px;font-weight:bold;color:red;font-style:italic;">', '</div>');
		$this->form_validation->set_rules('nik', 'NIK','required|callback_nik_check');  
		$this->form_validation->set_rules('direktorat', 'Direktorat','required');  
        $this->form_validation->set_rules('level', 'Level','required');  
		$this->form_validation->set_rules('yearofstay', 'Year of Stay','required');  
		$this->form_validation->set_rules('lingkungan-kerja', 'No.1 LINGKUNGAN KERJA','required');  
        $this->form_validation->set_rules('atasan', 'No.2 ATASAN','required');  
        $this->form_validation->set_rules('kesempatan-belajar', 'No.3 KESEMPATAN BELAJAR','required');  
        $this->form_validation->set_rules('jenjang-karir', 'No.4 JENJANG KARIR','required');  
        $this->form_validation->set_rules('empowerment', 'No.5 EMPOWERMENT','required');  
        $this->form_validation->set_rules('apresiasi', 'No.6 APRESIASI','required');  
        $this->form_validation->set_rules('rekomendasi', 'Employer of Choice','required');   
		
		if($this->form_validation->run() == FALSE){  
			$data['isi'] = 'survey/employees2017';
			$data['title'] = 'MNC Play | EMPLOYEE SATISFACTION SURVEY 2017';
			$this->load->view('survey/layout/wrapper',$data);
		} else {
			$query = array (
                'year' => $this->input->post('year'),
                'nik' => $this->input->post('nik'),
                'direk' => $this->input->post('direktorat'),
                'lvl' => $this->input->post('level'),
                'yos' => $this->input->post('yearofstay'),
                'q1' => $this->input->post('lingkungan-kerja'),
                'q2' => $this->input->post('atasan'),
                'q3' => $this->input->post('kesempatan-belajar'),
                'q4' => $this->input->post('jenjang-karir'),
                'q5' => $this->input->post('empowerment'),
                'q6' => $this->input->post('apresiasi'),
                'p1' => $this->input->post('pilihan1'),
                'p2' => $this->input->post('pilihan2'),
                'p3' => $this->input->post('pilihan3'),
                'rec' => $this->input->post('rekomendasi'),
                'date' => $this->input->post('date')
            );
			  
			$this->msurvey->simpan($query);
			redirect('survey/sukses/');
		}
    }
	
	public function nik_check($str)
	{
		$this->load->model('msurvey');
		$result = $this->msurvey->nikcheck($str);
		
        if ($result == '0')
        {
            $this->form_validation->set_message('nik_check', 'NIK yang anda masukkan tidak valid');
            return FALSE;
        } 
			else 
		{
            return TRUE;
        }
	}
	
  
    function sukses()
    {	
		$data['isi'] = 'survey/sukses';
		$data['title'] = 'MNC Play | Terimakasih';
		$data['thanks'] = 'Terima kasih atas kesediaan Anda dalam mengisi kuesioner ini.<br/>Masukan Anda sangat berharga dan akan ditindaklanjuti oleh Manajemen.<br/><br/><br/>';
		$this->load->view('survey/layout/wrapper',$data);
    }
	
  
    function survey_sukses()
    {	
		$data['isi'] = 'survey/sukses';
		$data['title'] = 'MNC Play | Terimakasih';
		$data['thanks'] = 'Terima kasih atas kesediaan Anda dalam mengisi survey ini.<br/>Masukan Anda sangat berharga dan akan ditindaklanjuti oleh Manajemen.<br/><br/><br/>';
		$this->load->view('survey/layout/wrapper',$data);
    }
	
  
    function save()
    {	
		$data['isi'] = 'survey/sukses';
		$data['title'] = 'MNC Play | Terimakasih';
		$data['thanks'] = 'Terima kasih atas kesediaan Anda dalam mengisi kuesioner ini.<br/>Masukan Anda sangat berharga dan akan ditindaklanjuti oleh Manajemen.<br/><br/>Kembali ke <a href="http://www.mncplay.id/employees_survey2017/">Halaman Survey</a>';
		$this->load->view('survey/layout/wrapper',$data);
    }
	
	function pelangganMNCPlay2017()
    {
		$this->load->helper(array('url','form'));
		$this->form_validation->set_error_delimiters('<div style="font-size:12px;font-weight:bold;color:red;font-style:italic;">', '</div>');
		$this->form_validation->set_rules('name', 'NAMA PELANGGAN','required');  
        $this->form_validation->set_rules('email_pelanggan', 'EMAIL','required');  
		$this->form_validation->set_rules('layanan', 'LAYANAN','required');  
        $this->form_validation->set_rules('kecepatan-akses-internet', 'No.1','required');  
        $this->form_validation->set_rules('kestabilan-akses-internet', 'No.2','required');  
        $this->form_validation->set_rules('kualitas-tayangan', 'No.3','required');   
        $this->form_validation->set_rules('kelengkapan-channel', 'No.4','required');  
        $this->form_validation->set_rules('tarif-berlangganan', 'No.5','required');  
        $this->form_validation->set_rules('ketepatan-waktu', 'No.7','required');  
        $this->form_validation->set_rules('jangka-waktu-perbaikan', 'No.8','required');  
        $this->form_validation->set_rules('kemudahan-menghubungi-ccare', 'No.9','required');  
        $this->form_validation->set_rules('kepuasan-pelayanan-ccare', 'No.10','required');  
        $this->form_validation->set_rules('cara-hub-ccare', 'No.11','required');  
        $this->form_validation->set_rules('jum-hub-ccare', 'No.12','required');   
        $this->form_validation->set_rules('respond-ccare', 'No.13','required');  
        $this->form_validation->set_rules('informasi-billing', 'No.14','required');  
        $this->form_validation->set_rules('keakuratan-billing', 'No.15','required');  
        $this->form_validation->set_rules('kemudahan-pembayaran', 'No.16','required');  
        $this->form_validation->set_rules('kepuasan-pelanggan', 'No.17','required');  
        $this->form_validation->set_rules('referensi', 'No.18','required');    
		
		if($this->form_validation->run() == FALSE){  
			$data['isi'] = 'survey/customer2017';
			$data['title'] = 'MNC Play | Survey Pelanggan MNC Play 2017';
			$this->load->view('survey/layout/wrapper',$data);
		} else {
			$query = array (
                'year' => $this->input->post('year'),
                'id_cust' => $this->input->post('id_pelanggan'),
                'name_cust' => $this->input->post('name'),
                'email_cust' => $this->input->post('email_pelanggan'),
                'layanan' => $this->input->post('layanan'),
                'q1' => $this->input->post('kecepatan-akses-internet'),
                'q1_detail' => $this->input->post('kecepatan-akses-internet-detail'),
                'q2' => $this->input->post('kestabilan-akses-internet'),
                'q2_detail' => $this->input->post('kestabilan-akses-internet-detail'),
                'q3' => $this->input->post('kualitas-tayangan'),
                'q3_detail' => $this->input->post('kualitas-tayangan-detail'),
                'q4' => $this->input->post('kelengkapan-channel'),
                'q4_detail' => $this->input->post('kelengkapan-channel-detail'),
                'q5' => $this->input->post('tarif-berlangganan'),
                'q6_a' => $this->input->post('vas-cctv'),
                'q6_b' => $this->input->post('vas-vc'),
                'q6_c' => $this->input->post('vas-os'),
                'q6_d' => $this->input->post('vas-others'),
                'q7' => $this->input->post('ketepatan-waktu'),
                'q8' => $this->input->post('jangka-waktu-perbaikan'),
                'q8_detail' => $this->input->post('jangka-waktu-perbaikan-detail'),
                'q9' => $this->input->post('kemudahan-menghubungi-ccare'),
                'q9_detail' => $this->input->post('kemudahan-menghubungi-ccare-detail'),
                'q10' => $this->input->post('kepuasan-pelayanan-ccare'),
                'q10_detail' => $this->input->post('kepuasan-pelayanan-ccare-detail'),
                'q11' => $this->input->post('cara-hub-ccare'),
                'q11_detail' => $this->input->post('cara-hub-ccare-detail'),
                'q12' => $this->input->post('jum-hub-ccare'),
                'q12_detail' => $this->input->post('jum-hub-ccare-detail'),
                'q13' => $this->input->post('respond-ccare'),
                'q13_detail' => $this->input->post('respond-ccare-detail'),
                'q14' => $this->input->post('informasi-billing'),
                'q15' => $this->input->post('keakuratan-billing'),
                'q16' => $this->input->post('kemudahan-pembayaran'),
                'q16_detail' => $this->input->post('kemudahan-pembayaran-detail'),
                'q17' => $this->input->post('kepuasan-pelanggan'),
                'q18' => $this->input->post('referensi'),
                'q18_detail'=> $this->input->post('referensi-detail'),
                'date' => $this->input->post('date')
            );
            $this->msurvey->save($query);
			redirect('survey/survey_sukses/');
		}
    }
}
