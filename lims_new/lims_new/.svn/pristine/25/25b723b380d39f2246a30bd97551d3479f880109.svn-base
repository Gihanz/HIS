<?php

class Mri_specimen_barcode_generate extends CI_Controller {

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

    public function index(){
        $this->_init();
        $data = array(); 

                           
        if(isset($_POST['reqIDStart']) && isset($_POST['reqIDEnd'])){
            
            $data['specimens'] = $this->getSpecimenIDByRequestIDRange($_POST['reqIDStart'],$_POST['reqIDEnd']);
        }
        
        $role = $this->session->userdata('role');
        $roleId = $this->session->userdata('roleId');
        //Chief MLT ,MLT ,Doctor , Nurse ,Counter,Admin ,Cosntnat 
        if($roleId == "3"||$roleId == "2"||$roleId == "1"||$roleId == "4"||$roleId == "5"||$roleId == "6"||$roleId == "7")
        {
           $this->load->view('mri_specimen_barcode_generate',$data);    
        }
        else 
        {
          //  $this->load->view('login_view');
             echo '<script type="text/javascript">
           window.location = "http://localhost/lims_new/login_controller"
           </script>';
        }

       
    }   
    
    public function getSpecimenIDByRequestIDRange($sReqID,$eReqID){ 
        $data = array();
        $data['specimen'] = $this->getSpecimenRequestID($sReqID,$eReqID);        

//    print_r ($data['specimen']);

        return $data['specimen'];          
    }

    public function getSpecimenRequestID($sRequest_id,$eRequest_id) {
        $this->load->model('mri_specimen_model', 'requests');
        return $this->requests->getSpecimen_ids_by_requestID($sRequest_id, $eRequest_id);

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
