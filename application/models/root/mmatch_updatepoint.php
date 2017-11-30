<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Mmatch extends CI_Model {
	function __construct()
    {
        parent::__construct();
    }
	
	function list_match(){
		$this->db->order_by('id_match','desc'); 
        $query = $this->db->get('match');
        return $query->result();
    }
	
	function list_club(){
		$this->db->order_by('club_name','asc'); 
        $query = $this->db->get('club');
        return $query->result();
    }

	function save($query){
		$this->db->insert('match',$query);
    }

    function get($id) {
		$query = $this->db->get_where('match', array('id_match' => $id));
        return $query->row();
    }

    function select_logo($id) {
		$query = $this->db->get_where('club', array('club_name' => $id));
        return $query->row()->club_logo;
    }

    function update($id) {
        $query = array (
       		'home_score' => $this->input->post('home_score'),
       		'away_score' => $this->input->post('away_score'),
       		);
        $this->db->where('id_match', $id);
        $this->db->update('match', $query);
    }
	
    function get_match($id) {
		$query = $this->db->get_where('guess', array('id_match' => $id));
        return $query->result();
    }


    function post_point($guess_home,$guess_away) {
		$home_score = $this->input->post('home_score');
		$away_score = $this->input->post('away_score');
		$query = $this->db->get_where('guess', array('id_match' => $id));
        return $query->result();
    }

    function insert_point($match,$guess,$user,$username,$point) {
        $query = array (
       		'id_match' => $match,
       		'id_guess' => $guess,
       		'id_user' => $user,
       		'username' => $username,
       		'point' => $point,
       		'created_date' => date('Y/m/d')
       		);
        $this->db->insert('point', $query);
    }

    function zero_point($match,$guess,$user,$username) {
        $query = array (
       		'id_match' => $match,
       		'id_guess' => $guess,
       		'id_user' => $user,
       		'username' => $username,
       		'point' => '0',
       		'created_date' => date('Y/m/d')
       		);
        $this->db->insert('point', $query);
    }

}