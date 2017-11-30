<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->database();
		$this->load->model('mregister');
        $this->load->helper('url','form');
        $this->load->library('form_validation'); 
    }

    function index()
    {
		$this->load->helper(array('url','form','captcha'));
		
        $this->form_validation->set_rules('prov', 'PROVINSI','required'); 
        $this->form_validation->set_rules('kab', 'KABUPATEN/KOTA','required');  
        $this->form_validation->set_rules('kec', 'KECAMATAN','required');  
        $this->form_validation->set_rules('des', 'KELURAHAN','required');  
        $this->form_validation->set_rules('nama', 'NAME','required');  
        $this->form_validation->set_rules('email','EMAIL','required|valid_email');  
        $this->form_validation->set_rules('nohp', 'NO HANDPHONE','required');  
        $this->form_validation->set_rules('telrumah', 'TELP RUMAH','required');  
        $this->form_validation->set_rules('alamat','ALAMAT','required');  
		
		if($this->form_validation->run() == FALSE){  
			$data['prov'] = $this->mregister->get_all_provinsi();
			$data['isi'] = 'register/register';
			$data['title'] = 'Daftar Pelanggan Baru | MNC Play';
			$this->load->view('register/layout/wrapper',$data);
		} else {
			$query['propinsi']	= $this->input->post('prov');  
            $query['kota']	= $this->input->post('kab'); 
            $query['kecamatan']	= $this->input->post('kec');  
			$query['kelurahan']= $this->input->post('des');  
			$query['rw']= $this->input->post('rw');  
			$query['rt']= $this->input->post('rt');  
			$query['nama']	= $this->input->post('nama');  
			$query['email']	= $this->input->post('email'); 
			$query['mobile']	= $this->input->post('nohp'); 
			$query['phone']	= $this->input->post('telrumah'); 
			$query['address']= $this->input->post('alamat');
			$query['created_date']= $this->input->post('created');
			  
			$this->mregister->register($query);
			redirect('daftar/');
		}
    }

	function add_ajax_kab($id_prov)
	{
      $query = $this->db->get_where('mkm_city',array('province_id'=>$id_prov));
      $data = "<option value=''>- Select Kabupaten / Kota -</option>";
      foreach ($query->result() as $value) {
          $data .= "<option value='".$value->id."'>".$value->city_name."</option>";
      }
      echo $data;
	}
	
	function add_ajax_kec($id_kab)
	{
      $query = $this->db->get_where('mkm_district',array('city_id'=>$id_kab));
      $data = "<option value=''> - Pilih Kecamatan - </option>";
      foreach ($query->result() as $value) {
          $data .= "<option value='".$value->id."'>".$value->district_name."</option>";
      }
      echo $data;
	}
  
	function add_ajax_kel($id_kec)
	{
      $query = $this->db->get_where('mkm_subdistrict',array('district_id'=>$id_kec));
      $data = "<option value=''> - Pilih Kelurahan - </option>";
      foreach ($query->result() as $value) {
          $data .= "<option value='".$value->id."'>".$value->name."</option>";
      }
      echo $data;
	}
  
	function add_ajax_data($id_kel)
	{
      $this->load->view('register/nextstep');
	}
  
	function nextstep()
	{
      $this->load->view('register/nextstep');
	}
  
	function create_captcha()
	{
      $options = array(
		'img_path' => './captcha',
		'img_url' => base_url('captcha'),
		'img_width' => '150',
		'img_height' => '30',
		'expiration' => 7200
	  );
	  
	  $cap = create_captcha($options);
	  $image = $cap['image'];
	  
	  $this->session->set_userdata('captchaword',$cap['word']);
	  return $image;
	}
  
	function check_captcha()
	{
      if ($this->input->post('captcha') == $this->session->userdata('captchaword'))
	  {
		  return true;
	  }
	  else
	  {
		  $this->form_validation->set_message('check_captcha','Captcha is Wrong');
		  return false;
	  }
	}
	
  
    function save()
    {	
    }
}
