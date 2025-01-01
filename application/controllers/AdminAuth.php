<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminAuth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('session');
    }

    // Display login form
    public function login() {
        $this->load->view('admin/login');
    }

    // Handle login submission
    public function login_process() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $admin = $this->Admin_model->get_admin_by_username($username);
        
        if ($admin && password_verify($password, $admin->password)) {
            // Set session data
            $this->session->set_userdata('admin_id', $admin->id);
            redirect('admin/dashboard');
        } else {
            $this->session->set_flashdata('error', 'Invalid credentials');
            redirect('admin/login');
        }
    }

    // Logout
    public function logout() {
        $this->session->unset_userdata('admin_id');
        redirect('admin/login');
    }
}
