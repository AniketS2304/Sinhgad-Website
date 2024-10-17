<?php
class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper('url'); // Load URL helper for site_url() and redirect()
    }

    public function dashboard() {
        // redirect('login');
        $this->load->view('dashboard');
    }
    

    public function index() {
        $this->load->view('login');
    }

    public function authenticate() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Call the model function to check login credentials
        $user = $this->User_model->login($username, $password);

        if ($user) {
            // Successful login, redirect to dashboard or home
            $this->session->set_userdata('user_id', $user['id']);
            redirect('login/dashboard');
        } else {
            // Login failed, reload login view with error
            $data['error'] = "Invalid Username or Password";
            $this->load->view('login', $data);
        }
    }

    public function logout() {
        $this->session->unset_userdata('user_id');
        redirect('login');
    }
}
?>
