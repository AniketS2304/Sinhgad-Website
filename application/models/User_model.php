<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function authenticate_admin($username, $password) {
        // Query the database to check if the username and password match
        $this->db->where('username', $username);
        $query = $this->db->get('users');  // Assuming 'users' table contains admin details

        if ($query->num_rows() == 1) {
            $user = $query->row();
            // Check if the password matches (assuming passwords are stored as plaintext for now)
            if ($user->password == $password) {
                return $user;  // Return the user object if credentials are correct
            }
        }
        return false;  // Return false if the credentials are incorrect
    }
}
