<?php

class SpecimenInfoController extends CI_Controller {

    public function index() {
        $request_id = $this->input->get('ReqID');
        if (empty($request_id)) {
            show_404();
        }
        $this->load->model('/lab/specimenModel', 'specimenModel');
        $specimen_types = $this->specimenModel->getSpecimen_types();
        $specimen_retension_types = $this->specimenModel->getSpecimen_retension_types();
        $this->load->view('lab/layout/Header');
        $data['specimen'] = $this->getSpecimen($request_id);

        $data['specimen_types'] = $specimen_types;
        $data['specimen_retension_types'] = $specimen_retension_types;
        
        $status = $this->input->get('status');
        if($status == "complete"){
        $data['specimen_in_details'] = $this->getSpecimenInDetails($request_id);
        }
        $this->load->view('his-layout/MainHeader');
        $this->load->view('lab/SpecimenInfo', $data);
        $this->load->view('lab/layout/sideMenu');
    }
    
    public function getSpecimenInDetails($request_id) {
        $this->load->model('/lab/testRequestModel', 'requests');
        return $this->requests->getSpecimenInDetails($request_id);
    }
    
    public function getSpecimen($request_id) {
        $this->load->model('/lab/testRequestModel', 'requests');
        return $this->requests->getTestRequestByRequestID($request_id);
    }

    public function add() {
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
        $this->load->model('/lab/specimenModel', 'specimenModel');
        $this->specimenModel->add($data_string);

        //update status
        $this->load->model('/lab/testRequestModel', 'requests');
        $this->requests->setStatus(json_encode(array("reqID" => $_POST['flabtestrequest_ID'], "status" => "Sample Collected")));
        echo json_encode("status:1");
    }

}
