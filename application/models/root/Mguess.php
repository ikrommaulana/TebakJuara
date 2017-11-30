<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Mguess extends CI_Model {
	function __construct()
    {
        parent::__construct();
    }
	
	function list_match(){
		$this->db->order_by('id_match','desc'); 
        $query = $this->db->get('match');
        return $query->result();
    }
	
	function list_guess($id){
		$this->db->select('*');
		$this->db->from('point');
		$this->db->join('guess','point.id_guess = guess.id_guess');
		$this->db->where('guess.id_match', $id);
		$query = $this->db->get();
        return $query->result();
    }
	
	function all_guess($id){
		$this->db->select('*');
		$this->db->from('guess');
		$this->db->where('id_match', $id);
		$query = $this->db->get();
        return $query->result();
    }
	

}