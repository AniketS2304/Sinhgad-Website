<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDashboard extends CI_Controller {

    public function index() {
        // Load dashboard view
        $this->load->view('admin/dashboard');  // Ensure the view exists
    }
}
