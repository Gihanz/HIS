<?php

class Mri_specimen_type extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
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

    public function index()
    {      
        $this->_init();
        $data = array(); 
       
        
        $data['SpecimensType'] = $this->getAllSpecimenTypeDetails();
        
        $this->load->view('mri_specimen_type',$data);        
    }
    
    public function getAllSpecimenTypeDetails()
    {
        $this->load->model('mri_specimen_type_model','mriSpecimenType');
        $specimenType = $this->mriSpecimenType->getAlltSpecimenTypeDetails();
        return($specimenType);
    }
     
     
    public function insertSpecimenType()
    {
//        if (isset($_POST['mri_specimen'])) {
            $Data = $_POST['specimenType'];

            $data_string = json_encode($Data);
            
            $this->load->model('mri_specimen_type_model', 'specimenTypeModel');            
            $ss = $this->specimenTypeModel->InsertNewSpecimenType($data_string);
            
            echo json_encode($ss);
 //       }

    }
public function UpdateSpecimenType()
    {
        if (isset($_POST['specimenType'])) {
            $Data = $_POST['specimenType'];

            $data_string = json_encode($Data);
            
            $this->load->model('mri_specimen_type_model', 'specimenTypeModel');            
            $ss = $this->specimenTypeModel->UpdateSpecimenType($data_string);
            
            echo json_encode($ss);
            
        }

    }

     

}
