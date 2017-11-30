<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Mapplicant extends CI_Model {
	function __construct()
    {
        parent::__construct();
    }
	
	function list_applicant(){
		$this->db->select('*');
		$this->db->from('carrer');
		$this->db->join('carrer_apply', 'carrer.id_carrer = carrer_apply.id_carrer');
		$this->db->order_by('id_carrer_apply','asc'); 
        $query = $this->db->get();
        return $query->result();
    }

    function delete($where,$table) {
        $this->db->where($where);
        $this->db->delete($table);
    }

}