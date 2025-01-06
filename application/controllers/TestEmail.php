<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestEmail extends CI_Controller {

    public function index() {
        // Load email library
        $this->load->library('email');
        
        // Get your email configuration from email.php
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => getenv('SMTP_USER'),  // Using environment variable
            'smtp_pass' => getenv('SMTP_PASS'),  // Using environment variable
            'smtp_port' => 587,
            'smtp_crypto' => 'tls',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'wordwrap' => TRUE
        ];

        // Initialize email configuration
        $this->email->initialize($config);

        // Set email parameters
        $this->email->from('try.aniketsuryavanshi2304@gmail.com', 'jesm pvhj nmen okxl');
        $this->email->to('adhikeshpawar@gmail.com');
        $this->email->subject('Test Email');
        $this->email->message('This is a test email to verify your email configuration.');

        // Send email and check if it's successful
        if ($this->email->send()) {
            echo 'Email sent successfully!';
        } else {
            echo 'Email sending failed: ' . $this->email->print_debugger();
        }
    }
}
