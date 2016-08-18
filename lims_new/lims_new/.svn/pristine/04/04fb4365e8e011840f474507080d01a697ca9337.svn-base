<?php


class Mri_specimen_model extends CI_Model {

    public function getAlltSpecimenDetails() {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriSpecimen/GetAllSpecimen";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);
        $decodeResponse = json_decode($response);
        return $decodeResponse;
    }

    
    
    public function getSpecimen_ids_by_requestID($from_request_id , $to_request_id) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriSpecimen/getSpecimenIDsByRequestID/". $from_request_id . "/" . $to_request_id;
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);
        $decodeResponse = json_decode($response);
        return $decodeResponse;
    }
 
 //From Specimen table   
    public function getSpecimen_ids_by_requestIDs($from_request_id , $to_request_id) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriSpecimen/getSpecimenIDsByRequestIDs/". $from_request_id . "/" . $to_request_id;
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);
        $decodeResponse = json_decode($response);
        return $decodeResponse;
    }
    

    public function InsertNewSpecimen($specimen) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $NewSpecimen = $specimen;
        //print_r($ExternalRequests);

        $serviceURL = SERVICE_BASE_URL . "MriSpecimen/InsertNewSpecimen";
        $media_Type = "application/json";
        //$curRequest= new ServiceCaller();
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, $NewSpecimen, $media_Type);
        
        //print_r($response);
        return $response;
    }

    public function GetMaxSpecimenID() {
    $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
    $serviceURL = SERVICE_BASE_URL . "MriSpecimen/getMaxSpecimenID/";
    $media_Type = "application/json";
    $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);
    $decodeResponse = json_decode($response);
    return $decodeResponse;
    }

    public function GetMriTestReqDetailsByRequestID($request_id) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriSpecimen/getMriTestReqDetailsByRequestID/". $request_id ;
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);
        $decodeResponse = json_decode($response);
        return $decodeResponse;
    }
}
