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
	
	function list_user(){
		$this->db->order_by('id','asc'); 
        $query = $this->db->get('user');
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

    function post_point($id) {
		$home_score = $this->input->post('home_score');
		$away_score = $this->input->post('away_score');
		$query = $this->db->get_where('guess', array('id_match' => $id,'guess_home' => $home_score, 'guess_away' => $away_score));
        return $query->result();
    }

    function insert_point($match,$guess,$username) {
        $query = array (
       		'id_match' => $match,
       		'id_guess' => $guess,
       		'username' => $username,
       		'point' => '1',
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