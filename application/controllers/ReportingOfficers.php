<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportingOfficer extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ReportingOfficers_model'); // Load the model
        $this->load->library('session'); // To manage sessions
    }

    // Display the officer's dashboard
    public function dashboard() {
        // Your code to display dashboard
        $this->load->view('reporting_officer/dashboard');
    }

    // Display the officer's profile
    public function profile($empid) {
        $data['officer'] = $this->ReportingOfficers_model->get_officer_by_id($empid);
        $this->load->view('reporting_officer/profile', $data); // Load profile view
    }

    // Update the officer's details (email, mobile)
    public function update($empid) {
        if ($this->input->post()) {
            $email = $this->input->post('email');
            $mobile = $this->input->post('mobile');
    
            $update_result = $this->ReportingOfficers_model->update_reporting_officer($empid, $email, $mobile);
    
            if ($update_result['status'] === true) {
                $this->session->set_flashdata('success', 'Profile updated successfully!');
            } else {
                $this->session->set_flashdata('error', $update_result['error']);
            }
            redirect('reporting_officer/profile/' . $empid); // Redirect back to the profile page
        }
    }
    

    // Change the officer's password
    public function change_password($empid) {
        if ($this->input->post()) {
            $new_password = $this->input->post('new_password');
            $change_result = $this->ReportingOfficers_model->change_password($empid, $new_password);

            if ($change_result['status'] === true) {
                $this->session->set_flashdata('success', 'Password changed successfully!');
            } else {
                $this->session->set_flashdata('error', $change_result['error']);
            }
            redirect('reporting_officer/profile/' . $empid); // Redirect back to the profile page
        } else {
            $data['officer'] = $this->ReportingOfficers_model->get_officer_by_id($empid);
            $this->load->view('reporting_officer/change_password', $data); // Load password change form
        }
    }
}
?>
