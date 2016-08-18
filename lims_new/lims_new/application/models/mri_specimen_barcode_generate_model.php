<?php


class Mri_specimen_barcode_generate_model extends CI_Model {

    public function getAlltSpecimenDetails() {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriSpecimen/GetAllSpecimen";
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
    
    public function add($Speci) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $specimenType_JSON_Obj = $Speci;
        $serviceURL = SERVICE_BASE_URL . "LabTestRequest/addSpecimenInfo";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, $specimenType_JSON_Obj, $media_Type);
        return $response;
    }

    public function InsertNewSpecimen($specimen) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $NewSpecimen = $specimen;
        //print_r($ExternalRequests);

        $serviceURL = SERVICE_BASE_URL . "MriSpecimen/addSpecimenInformations";
        $media_Type = "application/json";
        //$curRequest= new ServiceCaller();
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, $NewSpecimen, $media_Type);
        return $response;
    }

}
