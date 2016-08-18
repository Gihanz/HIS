<?php

class Department_Model extends CI_Model {
    
    public function GetAllDepartments() {

        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriDepartment/GetAllDepartments";

        $media_Type = "application/json";

        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);

        $decodeResponse = json_decode($response);
        return $decodeResponse;
    }
    
     public function InsertNewDepartment($department) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $NewDepartment = $department;
      

        $serviceURL = SERVICE_BASE_URL . "MriDepartment/InsertNewDepartment";
        $media_Type = "application/json";
       
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, $NewDepartment, $media_Type);
        return $response;
    }
    
    public function GetAllEmployees() {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriEmployee/GetAllEmployees";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);
        return $response;
    }
    
    public function UpdateDepartment($departments) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $UpdatedDepartment = $departments;
      

        $serviceURL = SERVICE_BASE_URL . "MriDepartment/UpdateDepartment";
        $media_Type = "application/json";
       
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, $UpdatedDepartment, $media_Type);
        return $response;
    }
}

