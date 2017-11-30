<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Msponsorship extends CI_Model {
	function __construct()
    {
        parent::__construct();
    }
	
	function list_slide(){
		$this->db->select('*');
		$this->db->from('slide');
    $this->db->where('category', '1');
		$query = $this->db->get();
        return $query->result();
    }
	function save($query){
		$this->db->insert('slide',$query);
    }

    function get($id) {
        return $query = $this->db->get_where('slide', array('id' => $id))->row();
    }

    function edit($id) {
        $query = array (
       		'title' => $this->input->post('title'),
          'image' => $this->input->post('image'),
          'link' => $this->input->post('link'),
          'target' => $this->input->post('target'),
          'category' => $this->input->post('category'),
          'order' => $this->input->post('order'),
          'status' => $this->input->post('status'),
          'user_id' => $this->input->post('user_id'),
          'date' => $this->input->post('date')
       		);
        $this->db->where('id', $id);
        $this->db->update('slide', $query);
    }

    function delete($where,$table) {
        $this->db->where($where);
        $this->db->delete($table);
    }
}