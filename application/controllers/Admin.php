<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function login() {
        // Load the login view
        $this->load->view('admin/login');
    }

    public function login_process() {
        // Get input from form
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Load the Admin_model to check credentials
        $this->load->model('Admin_model');

        // Verify admin credentials
        $admin = $this->Admin_model->check_credentials($username, $password);

        if ($admin) {
            // Set session data upon successful login
            $this->session->set_userdata('logged_in', true);
            $this->session->set_userdata('username', $username);

            // Redirect to the dashboard
            redirect('admin/dashboard'); // Ensure this matches your route
        } else {
            // Display error message if login fails
            $data['error'] = 'Invalid Username or Password!';
            $this->load->view('admin/login', $data);
        }
    }



    public function dashboard() {
        // Load the dashboard view (Make sure the view exists)
        $this->load->view('admin/dashboard');
    }

    public function add_reporting_officer_form() {
        // Load the add_reporting_officer view to display the form
        $this->load->view('admin/add_reporting_officer');
    }
    

    public function add_reporting_officer() {
        // Get data from the form
        $empid = $this->input->post('empid');
        $email = $this->input->post('email');
        $mobile = $this->input->post('mobile');
    
        // Load the ReportingOfficers_model
        $this->load->model('ReportingOfficers_model');
    
        // Add Reporting Officer using the model
        $result = $this->ReportingOfficers_model->add_reporting_officer($empid, $email, $mobile);
    
        // Check if the officer was added successfully
        if ($result['status']) {
            // Return the raw password for communication (maybe for email or other purposes)
            $this->session->set_flashdata('success', 'Reporting Officer added successfully. Password: ' . $result['password']);
        } else {
            // Handle error
            $this->session->set_flashdata('error', 'Error: ' . $result['error']);
        }
    
        // Redirect to dashboard or any other page
        redirect('admin/dashboard');
    }
    




    public function logout() {
        // Destroy session and log out
        $this->session->sess_destroy();
        redirect('admin/login');
    }
}
