<?php

class New_test_request_controller extends CI_Controller {

    function __construct()
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
    }
    
    public function GetAllTestRequestTypes() {
        
        
        $this->load->model('Laboratory_Test');
        $result = $this->Laboratory_Test->GetAllTestRequestTypes();

        echo json_encode($result);
    }
    
    public function InsertNewInternalRequests()
    {
        if (isset($_POST['requests'])) {
            $Data = $_POST['requests'];

            $data_string = json_encode($Data);
            
            $this->load->model('laboratory_test_request_model');
            $ss = $this->laboratory_test_request_model->InsertNewInternalRequests($data_string);
            
            echo json_encode($ss);
            exit;
        }

    }
    
    public function InsertNewHospitalRequests()
    {
        if (isset($_POST['requests'])) {
            $Data = $_POST['requests'];

            $data_string = json_encode($Data);
            
            $this->load->model('laboratory_test_request_model');
            $ss = $this->laboratory_test_request_model->InsertNewHospitalRequests($data_string);
            
            
            echo json_encode($ss);
   
        }

    }
    
     public function GetLastRequestID() {

        $this->load->model('laboratory_test_request_model');
        $result = $this->laboratory_test_request_model->GetLastRequestID();
       
        echo json_encode($result);
        exit;
    }
    
}