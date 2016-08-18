<?php


class Mri_specimen_type_model extends CI_Model {

    public function getAlltSpecimenTypeDetails() {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriSpecimenType/GetAllSpecimenType";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);
        $decodeResponse = json_decode($response);
        return $decodeResponse;
    }

    public function getSpecimen_types() {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "LabTestRequest/getAllSpecimenTypes";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);
        $decodeResponse = json_decode($response);
        return $decodeResponse;
    }
    
    public function getSpecimen_retension_types() {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "LabTestRequest/getAllSpecimenRetentionTypes";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);
        $decodeResponse = json_decode($response);
        return $decodeResponse;
    }
    
    public function InsertNewSpecimenType($Speci) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $specimenType_JSON_Obj = $Speci;
        $serviceURL = SERVICE_BASE_URL . "MriSpecimenType/addMriSpecimenTypes";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, $specimenType_JSON_Obj, $media_Type);
        return $response;
    }

    public function UpdateSpecimenType($Speci) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $UpdatedSpecimenType = $Speci;
      

        $serviceURL = SERVICE_BASE_URL . "MriSpecimenType/UpdateSpecimenType";
        $media_Type = "application/json";
       
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, $UpdatedSpecimenType, $media_Type);
        return $response;
    }
    

}
