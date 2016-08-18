<?php

class Department_Controller extends CI_Controller {

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

    public function index() {
        
        $this->load->model('Department_Model');
        $data['all_department_result'] = $this->Department_Model->GetAllDepartments();
        $data['employee'] = json_decode($this->Department_Model->GetAllEmployees());

        $role = $this->session->userdata('role');
        $roleId = $this->session->userdata('roleId');
        //Admin
        if($roleId == "6")
        {
            $this->load->view('department_view', $data);
        }
        else 
        {
          // $this->load->view('login_view');
             echo '<script type="text/javascript">
           window.location = "http://localhost/lims_new/login_controller"
           </script>';
        }
        
     
    }
    
     public function InsertNewDepartment()
    {
        if (isset($_POST['department'])) {
            $Data = $_POST['department'];

            $data_string = json_encode($Data);
            
            $this->load->model('department_Model');
            $ss = $this->department_Model->InsertNewDepartment($data_string);
            
            echo json_encode($_POST);
        }

    }
    
    public function UpdateDepartment()
    {
        if (isset($_POST['departments'])) {
            $Data = $_POST['departments'];

            $data_string = json_encode($Data);
            
            $this->load->model('department_Model');
            $ss = $this->department_Model->UpdateDepartment($data_string);
            
            echo json_encode($ss);
            
        }

    }
    
}