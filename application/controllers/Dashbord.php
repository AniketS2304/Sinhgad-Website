<?
defined('BASEPATH') OR exit('No direct script access allowed');
// application/controllers/Dashboard.php
class Dashboard extends CI_Controller {
    public function index() {
        $this->load->view('dashboard');
    }

    public function manage_employees() {
        echo "Employee Management Page (Coming Soon)";
    }
}



?>