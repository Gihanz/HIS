<?php

class New_test_request_controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();
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
        }else {
           $this->load->section('sidebar', 'includes/sidebarNon');                                                                                                                         }
    }

    public function index() {
        
        $data = array();
        
        /*mafais*/
        $this->load->model('mri_specimen_type_model', 'specimenTypes');
        $specimen_types = $this->specimenTypes->getAlltSpecimenTypeDetails();
        $data['specimen_types'] = $specimen_types;
        
        //print_r($data['specimen_types']);
         $data['specimen_maxID'] = $this->getMaxSpecimenID();

        $role = $this->session->userdata('role');
        $roleId = $this->session->userdata('roleId');

        //Chief MLT,Doctor, MLT,Admin ,Cosultlat 
        if($roleId == "3"||$roleId == "1"||$roleId == "2"||$roleId == "6"||$roleId == "7")
        {
              $this->load->view('new_test_request',$data);
        }
        else 
        {
           // $this->load->view('login_view');
             echo '<script type="text/javascript">
           window.location = "http://localhost/lims_new/login_controller"
           </script>';
        }
         
       
    }
    
    public function GetAllTestRequestTypes() {
        
        
        $this->load->model('Laboratory_Test');
        $result = $this->Laboratory_Test->GetAllTestRequestTypes();

        echo json_encode($result);
    }
    
    public function InsertNewInternalRequests()
    {
        if (isset($_POST['requests'])) {
            $Data = $_POST['requests'];

            $data_string = json_encode($Data);
            
            $this->load->model('laboratory_test_request_model');
            $ss = $this->laboratory_test_request_model->InsertNewInternalRequests($data_string);
            
            echo json_encode($ss);
            exit;
        }
        
        
    }
    
    public function InsertNewHospitalRequests()
    {
        if (isset($_POST['requests'])) {
            $Data = $_POST['requests'];

            $data_string = json_encode($Data);
            
            $this->load->model('laboratory_test_request_model');
            $ss = $this->laboratory_test_request_model->InsertNewHospitalRequests($data_string);
            
            
            echo json_encode($ss);
   
        }

    }
    
     public function GetLastRequestID() {

        $this->load->model('laboratory_test_request_model');
        $result = $this->laboratory_test_request_model->GetLastRequestID();
       
        echo json_encode($result);
        exit;
    }
    
    public function LoadPdf() {

         $this->load->view('mri_spcl_barcode');
    }
    
   // Mafais
    function  getMaxSpecimenID()
    {
        $this->load->model('mri_specimen_model', 'specimenModel');
        $sss = $this->specimenModel->GetMaxSpecimenID();
        
        return $sss;
    }
            function  barcode($code)
    {
        // We load her library's reading Zend.php file that contains the loader
        // For existing files in the folder Zend
        $this->load->library( 'zend' );
         
        // Load that is in a folder Zend
        $this->zend->load('Zend/Barcode' );
         
        // Generate barcodenya
        // $ Code = 12345abc;
        Zend_Barcode::render( 'code128' , 'image' , array( 'text' => $code ), array());
    }
    
}