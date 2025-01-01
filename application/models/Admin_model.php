// application/models/Admin_model.php

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

   // application/models/Admin_model.php
public function check_credentials($username, $password) {
    $this->db->where('username', $username);
    $this->db->where('password', $password); // Direct password comparison
    $query = $this->db->get('admins');
    
    if ($query->num_rows() == 1) {
        return $query->row(); // Return the user data if credentials are correct
    } else {
        return false; // Invalid credentials
    }
}

}
