<?php

class UserRoles_Model extends CI_Model{
    
    public function GetAllUserRoles() {

        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriUserRoles/GetAllUserRoles";

        $media_Type = "application/json";

        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);

        $decodeResponse = json_decode($response);
        return $decodeResponse;
    }
    
    public function InsertNewUserRoles($userRoles) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $NewUserRole = $userRoles;
      

        $serviceURL = SERVICE_BASE_URL . "MriUserRoles/InsertNewUserRoles";
        $media_Type = "application/json";
       
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, $NewUserRole, $media_Type);
        return $response;
    }
}
