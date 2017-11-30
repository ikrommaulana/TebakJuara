<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Mstreaming extends CI_Model {
	function __construct()
    {
        parent::__construct();
    }
	
	function list_view(){
		$this->db->order_by('id','desc'); 
        $query = $this->db->get('streaming');
        return $query->result();
    }

	function save($query){
		$this->db->insert('streaming',$query);
    }

    function get($id) {
        return $query = $this->db->get_where('streaming', array('id' => $id))->row();
    }

    function edit($id) {
        $query = array (
       		'judul' => $this->input->post('title'),
          'link_video' => $this->input->post('link_video'),
          'category' => $this->input->post('category'),
          'deskripsi' => $this->input->post('deskripsi'),
       		'date' => $this->input->post('date')
       		);
        $this->db->where('id', $id);
        $this->db->update('streaming', $query);
    }

    function delete($where,$table) {
        $this->db->where($where);
        $this->db->delete($table);
    }

}