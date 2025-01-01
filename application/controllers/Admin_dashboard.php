<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Check if the user is logged in
        if (!$this->session->userdata('username')) {
            redirect('admin/login'); // Redirect to login if not logged in
        }
    }

    public function index() {
        // Load the dashboard view
        $this->load->view('admin/dashboard');  // Make sure the view exists
    }
}
