<?php

    class laboratory_test_model extends CI_Model{
    	
        public function GetAllLabTests(){
            $this->load->model('/Service_Caller/ServiceCaller','serviceCaller');
            $serviceURL=SERVICE_BASE_URL."MriLaboratoryTest/GetAllLaboratoryTest";
            $media_Type="application/json";
            //$curRequest= new ServiceCaller();
            $response=$this->serviceCaller->curl_GET_All_Request($serviceURL,$media_Type);
            
            $decodeResponse = json_decode($response);
            return $decodeResponse;
        }
    }
?>