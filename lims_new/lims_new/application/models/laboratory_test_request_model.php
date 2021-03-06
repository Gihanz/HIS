<?php

class laboratory_test_request_model extends CI_Model {

    public function InsertNewInternalRequests($requests) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $InternalRequests = $requests;
        //print_r($ExternalRequests);

        $serviceURL = SERVICE_BASE_URL . "MriTestRequest/InsertNewInternalRequests";
        $media_Type = "application/json";
        //$curRequest= new ServiceCaller();
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, $InternalRequests, $media_Type);
        return $response;
    }

    public function InsertNewHospitalRequests($requests) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $HospitalRequests = $requests;
        //print_r($HospitalRequests);

        $serviceURL = SERVICE_BASE_URL . "MriTestRequest/InsertNewHospitalRequests";
        $media_Type = "application/json";
        //$curRequest= new ServiceCaller();


        $response = $this->serviceCaller->curl_POST_Request($serviceURL, $HospitalRequests, $media_Type);

        return $response;
    }

    public function GetInternalRequests() {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriTestRequest/GetInternalRequests";
        $media_Type = "application/json";
        //$curRequest= new ServiceCaller();
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);

        $decodeResponse = json_decode($response);
        return $decodeResponse;
    }

    public function GetHospitalRequests() {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriTestRequest/GetHospitalRequests";
        $media_Type = "application/json";
        //$curRequest= new ServiceCaller();
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);

        $decodeResponse = json_decode($response);
        return $decodeResponse;
    }

    public function GetLastRequestID() {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriTestRequest/GetLastRequestID";
        $media_Type = "application/json";
        //$curRequest= new ServiceCaller();
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);

        $decodeResponse = json_decode($response);
        return $decodeResponse;
    }

    public function GetInternalRequestsBySearch($searchParam, $searchID) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriTestRequest/GetInternalRequestsBySearch/$searchParam/$searchID";
        $media_Type = "application/json";
        //$curRequest= new ServiceCaller();
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);

        $decodeResponse = json_decode($response);
        return $decodeResponse;
    }

    public function GetTestRequestCount() {

        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriTestRequest/GetTestRequestCount";

        $media_Type = "application/json";

        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);

        $decodeResponse = json_decode($response);
        return $decodeResponse;
    }
    
    public function GetTestRequests() {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriTestRequest/GetUrgentTestRequests";
        $media_Type = "application/json";
        //$curRequest= new ServiceCaller();
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);

        $decodeResponse = json_decode($response);
        return $decodeResponse;
    }

    
    public function GettHospitalRequestsBySearch($searchParam, $searchID) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriTestRequest/GettHospitalRequestsBySearch/$searchParam/$searchID";
        $media_Type = "application/json";
        //$curRequest= new ServiceCaller();
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);

        $decodeResponse = json_decode($response);
        return $decodeResponse;
    }
    
    public function GetAllLabs() {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriDepartment/GetAllLabs";
        $media_Type = "application/json";
        //$curRequest= new ServiceCaller();
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);

        $decodeResponse = json_decode($response);
        return $decodeResponse;
    }
    
    public function GetRequestCountByLabID($labID) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriTestRequest/GetRequestCountByLabID/$labID";
        $media_Type = "application/json";
        //$curRequest= new ServiceCaller();
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);

        $decodeResponse = json_decode($response);
        return $decodeResponse;
    }

    public function UpdateTestRequest($testrequest) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $TestRequest = $testrequest;
        //print_r($ExternalRequests);
        $serviceURL = SERVICE_BASE_URL . "MriTestRequest/UpdateTestRequest";
        $media_Type = "application/json";
        //$curRequest= new ServiceCaller();
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, $TestRequest, $media_Type);
        return $response;
    }

 public function UpdateTestRequestComment($testrequest) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $TestRequest = $testrequest;
        //print_r($ExternalRequests);
        $serviceURL = SERVICE_BASE_URL . "MriTestRequest/UpdateTestRequestComment";
        $media_Type = "application/json";
        //$curRequest= new ServiceCaller();
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, $TestRequest, $media_Type);
        return $response;
    }
    
}

?>