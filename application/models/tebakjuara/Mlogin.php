<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Mlogin extends CI_Model {
    
    function login($username,$password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('status', 1);
        $query =  $this->db->get('user');
        return $query->num_rows();
    }
    
    function data_login($username,$password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('user')->row();
    }
	
	function register($data) {  
         $this->db->insert('user',$data);  
		 return $this->db->insert_id($data);
    }  
	
	function username_check($username) {  
        $this->db->where('username',$username); 
        $query =  $this->db->get('user');
        return $query->num_rows();
    }  
	
	function email_check($email) {  
        $this->db->where('email',$email); 
        $query =  $this->db->get('user');
        return $query->num_rows();
    }  
	
	function changeActiveState($key) {
		$this->load->database();
		$data = array('status' => 1);
		$this->db->where('md5(id)', $key);
		$this->db->update('user', $data);
		return true;
	}

	function get_max_id(){
		$this->db->select_max('id');
		$query = $this->db->get('user');
        return $query->row();
    }
	
	function updateprofile($id,$post) {  
         $this->db->where('user_id',$id); 
         return $this->db->update('user',$post);  
    } 
}