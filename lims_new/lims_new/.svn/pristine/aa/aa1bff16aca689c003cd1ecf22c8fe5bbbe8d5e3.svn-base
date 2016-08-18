<?php
/**
 * Created by PhpStorm.
 * User: Kanchana
 * Date: 16
 * Time: 3:41/06/04 PM
 */
?>
<?php
class Mri_verify_results_model_1 extends CI_Model {

    public function getTestRequests($data) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriVerifyResult/getTestRequests/";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, json_encode($data), $media_Type);
        return $response;
    }
    public function setSigleResults($data) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriVerifyResult/setSigleResults/";
        $media_Type = "application/json";

        $response = $this->serviceCaller->curl_POST_Request($serviceURL, json_encode($data), $media_Type);
        return $response;
    }
    public function getCompletedTestReqests($data) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriVerifyResult/getCompletedTestReqests/";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, json_encode($data), $media_Type);
        return $response;
    }
    public function getSingleTestRequestData($reqid) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "MriVerifyResult/GetSingleTestRequestData/$reqid";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);
        return json_decode($response);
    }
}