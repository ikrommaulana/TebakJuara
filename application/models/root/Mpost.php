<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Mpost extends CI_Model {
	function __construct()
    {
        parent::__construct();
    }
	
	function list_post(){
		$this->db->order_by('id','desc'); 
        $query = $this->db->get('post');
        return $query->result();
    }

	function save($query){
		$this->db->insert('post',$query);
    }

    function get($id) {
        return $query = $this->db->get_where('post', array('id' => $id))->row();
    }

    function edit($id) {
        $query = array (
       		'title' => $this->input->post('title'),
       		'image' => $this->input->post('image'),
       		'url' => $this->input->post('url'),
       		'category' => $this->input->post('category'),
       		'status' => $this->input->post('status'),
       		'content' => $this->input->post('content'),
       		'user_id' => $this->input->post('user_id'),
       		'date' => $this->input->post('date')
       		);
        $this->db->where('id', $id);
        $this->db->update('post', $query);
    }

    function delete($where,$table) {
        $this->db->where($where);
        $this->db->delete($table);
    }

}