<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Mindex extends CI_Model {
	function __construct()
    {
        parent::__construct();
    }
	
	//function list_match(){
	//	$this->db->order_by('id_match','desc'); 
    //    $query = $this->db->get('match');
    //    return $query->result();

	
	function get_all_club(){
		$this->db->order_by('club_name','asc'); 
        $query = $this->db->get('club');
        return $query->result();
    }	
	function get_first_club(){
		$this->db->order_by('club_name','asc'); 
        $query = $this->db->get('club', 10, 0);
        return $query->result();
    }
	function get_last_club(){
		$this->db->order_by('club_name','desc'); 
        $query = $this->db->get('club', 10, 0);
        return $query->result();
    }
	
	function check_tebakan($username,$season) {
		$query = $this->db->get_where('tebakan', array('username' => $username,'season' => $season));
        return $query->num_rows();
    }

	function save($query){
		$this->db->insert('tebakan',$query);
    }

    function get_tebakan($username,$season) {
		$this->db->select('*');
		$this->db->from('tebakan');
		$this->db->join('club', 'tebakan.klub = club.id_club');
		$this->db->where('tebakan.username',$username);
		$this->db->where('tebakan.season',$season);
		$query = $this->db->get();
		return $query->result();
    }
	
	function insert_user($data){
		$this->db->insert('user', $data); 
		return TRUE;
	}
	
	function user_check($userid,$username) {
		$query = $this->db->get_where('user', array('username' => $username,'user_id' => $userid));
        return $query->num_rows();
    }

	function get_max_id(){
		$this->db->select_max('id');
		$query = $this->db->get('user');
        return $query->row();
    }
	
	
	
	//////

    function get() {
		$query = $this->db->order_by('id_match','DESC')->get('match');
        return $query->row();
    }

    function get_result() {
		$query = $this->db->query("SELECT * FROM `match` where home_score!='' and away_score!='' order by id_match desc");
        return $query->row();
    }

    function all_result() {
		$query = $this->db->query("SELECT * FROM `match` where home_score!='' and away_score!='' order by id_match asc");
        return $query->result();
    }

    function get_time() {
		$query = $this->db->order_by('id_match','ASC')->get('match');
        return $query->result();
    }
    
	function get_user($username) {
		$query = $this->db->get_where('user', array('username' => $username));
        return $query->row();
    }
    
	function get_userid($userid) {
		$query = $this->db->query("SELECT * FROM user WHERE id='$userid' OR user_id='$userid' ");
        return $query->row();
    }
	
	function guess_check($username,$match_id) {
		$query = $this->db->get_where('guess', array('username' => $username,'id_match' => $match_id));
        return $query->num_rows();
    }
    
	function get_guess($username,$match_id) {
		$query = $this->db->get_where('guess', array('username' => $username,'id_match' => $match_id));
        return $query->row();
    }
    
	function list_guess($username) {
		$this->db->select('*');
		$this->db->from('guess');
		$this->db->join('match','guess.id_match = match.id_match');
		$this->db->where('guess.username', $username);
		$query = $this->db->get();
        return $query->result();
    }
    
	function get_klasemen() {
		//return $this->db->query('SELECT *,COUNT(id_user) AS jmlwin, SUM(point) AS points FROM point GROUP BY id_user')->result();
		return $this->db->query('SELECT *, SUM(point) AS points FROM point LEFT JOIN guess ON point.id_guess=guess.id_guess GROUP BY guess.id_user ORDER BY points DESC,guess.id_guess')->result();
    }
	
	function id_check($userid,$username) {
		$query = $this->db->get_where('user', array('username' => $username,'id' => $userid));
        return $query->num_rows();
    }

	function updateprofile($query){
		$this->db->insert('user',$query);
		return $this->db->insert_id($query);
    }
	
	

}