<?php

class Mri_specimen_categorize extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url'); 
         $this->load->library('session');
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
              
        $data['Specimens'] = $this->getAllSpecimenDetails();

          $role = $this->session->userdata('role');
        $roleId = $this->session->userdata('roleId');
        //Chief MLT ,MLT ,Doctor ,Counter,nurse,Admin ,Constnat 
        if($roleId == "3"||$roleId == "2"||$roleId == "1"||$roleId == "4"||$roleId == "5"||$roleId == "6"||$roleId == "7")
        {
            $this->load->view('mri_specimen_categorize',$data);      
        }
        else 
        {
            //$this->load->view('login_view');
             echo '<script type="text/javascript">
           window.location = "http://localhost/lims_new/login_controller"
           </script>';
        }

       
        
    }   
    
    public function getAllSpecimenDetails()
    {
        $this->load->model('Mri_specimen_model','mriSpecimen');
        $specimen = $this->mriSpecimen->getAlltSpecimenDetails();
        return($specimen);
    }
     
    

   

     

}
