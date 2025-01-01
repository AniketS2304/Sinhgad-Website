<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
    public function get_admin_by_username($username) {
        return $this->db->get_where('admins', ['username' => $username])->row();
    }
}
