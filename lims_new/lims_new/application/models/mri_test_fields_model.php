<?php
class Mri_test_fields_model extends CI_Model {

    public function getAllDepartments() {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriTestFields/GetAllDepartments/";
        $media_Type = "application/json";
        //$curRequest= new ServiceCaller();
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);
        return json_decode($response);
    }

    public function getAllLabs() {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriTestFields/GetAllLabs/";
        $media_Type = "application/json";
        //$curRequest= new ServiceCaller();
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);
        return json_decode($response);
    }

    public function getAllSpecimenTypes() {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriTestFields/GetAllSpecimenTypes/";
        $media_Type = "application/json";
        //$curRequest= new ServiceCaller();
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);
        return json_decode($response);
    }

    public function addLabTest($data) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriTestFields/addLabTestName/";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, json_encode($data), $media_Type);
        return $response;
    }

    public function getAllLabTestTypes() {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriTestFields/GetAllLabTestTypes/";
        $media_Type = "application/json";
        //$curRequest= new ServiceCaller();
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);
        return json_decode($response);
    }

    public function getParentFields($data) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriTestFields/GetParentFeilds/$data";
        $media_Type = "application/json";
        //$curRequest= new ServiceCaller();
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);
        return $response;
    }

    public function addTestParentField($data) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriTestFields/addTestParentField/";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, json_encode($data), $media_Type);
        return $response;
    }

    public function CheckForExistenceParents($data) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriTestFields/CheckForExistenceParents/";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, json_encode($data), $media_Type);
        return $response;
    }

    public function addParentFieldData($data) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriTestFields/addParentFieldData/";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, json_encode($data), $media_Type);
        return $response;
    }

    //GetTestParentData
    public function getTestParentData($labTestId) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriTestFields/GetTestParentData/$labTestId";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);
        return json_decode($response);
    }

    public function addTestSubField($data) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriTestFields/addTestSubField/";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, json_encode($data), $media_Type);
        return $response;
    }

    public function getSubFields($data) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriTestFields/GetSubFeilds/$data";
        $media_Type = "application/json";
        //$curRequest= new ServiceCaller();
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);
        return $response;
    }

    public function addSubFieldData($data) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriTestFields/addSubFieldData/";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, json_encode($data), $media_Type);
        return $response;
    }
}