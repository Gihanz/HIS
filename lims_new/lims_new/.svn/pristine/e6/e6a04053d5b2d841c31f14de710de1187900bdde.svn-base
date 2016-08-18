<?php

class Hospital_Controller extends CI_Controller {


    public function GetAllHospitals() {
        
        
        $this->load->model('Hospital_Model');
        $result = $this->Hospital_Model->GetAllHospitals();

        echo json_encode($result);
    }
    
    public function GetHospitalById($data) {
        
        
        $this->load->model('Hospital_Model');
        $result = $this->Hospital_Model->GetHospitalById($data);
        
        
        
        echo json_encode($result);
    }
}