<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ReportingOfficers_model');
        $this->load->library('session');
        $this->load->library('pagination'); // Load pagination library
    }

    // 🏠 Dashboard
    public function index() {
        $this->load->view('admin/dashboard');
    }

    public function login() {
        $this->load->view('admin/login');
    }

    public function login_process() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->load->model('Admin_model');
        $admin = $this->Admin_model->check_credentials($username, $password);

        if ($admin) {
            $this->session->set_userdata('logged_in', true);
            $this->session->set_userdata('username', $username);
            redirect('admin/dashboard');
        } else {
            $data['error'] = 'Invalid Username or Password!';
            $this->load->view('admin/login', $data);
        }
    }

    public function dashboard() {
        $this->load->view('admin/dashboard');
    }

    // 📋 **1. List All Reporting Officers**
    public function list_all() {
        // Pagination settings
        $config['base_url'] = site_url('admin/reporting_officer_list');
        $config['total_rows'] = $this->ReportingOfficers_model->get_count_all_officers();
        $config['per_page'] = 10;
        $this->pagination->initialize($config);

        // Fetching paginated data
        $data['officers'] = $this->ReportingOfficers_model->get_paginated_officers($config['per_page'], $this->uri->segment(3));
        $data['pagination'] = $this->pagination->create_links();
        
        $this->load->view('admin/reporting_officer_list', $data);
    }

    // 📝 **2. Add a Reporting Officer**
    public function add_officer() {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $empid = $this->input->post('empid');
            $email = $this->input->post('email');
            $mobile = $this->input->post('mobile');
            
            $result = $this->ReportingOfficers_model->add_reporting_officer($empid, $email, $mobile);
            
            if ($result['status']) {
                $this->session->set_flashdata('success', 'Reporting Officer added successfully. Password: ' . $result['password']);
            } else {
                $this->session->set_flashdata('error', 'Error: ' . $result['error']);
            }
            
            redirect('admin/reporting_officer_list');
        } else {
            $this->load->view('admin/add_reporting_officer');
        }
    }

    // 👁️ **3. View Reporting Officer Details**
    public function view_officer($id) {
        $data['officer'] = $this->ReportingOfficers_model->get_officer_by_id($id);
        if (!$data['officer']) {
            $this->session->set_flashdata('error', 'Reporting Officer not found.');
            redirect('admin/reporting_officer_list');
        }
        $this->load->view('admin/view_reporting_officer', $data);
    }

    // ✏️ **4. Edit Reporting Officer**
    public function update_officer($empid) {
        // Fetch officer details using the empid
        $officer = $this->ReportingOfficers_model->get_officer_by_id($empid);
        
        if (!$officer) {
            show_404(); // Show 404 if the officer is not found
        }
    
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            // Collect updated data from the form
            $email = $this->input->post('email');
            $mobile = $this->input->post('mobile');
            
            // Update the officer data
            $result = $this->ReportingOfficers_model->update_reporting_officer($empid, $email, $mobile);
            
            if ($result['status']) {
                $this->session->set_flashdata('success', 'Officer updated successfully.');
                redirect('admin/reporting_officer_list'); // Redirect back to the officer list
            } else {
                $this->session->set_flashdata('error', $result['error']);
                redirect('admin/reporting_officers/edit/' . $empid); // Stay on the edit page if there's an error
            }
        } else {
            // Pass officer data to the view if it's a GET request
            $data['officer'] = $officer;
            $this->load->view('admin/edit_reporting_officer', $data); // Load the edit form view
        }
    }
    

    // 🗑️ **5. Delete Reporting Officer**
    public function delete_officer($empid) {
        // First, check if the officer exists
        $officer = $this->ReportingOfficers_model->get_officer_by_id($empid);
    
        if (!$officer) {
            show_404(); // If officer doesn't exist, show 404
        }
    
        // Call the model function to delete the officer
        $result = $this->ReportingOfficers_model->delete_reporting_officer($empid);
    
        if ($result) {
            // Success: Officer deleted
            $this->session->set_flashdata('success', 'Officer deleted successfully.');
        } else {
            // Error: Could not delete officer
            $this->session->set_flashdata('error', 'Error occurred while deleting the officer.');
        }
    
        // Redirect back to the officer list
        redirect('admin/reporting_officer_list');
    }
    

    // Logout functionality
    public function logout() {
        $this->session->sess_destroy();
        redirect('admin/login');
    }
}
