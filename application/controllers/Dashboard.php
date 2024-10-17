<?php
class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('user_id')) {
            redirect('login');
        }
    }

    public function index() {
        $this->load->view('dashboard');
    }
}
?>
