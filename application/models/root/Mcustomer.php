<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Mcustomer extends CI_Model {
	function __construct()
    {
        parent::__construct();
    }
	
	function list_customer(){
		$this->db->order_by('joined_date','desc'); 
        $this->db->select('*');
        $this->db->from('customers');
        $this->db->join('mkm_province','mkm_province.id=customers.propinsi');
        $this->db->join('mkm_city','mkm_city.id=customers.kota');
        $this->db->join('mkm_district','mkm_district.id=customers.kecamatan');
        $this->db->join('mkm_subdistrict','mkm_subdistrict.id=customers.kelurahan','left');
        $query = $this->db->get();
        return $query->result();
    }
    
    function search_customer($from,$until){
        $this->db->order_by('joined_date','desc'); 
        $query = $this->db->get_where('customers', array('joined_date' => $from, 'joined_date' <= $until));
        return $query->result();
    }


}