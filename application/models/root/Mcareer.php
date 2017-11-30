<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Mcareer extends CI_Model {
	function __construct()
    {
        parent::__construct();
    }
	
	function list_career(){
		$this->db->order_by('id_carrer','desc'); 
        $query = $this->db->get('carrer');
        return $query->result();
    }

	function save($query){
		$this->db->insert('carrer',$query);
    }

    function get($id_carrer) {
        return $query = $this->db->get_where('carrer', array('id_carrer' => $id_carrer))->row();
    }

    function edit($id_carrer) {
        $query = array (
       		'job_title' => $this->input->post('jobtitle'),
                'department' => $this->input->post('department'),
                'location' => $this->input->post('location'),
                'latest_education' => $this->input->post('edu'),
                'years_experience' => $this->input->post('exp'),
                'status' => $this->input->post('status'),
                'desc' => $this->input->post('desc'),
       		);
        $this->db->where('id_carrer', $id_carrer);
        $this->db->update('carrer', $query);
    }

    function delete($where,$table) {
        $this->db->where($where);
        $this->db->delete($table);
    }

}