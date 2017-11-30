<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Mmagazine extends CI_Model {
	function __construct()
    {
        parent::__construct();
    }
	
	function list_magazine(){
		$this->db->order_by('id','desc'); 
        $query = $this->db->get('magazine');
        return $query->result();
    }

	function save($query){
		$this->db->insert('magazine',$query);
    }

    function get($id) {
        return $query = $this->db->get_where('magazine', array('id' => $id))->row();
    }

    function edit($id) {
        $query = array (
       		'name' => $this->input->post('name'),
       		'id_mag' => $this->input->post('id_mag'),
       		'image' => $this->input->post('image'),
       		'download' => $this->input->post('download'),
          	'embed' => $this->input->post('embed'),
       		'target' => $this->input->post('target'),
       		'user_id' => $this->input->post('user_id'),
       		'status' => $this->input->post('status'),
       		'date' => $this->input->post('date')
       		);
        $this->db->where('id', $id);
        $this->db->update('magazine', $query);
    }

    function delete($where,$table) {
        $this->db->where($where);
        $this->db->delete($table);
    }
	
	function view($limit, $offset)  {
		$this->db->order_by('id','desc'); 
		$this->db->limit($limit, $offset);
		$query = $this->db->get('magazine');
		return $query->result();
	}

}