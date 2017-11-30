<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Mlogin extends CI_Model {
    
    function login($username,$password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('level', 'admin');
        $this->db->where('email', 'mncplaymedia@gmail.com');
        $query =  $this->db->get('user');
        return $query->num_rows();
    }
    
    function data_login($username,$password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('level', 'admin');
        return $this->db->get('user')->row();
    }
}