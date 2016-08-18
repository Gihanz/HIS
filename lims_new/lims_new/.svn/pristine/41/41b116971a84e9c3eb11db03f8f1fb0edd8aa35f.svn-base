<?php
/**
 * Created by PhpStorm.
 * User: Dushyantha
 * Date: 11/7/15
 * Time: 3:41 PM
 */
?>
<?php
class Mri_binary_results_model extends CI_Model {

    public function getTestRequests($data) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriBinaryResult/getTestRequests/";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, json_encode($data), $media_Type);
        return $response;
    }
    public function addSingleResult($data) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriBinaryResult/addSingleResult/";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, json_encode($data), $media_Type);
        return $response;
    }
    public function getCompletedTestReqests($data) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriBinaryResult/getCompletedTestReqests/";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, json_encode($data), $media_Type);
        return $response;
    }
    public function getSingleTestRequestData($reqid) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriBinaryResult/GetSingleTestRequestData/$reqid";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);
        return json_decode($response);
    }
}