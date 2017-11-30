<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Madmin extends CI_Model {
    
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
	
	function tebakan_midseason(){
		$this->db->select('*');
		$this->db->from('tebakan a'); 
		$this->db->join('club b', 'b.id_club=a.klub', 'left');
        $this->db->where('season', 'half');
        $query = $this->db->get();
        return $query->result();
    }
	
	function tebakan_endseason(){
		$this->db->select('*');
		$this->db->from('tebakan a'); 
		$this->db->join('club b', 'b.id_club=a.klub', 'left');
        $this->db->where('season', 'full');
        $query = $this->db->get();
        return $query->result();
    }
	
	function jumlah_tebakan($season) {
		$query = $this->db->where('season', $season)->get('tebakan');
		return $query->num_rows();
	}
}