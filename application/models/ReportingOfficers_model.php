<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportingOfficers_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Insert Reporting Officer Data with Random Password
    public function add_reporting_officer($empid, $email, $mobile) {
        try {
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
                throw new Exception("Failed to insert officer: " . $this->db->last_query());
            }
        } catch (Exception $e) {
            return array('status' => false, 'error' => $e->getMessage());
        }
    }

    // Update Reporting Officer Details
    public function update_reporting_officer($empid, $email, $mobile) {
        // Validate inputs
        if (empty($email) || empty($mobile)) {
            return array('status' => false, 'error' => 'Email and Mobile cannot be empty');
        }

        $data = array(
            'email' => $email,
            'mobile' => $mobile,
            'updated_at' => date('Y-m-d H:i:s')
        );

        $this->db->where('empid', $empid);
        if ($this->db->update('reporting_officers', $data)) {
            return array('status' => true);
        } else {
            return array('status' => false, 'error' => $this->db->error());
        }
    }

    // Delete Reporting Officer by Employee ID
    public function delete_reporting_officer($empid) {
        $this->db->where('empid', $empid);
        return $this->db->delete('reporting_officers');
    }

    // Method to get the total count of all officers
    public function get_count_all_officers() {
        $query = $this->db->count_all('reporting_officers'); 
        return $query;
    }

    // Method to get paginated officers
    public function get_paginated_officers($limit, $start) {
        $query = $this->db->get('reporting_officers', $limit, $start); 
        return $query->result();
    }

    // Get officer by empid (ID)
    public function get_officer_by_id($empid) {
        // Query to get officer details based on empid
        $this->db->where('empid', $empid);
        $query = $this->db->get('reporting_officers');
        
        // Return the first matching officer
        return $query->row();
    }

    
    
}
?>
