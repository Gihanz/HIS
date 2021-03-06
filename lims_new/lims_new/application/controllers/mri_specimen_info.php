<?php

class Mri_specimen_Info extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->_init();
    }

    private function _init()
    {
            $this->output->set_template('default');
       $this->load->library('session');
      $role = $this->session->userdata('role');
         $roleId = $this->session->userdata('roleId');
        
        if($roleId == "1")
        {
            $this->load->section('sidebar', 'includes/sidebarMLT');
        }
        else if ($roleId == "2")
        {
            $this->load->section('sidebar', 'includes/sidebarDoctor');
        }
           else if ($roleId == "4")
        {
            $this->load->section('sidebar', 'includes/sidebarLabAssistant');
        }
             else if ($roleId == "5")
        {
            $this->load->section('sidebar', 'includes/sidebarNurse');
        }
           else if ($roleId == "3")
        {
            $this->load->section('sidebar', 'includes/sidebar');
        }   else if ($roleId == "6")
        {
            //Admin
            $this->load->section('sidebar', 'includes/sidebarAdmin');
        }
            else if ($roleId == "7")
        {
            //Cosultnant
            $this->load->section('sidebar', 'includes/sidebarConsultant');
        }
        else {
           $this->load->section('sidebar', 'includes/sidebarNon');                                                                                                                         }
    }

    public function index(){
         
        $array = $this->uri->uri_to_assoc(3);
        $request_id = $array['ReqID'];
		 $request_id = 30;
        if (empty($request_id)) {
            show_404();
        }
		
        $this->load->model('mri_specimen_model', 'specimenModel');
        $specimen_types = $this->specimenModel->getSpecimen_types();
        $specimen_retension_types = $this->specimenModel->getSpecimen_retension_types();
        $data['specimen'] = $this->getSpecimen($request_id);
        $data['specimen_types'] = $specimen_types;
        $data['specimen_retension_types'] = $specimen_retension_types;

        if(isset($array['status'])) {
            $status = $array['status'];
            if($status == "complete"){
            $data['specimen_in_details'] = $this->getSpecimenInDetails($request_id);
            }
        }
		

        $role = $this->session->userdata('role');
        $roleId = $this->session->userdata('roleId');
        //Chief MLT ,MLT ,Doctor,Admin,Constnat
        if($roleId == "3"||$roleId == "2"||$roleId == "1"||$roleId == "4"||$roleId == "6"||$roleId == "7")
        {
             $this->load->view('specimen_info', $data);   
        }
        else 
        {
           // $this->load->view('login_view');
             echo '<script type="text/javascript">
           window.location = "http://localhost/lims_new/login_controller"
           </script>';
        }
        
    }
    
    public function getSpecimenInDetails($request_id) {
        $this->load->model('test_request_model', 'requests');
        return $this->requests->getSpecimenInDetails($request_id);
    }
    
    public function getSpecimen($request_id) {
        $this->load->model('test_request_model', 'requests');
        return $this->requests->getTestRequestByRequestID($request_id);
    }

    public function add() {
        $curl_post_data = array(
            "remarks" => $_POST['remarks'],
            "stored_location" => $_POST['stored_location'],
            "stored_or_destroyed" => $_POST['stored_or_destroyed'],            
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
