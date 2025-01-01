<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function login() {
        // Load login view
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
            $this->session->set_userdata('logged_in', true);
            $this->session->set_userdata('username', $username);
            redirect('adminDashboard'); // Ensure this matches the route
        } else {
            $data['error'] = 'Invalid Username or Password!';
            $this->load->view('admin/login', $data);
        }
        
    }
    

    public function logout() {
        // Destroy session and log out
        $this->session->sess_destroy();
        redirect('admin/login');
    }
}
