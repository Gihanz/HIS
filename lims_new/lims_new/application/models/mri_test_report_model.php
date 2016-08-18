<?php

class Mri_test_report_model extends CI_Model {
    public function getReportParentDetails($reqId) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriTestReport/GetReportParentDetails/" .$reqId;
        $media_Type = "application/json";
        //$curRequest= new ServiceCaller();
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);
        $decodeResponse = json_decode($response);
        return $decodeResponse;
    }
}