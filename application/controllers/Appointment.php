<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('Appointment_model');
    }

    public function index() {
        $this->load->view('appointment_form');
    }

    public function save() {
        $recaptcha_response = $this->input->post('g-recaptcha-response');
        $secret_key = '6Lfo-DMqAAAAANhmPLF6f_fxw5QZBIqGy-PiH0PZ';
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret_key&response=$recaptcha_response");
        $response_keys = json_decode($response, true);

        if (intval($response_keys["success"]) !== 1) {
            $this->session->set_flashdata('error', 'Please complete the reCAPTCHA');
            redirect('appointment');
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'appointment_date' => $this->input->post('appointment_date'),
                'details' => $this->input->post('details'),
            );

            // Save data to the model
            $this->Appointment_model->insert_appointment($data);

            // Store data in session to show on the success page
            $this->session->set_flashdata('appointment_data', $data);

            // Clear form data by redirecting
            redirect('appointment/success');
        }
    }

    public function success() {
        // Load the success view
        $data['appointment_data'] = $this->session->flashdata('appointment_data');
        $this->load->view('appointment_success', $data);
    }
}
