<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// application/controllers/Login.php
class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load the URL helper
        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('login');
    }

    public function validate() {
        if ($this->input->post('username') === 'admin' && $this->input->post('password') === 'password') {
            $this->session->set_userdata('username', 'admin');
            redirect('admin_dashboard');
        } else {
            echo "Invalid login credentials";
        }
    }

    public function logout() {
        $this->session->unset_userdata('username');
        redirect('login');
    }

}

