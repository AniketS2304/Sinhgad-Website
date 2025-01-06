<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportingOfficers extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ReportingOfficers_model');
        $this->load->helper('url'); // For redirecting
        $this->load->library('session'); // For flash messages
    }

    // Add a new reporting officer
    public function add_officer() {
        $empid = $this->input->post('empid');
        $email = $this->input->post('email');
        $mobile = $this->input->post('mobile');

        $result = $this->ReportingOfficers_model->add_reporting_officer($empid, $email, $mobile);

        if ($result['status']) {
            $this->session->set_flashdata('success', 'Officer added successfully. Password: ' . $result['password']);
        } else {
            $this->session->set_flashdata('error', 'Failed to add officer: ' . $result['error']);
        }

        redirect('reportingofficers/list');
    }

    // View all reporting officers
    public function list_officers() {
        $data['officers'] = $this->ReportingOfficers_model->get_all_reporting_officers();
        $this->load->view('reporting_officers_list', $data);
    }

    // View a specific reporting officer
    public function view_officer($empid) {
        $data['officer'] = $this->ReportingOfficers_model->get_reporting_officer($empid);

        if (!$data['officer']) {
            $this->session->set_flashdata('error', 'Officer not found!');
            redirect('reportingofficers/list');
        }

        $this->load->view('reporting_officer_view', $data);
    }

    // Update a reporting officer
    public function update_officer() {
        $empid = $this->input->post('empid');
        $email = $this->input->post('email');
        $mobile = $this->input->post('mobile');

        $updated = $this->ReportingOfficers_model->update_reporting_officer($empid, $email, $mobile);

        if ($updated) {
            $this->session->set_flashdata('success', 'Officer updated successfully.');
        } else {
            $this->session->set_flashdata('error', 'Failed to update officer.');
        }

        redirect('reportingofficers/list');
    }

    // Delete a reporting officer
    public function delete_officer($empid) {
        $deleted = $this->ReportingOfficers_model->delete_reporting_officer($empid);

        if ($deleted) {
            $this->session->set_flashdata('success', 'Officer deleted successfully.');
        } else {
            $this->session->set_flashdata('error', 'Failed to delete officer.');
        }

        redirect('reportingofficers/list');
    }
}
?>
