<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    // Display Login Page
    public function login() {
        // Check if already logged in
        if ($this->session->userdata('admin_logged_in')) {
            redirect('admin/dashboard');
        }

        $this->load->view('admin/login'); // Make sure this view exists
    }

    // Process Login
    public function login_process() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            // Simple hardcoded validation for now
            if ($username == 'admin1' && $password == 'pass') {
                $this->session->set_userdata('admin_logged_in', TRUE);
                redirect('admin/dashboard');
            } else {
                $data['error'] = 'Invalid Username or Password';
                $this->load->view('admin/login', $data);
            }
        }
    }

    // Admin Dashboard
    public function dashboard() {
        // Check if admin is logged in
        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin/login');
        }

        $this->load->view('templates/header');
        $this->load->view('templates/leftnavbar');
        $this->load->view('admin/dashboard');
        $this->load->view('templates/footer');
    }

    // Logout
    public function logout() {
        $this->session->sess_destroy();
        redirect('admin/login');
    }
}
?>
