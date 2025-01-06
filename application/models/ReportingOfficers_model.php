<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportingOfficers_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Insert Reporting Officer Data with Random Password
    public function add_reporting_officer($empid, $email, $mobile) {
        // Generate a secure random password
        $raw_password = bin2hex(random_bytes(4)); // 8-character random password
        $hashed_password = password_hash($raw_password, PASSWORD_DEFAULT); // Hash the password
        
        $data = array(
            'empid' => $empid,
            'email' => $email,
            'mobile' => $mobile,
            'password' => $hashed_password,
            'created_at' => date('Y-m-d H:i:s')
        );
        
        if ($this->db->insert('reporting_officers', $data)) {
            // Return the raw password for further communication
            return array('status' => true, 'password' => $raw_password);
        } else {
            return array('status' => false, 'error' => $this->db->error());
        }
    }

    // Fetch Reporting Officer by Employee ID
    public function get_reporting_officer($empid) {
        $query = $this->db->get_where('reporting_officers', array('empid' => $empid));
        return $query->row_array();
    }

    // Update Reporting Officer Details
    public function update_reporting_officer($empid, $email, $mobile) {
        $data = array(
            'email' => $email,
            'mobile' => $mobile,
            'updated_at' => date('Y-m-d H:i:s')
        );
        $this->db->where('empid', $empid);
        return $this->db->update('reporting_officers', $data);
    }

    // Delete Reporting Officer by Employee ID
    public function delete_reporting_officer($empid) {
        $this->db->where('empid', $empid);
        return $this->db->delete('reporting_officers');
    }

    // Fetch All Reporting Officers
    public function get_all_reporting_officers() {
        $query = $this->db->get('reporting_officers');
        return $query->result_array();
    }
}
?>
