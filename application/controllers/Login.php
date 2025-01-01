<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load the URL helper
        $this->load->helper('url');
        // Load session library if not already loaded
        $this->load->library('session');
    }

    // Display the login page
    public function index() {
        $this->load->view('admin/login');
    }

    // Validate login credentials
    public function validate() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        if ($username === 'admin' && $password === 'password') {
            $this->session->set_userdata('username', 'admin');
            redirect('admin/dashboard');  // Corrected to match the route in routes.php
        } else {
            echo "Invalid login credentials";
        }
    }
    

    // Logout function to clear session and redirect to login page
    public function logout() {
        // Unset session data
        $this->session->unset_userdata('username');
        // Redirect to login page after logout
        redirect('login');
    }
}
