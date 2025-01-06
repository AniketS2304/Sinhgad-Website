<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportingOfficers extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ReportingOfficers_model');  // Load the model
        $this->load->library('email');  // Load the email library
    }

    // Add a new Reporting Officer
    public function add_officer() {
        // Load the view to show the form
        $this->load->view('admin/add_reporting_officer');
    }

    // Process the form to add a new Reporting Officer
    public function process_add_officer() {
        // Get data from the form
        $empid = $this->input->post('empid');
        $email = $this->input->post('email');
        $mobile = $this->input->post('mobile');

        // Call the model to add the officer
        $result = $this->ReportingOfficers_model->add_reporting_officer($empid, $email, $mobile);

        // Check the result and display a message
        if ($result['status']) {
            // Send email to the officer
            $this->_send_email($email, $empid, $mobile);

            // Success flash message with password hidden
            $this->session->set_flashdata('success', 'Reporting Officer added successfully. Password has been sent to their email.');
        } else {
            $this->session->set_flashdata('error', 'Error: ' . $result['error']);
        }

        // Redirect to the dashboard or another page
        redirect('admin/dashboard');
    }

    // Send email to the Reporting Officer
    private function _send_email($email, $empid, $mobile) {
        // Configure email settings
        $this->email->from('aniketsuryavanshi2304@gmail.com', 'Sinhgad Institute');
        $this->email->to($email);
        $this->email->subject('Welcome as a Reporting Officer');
        
        // Email message
        $message = "
            <p>Dear Reporting Officer,</p>
            <p>Congratulations! You have been added as a Reporting Officer.</p>
            <p>Your details are as follows:</p>
            <ul>
                <li>Employee ID: {$empid}</li>
                <li>Email: {$email}</li>
                <li>Mobile: {$mobile}</li>
            </ul>
            <p>Best regards,</p>
            <p>Your Company</p>
        ";

        // Send email
        $this->email->message($message);

        // Check if email sent successfully
        if ($this->email->send()) {
            log_message('info', 'Email sent to Reporting Officer: ' . $email);
        } else {
            log_message('error', 'Failed to send email to Reporting Officer: ' . $email);
        }
    }

    // View a specific Reporting Officer by Employee ID
    public function view_officer($empid) {
        // Get the officer data from the model
        $officer = $this->ReportingOfficers_model->get_reporting_officer($empid);
        
        if ($officer) {
            // Load the view to display officer details
            $data['officer'] = $officer;
            $this->load->view('admin/view_reporting_officer', $data);
        } else {
            // Officer not found
            $this->session->set_flashdata('error', 'Reporting Officer not found.');
            redirect('admin/dashboard');
        }
    }

    // Edit a Reporting Officer
    public function update_officer($empid) {
        // Fetch officer data
        $officer = $this->ReportingOfficers_model->get_reporting_officer($empid);

        if ($officer) {
            // Load the edit form with officer data
            $data['officer'] = $officer;
            $this->load->view('admin/edit_reporting_officer', $data);
        } else {
            // Officer not found
            $this->session->set_flashdata('error', 'Reporting Officer not found.');
            redirect('admin/dashboard');
        }
    }

    // Update the Reporting Officer details
    public function process_update_officer($empid) {
        // Get the updated data from the form
        $email = $this->input->post('email');
        $mobile = $this->input->post('mobile');

        // Call the model to update the officer
        $result = $this->ReportingOfficers_model->update_reporting_officer($empid, $email, $mobile);

        if ($result) {
            $this->session->set_flashdata('success', 'Reporting Officer details updated successfully.');
        } else {
            $this->session->set_flashdata('error', 'Error updating Reporting Officer.');
        }

        // Redirect to the dashboard or another page
        redirect('admin/dashboard');
    }

    // Delete a Reporting Officer
    public function delete_officer($empid) {
        // Call the model to delete the officer
        $result = $this->ReportingOfficers_model->delete_reporting_officer($empid);

        if ($result) {
            $this->session->set_flashdata('success', 'Reporting Officer deleted successfully.');
        } else {
            $this->session->set_flashdata('error', 'Error deleting Reporting Officer.');
        }

        // Redirect to the dashboard or another page
        redirect('admin/dashboard');
    }

    public function list_all() {
        // Fetch all reporting officers from the model
        $data['officers'] = $this->ReportingOfficers_model->get_all_reporting_officers();
    
        // Load the view to display the list of officers
        $this->load->view('admin/reporting_officer_list', $data);
    }
    
}
