<?php

class Hospital_Controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();

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
		
        $this->load->model('Hospital_Model');
        $data['all_hospital'] = $this->Hospital_Model->GetAllHospitals();
       // $data['hospitalById'] = json_decode($this->Hospital_Model->GetHospitalById());

        $role = $this->session->userdata('role');
        $roleId = $this->session->userdata('roleId');
        //Chief MLT ,Doctor,Admin ,Consutant
        if($roleId == "3"||$roleId == "1"||$roleId == "6"||$roleId == "7")
        {
              $this->load->view("mri_hospital", $data);
        }
        else 
        {
           // $this->load->view('login_view');
             echo '<script type="text/javascript">
           window.location = "http://localhost/lims_new/login_controller"
           </script>';
        }

       
    }
    public function GetAllHospitals() {
        
        
        $this->load->model('Hospital_Model');
        $result = $this->Hospital_Model->GetAllHospitals();

        echo json_encode($result);
    }
    
    public function GetHospitalById($data) {
        
        
        $this->load->model('Hospital_Model');
        $result = $this->Hospital_Model->GetHospitalById($data);
   
        echo json_encode($result);
    }
	
	public function UpdateHospital() {
		
        if (isset($_POST['hospitals'])) {
            $Data = $_POST['hospitals'];

            $data_string = json_encode($Data);
            
            $this->load->model('hospital_model');
            $ss = $this->hospital_model->UpdateHospital($data_string);
            
            echo json_encode($ss);
            
        }
	}
	public function InsertNewHospital()
    {
        if (isset($_POST['hospital'])) {
            $Data = $_POST['hospital'];

            $data_string = json_encode($Data);
            
            $this->load->model('hospital_model');
            $ss = $this->hospital_model->InsertNewHospital($data_string);
            
            echo json_encode($_POST);
        }

    }
}