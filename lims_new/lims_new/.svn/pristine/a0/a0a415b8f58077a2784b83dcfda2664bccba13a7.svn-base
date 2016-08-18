<?php

class lab_tests_controller extends CI_Controller {

    /*function __construct()
    {
        parent::__construct();

        $this->_init();
    }

    private function _init()
    {
        $this->output->set_template('default');
        $this->load->section('sidebar', 'includes/sidebar');
    }

    public function index() {
        $this->load->view('new_test_request');
    }*/
    
    public function getAllLabTests() {
        
        
        $this->load->model('laboratory_test_model');
        $result = $this->laboratory_test_model->GetAllLabTests();

        echo json_encode($result);
    }
    
}