<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Facebooklogin extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->config('fbconfig');
		$this->load->library('facebook');
		$this->load->helper('url');
		$this->load->model('tebakjuara/mindex'); 
	}

	function index($error = NULL)
	{	
        $fbConfig = $this->config->item('fbconfig');
		$user = $this->facebook->request('get', '/me?fields=id,name,email,gender,picture');
		
		if (!isset($user['error']))
		{
			$data['user'] = $user;
			$checkemail = $this->db->query('select id,email 
				from user where email = "'.$user["email"].'"');
			$emailresult = $checkemail->result_array();
			
			if($emailresult[0]['email'] != $user["email"])
			{
				$names =  explode(" ", $user['name']);
				$user_information  = array(
				'name'       => $user["name"],
				'email'          => $user["email"],
				'source_id'      => $user["id"],
				'source'         => 'Facebook',
				'profilepicture' => 'https://graph.facebook.com/'.$user["id"].'/picture?type=large',  
				);
				
				$this->mindex->insert_user($user_information);
				$insert_id = $this->db->insert_id();
				$fetchuser = $this->db->query('select * from user where id = "'.$insert_id.'"');
				$userdata = $fetchuser->result_array();
				
				$this->session->set_userdata ( 'user_id', $userdata[0]['id'] );
				$this->session->set_userdata ( 'user_name', $userdata[0]['name'] );
				$this->session->set_userdata ( 'user_email', $userdata[0]['email'] );
				$this->session->set_userdata ( 'user_source_id', $userdata[0]['source_id'] );
			} else if($emailresult[0]['email'] == $user["email"]) {
				$update_id = array('source_id'  => $user["id"],
				   'source'  =>'Facebook',
				   'profilepicture'  => 'https://graph.facebook.com/'.$user["id"].'/picture?type=large');
				$this->db->where('id', $emailresult[0]['id']);
				$this->db->update('users', $update_id);
				$fetchuser = $this->db->query('select * from users where id = "'.$emailresult[0]['id'].'"');
				$userdata = $fetchuser->result_array();
				$this->session->set_userdata ( 'user_id', $userdata[0]['id'] );
				$this->session->set_userdata ( 'user_name', $userdata[0]['name'] );
				$this->session->set_userdata ( 'user_email', $userdata[0]['email'] );
				$this->session->set_userdata ( 'user_gender', $userdata[0]['gender'] );
				$this->session->set_userdata ( 'user_source', $userdata[0]['source'] );
				$this->session->set_userdata ( 'user_source_id', $userdata[0]['source_id'] );
				}

		$data['userprofile'] = $this->session->userdata();
		//echo "<pre>";
		//print_r($data['userprofile']);
		redirect('tebakjuara/home', $data);

		}
	}
}