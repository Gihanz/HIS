<?php

class Mri_specimen_info_add_bulk extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');      
    }

    private function _init()
    {
        $this->output->set_template('default');
        $this->load->section('sidebar', 'includes/sidebar');
    }

    public function index(){
        $this->_init();
        $data = array(); 

 
        $this->load->view('mri_specimen_info_add_bulk',$data);    
    }   
    
    public function getSpecimenIDByRequestIDRange($sReqID,$eReqID){ 
        $data = array();
        $data['specimen'] = $this->getSpecimenRequestID($sReqID,$eReqID);        

print_r ($data['specimen']);

        return $data['specimen'];          
    }

    public function getSpecimenRequestID($sRequest_id,$eRequest_id) {
        $this->load->model('test_request_model', 'requests');
        return $this->requests->getSpecimenIDByRequestIDs($sRequest_id, $eRequest_id);

    }
 
     public function getSpecimen($ref_request_id) {
        $this->load->model('test_request_model', 'requests');
        return $this->requests->getTestRequestByRequestID($ref_request_id);
    }

    public function addSpecimen(){
        $curl_post_data = array(

            "remarks" => $_POST['remarks'],
            "stored_location" => $_POST['stored_location'],
            "stored_or_destroyed" => $_POST['stored_or_destroyed'],
            "fRetentionType_ID" => $_POST['retentionType'],
            "fSpecimentType_ID" => $_POST['SpecimenType'],
            "flabtestrequest_ID" => $_POST['flabtestrequest_ID'],
            "collected_date" => $_POST['collected_date'],
            "stored_destroyed_date" => $_POST['CompletedDate'],
            "fSpecimen_CollectedBy" => 1,
            "fSpecimen_ReceivededBy" => 2,
            "fSpecimen_DeliveredBy" => 3
            );

        $data_string = json_encode($curl_post_data);
        $this->load->model('mri_specimen_model', 'specimenModel');
        $this->specimenModel->add($data_string);

        //update status
        $this->load->model('test_request_model', 'requests');
        $this->requests->setStatus(json_encode(array("reqID" => $_POST['flabtestrequest_ID'], "status" => "Sample Collected")));
        echo json_encode("status:1");
    }

}
