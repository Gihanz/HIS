<?php

class Patient_Controller extends CI_Controller {

    
    public function GetAllInternalPatients1() {
        
        $this->load->model('Patient_Model');
        $result = $this->Patient_Model->GetAllInternalPatients();

        echo json_encode($result);
    }
    
    public function GetExternalPatientById($data) {
        
        $this->load->model('Patient_Model');
        $result = $this->Patient_Model->GetExternalPatientById($data);
        echo json_encode($result);
    }
    
    public function GetAllHospitalpatients() {
        
        
        $this->load->model('Patient_Model');
        $result = $this->Patient_Model->GetAllHospitalpatients();

        echo json_encode($result);
    }
    
    public function GetHospitalpatientsByHID($data) {
        
        
        $this->load->model('Patient_Model');
        $result = $this->Patient_Model->GetHospitalpatientsByHID($data);
        echo json_encode($result);
    }

    public function GetAllPatients() {


        $this->load->model('Patient_Model');
        $result = $this->Patient_Model->GetAllPatientsSearch();

        echo json_encode($result);
    }

       public function GetPatientById($data) {

        $this->load->model('Patient_Model');
        $result = $this->Patient_Model->GetPatientById($data);

        echo json_encode($result);
    }

    
    public function GetPatientCount() {
        $this->load->model('Patient_Model');
        $result = $this->Patient_Model->GetPatientCount();

        echo json_encode($result);
        exit;
    }
}