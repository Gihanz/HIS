<?php


class Hospital_Model extends CI_Model {
    
    public function GetAllHospitals() {

        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriHospital/GetAllHospitals";

        $media_Type = "application/json";

        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);

        $decodeResponse = json_decode($response);
        return $decodeResponse;
    }
    
    public function GetHospitalById($data) {

        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriHospital/GetHospitalById/$data";

        $media_Type = "application/json";

        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);

        $decodeResponse = json_decode($response);
        return $decodeResponse;
    }

}