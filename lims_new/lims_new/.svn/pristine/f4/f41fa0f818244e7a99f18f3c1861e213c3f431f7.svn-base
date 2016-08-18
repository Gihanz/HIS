<?php

class test_request_progress_controller_1 extends CI_Controller {

    
    
    public function GetInternalRequests() {
        
        
        $this->load->model('laboratory_test_request_model');
        $result = $this->laboratory_test_request_model->GetInternalRequests();

        echo json_encode($result);
    }
    public function GetAllTestRequestTypes() {
        
        
        $this->load->model('Laboratory_Test');
        $result = $this->Laboratory_Test->GetAllTestRequestTypes();

        echo json_encode($result);
    }
    public function GetHospitalRequests() {
        
        
        $this->load->model('laboratory_test_request_model');
        $result = $this->laboratory_test_request_model->GetHospitalRequests();

        echo json_encode($result);
    }
    
    public function GetInternalRequestsBySearch($searchParam,$searchID) {
        
        
        $this->load->model('laboratory_test_request_model');
        $result = $this->laboratory_test_request_model->GetInternalRequestsBySearch($searchParam,$searchID);

        echo json_encode($result);
    }

    public function GetHospitalRequestsBySearch($searchParam,$searchID) {
        
        
        $this->load->model('laboratory_test_request_model');
        $result = $this->laboratory_test_request_model->GettHospitalRequestsBySearch($searchParam,$searchID);

        echo json_encode($result);
    }
    
    public function GetTestRequestCount() {
        $this->load->model('laboratory_test_request_model');
        $result = $this->laboratory_test_request_model->GetTestRequestCount();

        echo json_encode($result);
        exit;
    }
    
    public function GetTestRequests() {
        
        
        $this->load->model('laboratory_test_request_model');
        $result = $this->laboratory_test_request_model->GetTestRequests();

        echo json_encode($result);
    }
    
     public function GetAllLabs() {
        
        
        $this->load->model('laboratory_test_request_model');
        $result = $this->laboratory_test_request_model->GetAllLabs();

        echo json_encode($result);
    }
    
    public function GetRequestCountByLabID($labID) {
        
        
        $this->load->model('laboratory_test_request_model');
        $result = $this->laboratory_test_request_model->GetRequestCountByLabID($labID);

        echo json_encode($result);
    }
    
}