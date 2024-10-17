<?php
class User_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function login($username, $password) {
        // Use password_hash() and password_verify() for stronger security
        $query = $this->db->get_where('user', array('user_name' => $username, 'password' => $password));
        return $query->row_array(); // Return user data if found
    }
}
?>
