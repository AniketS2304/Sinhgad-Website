<?php
class Welcome extends CI_Controller {
    public function index() {
        // Load the database to check connection
        $this->load->database();

        // Simple test query
        $query = $this->db->query('SELECT 1');
        if ($query) {
            echo "Database connection successful!";
        } else {
            echo "Database connection failed!";
        }

        // Load the default view
        $this->load->view('welcome_message');
    }
}




