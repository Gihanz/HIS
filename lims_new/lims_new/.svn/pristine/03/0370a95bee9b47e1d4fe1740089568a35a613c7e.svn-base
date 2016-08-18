<?php
class Mri_test_results_model extends CI_Model {

    public function getTestParentFields($requestId) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriTestResults/GetParentFeilds/" .$requestId;
        $media_Type = "application/json";
        //$curRequest= new ServiceCaller();
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);
        $decodeResponse = json_decode($response);
        return $decodeResponse;
    }

    public function getTestSubFields($parentId) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriTestResults/GetSubFeilds/" .$parentId;
        $media_Type = "application/json";
        //$curRequest= new ServiceCaller();
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);
        $decodeResponse = json_decode($response);
        return $decodeResponse;
    }

    public function addParentTestResult($testRes) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriTestResults/addTestParentFeildResults";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, $testRes, $media_Type);
        return $response;
    }

    public function addSubTestResult($testRes) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriTestResults/addTestSubFeildResults";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, $testRes, $media_Type);
        return $response;
    }

    public function update_request_table($reqId) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriTestResults/updateResultTable/" .$reqId;
        $media_Type = "application/json";
        //$curRequest= new ServiceCaller();
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);
        return $response;
    }
}