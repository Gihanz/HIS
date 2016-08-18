<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class testRequestReportOpdModel extends CI_Model {

    public function getAlltRequests() {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "LabTestRequest/getAllLabTestRequests";
        $media_Type = "application/json";
        //$curRequest= new ServiceCaller();
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);
        $decodeResponse = json_decode($response);
        return $decodeResponse;
    }
    
    public function getTestRequestByRequestID($request_id) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "LabTestRequest/getTestRequestByRequestID/".$request_id;
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);
        $decodeResponse = json_decode($response);
        return $decodeResponse;
    }
	
	    public function getAllTestByID($PID) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "LabTestRequest/getRequestsByPatientID/".$PID;
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);
        $decodeResponse = json_decode($response);
        return $decodeResponse;
    }
    
    
    public function setStatus($statusObj) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $specimenType_JSON_Obj = $statusObj;
        $serviceURL = SERVICE_BASE_URL . "LabTestRequest/setStatus";
        $media_Type = "application/json";
        $this->serviceCaller->curl_POST_Request($serviceURL, $specimenType_JSON_Obj, $media_Type);

    }
	
	public function getSpecimenInDetails($request_id) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "LabTestRequest/getSpecimenByRequestID/".$request_id;
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);
        $decodeResponse = json_decode($response);
        return  $decodeResponse;
    }

}
