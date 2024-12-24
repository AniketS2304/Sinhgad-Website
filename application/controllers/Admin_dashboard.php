<?
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dashboard extends CI_Controller {
    public function index() {
        $this->load->view('dashboard');
    }

    public function manage_employees() {
        // This method will be used to manage employees
        echo "Employee Management Page (Coming Soon)";
    }
}


?>