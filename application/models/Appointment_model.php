<?php
class Appointment_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert_appointment($data) {
        return $this->db->insert('appointments', $data);
    }
}
