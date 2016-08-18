<?php

class Employee_Model extends CI_Model {
    
    public function GetAllEmployees() {

        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriEmployee/GetAllEmployees";

        $media_Type = "application/json";

        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);

        $decodeResponse = json_decode($response);
        return $decodeResponse;
    }
    
     public function InsertNewEmployee($employee) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $NewEmployee = $employee;
      

        $serviceURL = SERVICE_BASE_URL . "MriEmployee/InsertNewEmployee";
        $media_Type = "application/json";
       
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, $NewEmployee, $media_Type);
        return $response;
    }
    
    public function GetAllUserRoles() {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriUserRoles/GetAllUserRoles";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);
        return $response;
    }
    
    public function registerUser($user) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $NewUser = $user;
      

        $serviceURL = SERVICE_BASE_URL . "MriUser/registerUser";
        $media_Type = "application/json";
       
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, $NewUser, $media_Type);
        return $response;
    }

       public function updateUser($user) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $NewUser = $user;
      

        $serviceURL = SERVICE_BASE_URL . "MriUser/updateUser";
        $media_Type = "application/json";
       
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, $NewUser, $media_Type);
        return $response;
    }
    
    public function UpdateEmployee($employee) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $UpdatedEmployee = $employee;
      

        $serviceURL = SERVICE_BASE_URL . "MriEmployee/UpdateEmployee";
        $media_Type = "application/json";
       
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, $UpdatedEmployee, $media_Type);
        return $response;
    }

    
    
    public function generate_password( $length = 8 ) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
        $password = substr( str_shuffle( $chars ), 0, $length );
        return $password;
}
}

