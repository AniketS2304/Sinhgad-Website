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



    public function logout() {
        // Destroy session and log out
        $this->session->sess_destroy();
        redirect('admin/login');
    }
}
