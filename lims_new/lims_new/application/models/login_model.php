<?php

class Login_Model extends CI_Model {

    function login($username, $password) {
    print("login");
    
        $this->load->model('servicecaller', 'serviceCaller');

        // create json object
        $data = array('user_name' => $username, 'password' => $password);
        $user_JSON_Obj = json_encode($data);

        // call webservice 
        $serviceURL = SERVICE_BASE_URL . "MriUser/userValidation";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, $user_JSON_Obj, $media_Type);
        // get return database result
        $user = $response;
        return $user; 
    }

        function ipValidate($username,$inputIp) {
    print("login");
    
        $this->load->model('servicecaller', 'serviceCaller');

        // create json object
        $data = array('user_name' => $username, 'input_ip' => $inputIp);
        $ip_JSON_Obj = json_encode($data);

        // call webservice 
        $serviceURL = SERVICE_BASE_URL . "MriIpConfig/ipValidation";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, $ip_JSON_Obj, $media_Type);
        // get return database result
        $validity = $response;
        return $validity; 
    }

}

?>
