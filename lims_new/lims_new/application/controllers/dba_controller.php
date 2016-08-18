<?php

class dba_controller extends CI_Controller {

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
        
        $this->load->model('dba_model_1');
   
          
          $role = $this->session->userdata('role');
        $roleId = $this->session->userdata('roleId');
        //Admin
        if($roleId == "6")
        {
            $this->load->view('dba_view');
        }
        else 
        {
           // $this->load->view('dashboard');
             echo '<script type="text/javascript">
           window.location = "http://localhost/lims_new/login_controller"
           </script>';
        } 
    }
    
     public function InsertNewDba(){
        if (isset($_POST['dba'])) {
            $Data = $_POST['dba'];

            $data_string = json_encode($Data);
            
            $this->load->model('dba_model_1');
            $ss = $this->dba_model_1->makeArchieveScript($data_string);
            
            echo json_encode($ss);
        }

    }
    
/*    public function GetAllUserRoles() {

        $this->load->model('Employee_model', 'requests');
        $ss = $this->requests->GetAllUserRoles();
        print_r($ss);
        exit;
        return $ss;
    }
    
     public function registerUser(){
        if (isset($_POST['user'])) {
            $Data = $_POST['user'];

            $data_string = json_encode($Data);
            
            $this->load->model('Employee_Model');
            $ss = $this->Employee_Model->registerUser($data_string);
            
           // echo json_encode($ss);
        }

    }
    
    public function UpdateEmployee()
    {
        if (isset($_POST['employee'])) {
            $Data = $_POST['employee'];

            $data_string = json_encode($Data);
            
            $this->load->model('Employee_Model');
            $this->Employee_Model->UpdateEmployee($data_string);
            //$ss = $this->Employee_Model->UpdateEmployee($data_string);
            print("<br/><br/><br/><br/><br/><br/><br/>");
            print_r($ss);           
           // echo json_encode($ss);
            
        }

    }
    
    public function generate_password( $length = 8 ) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
        $password = substr( str_shuffle( $chars ), 0, $length );
        return $password;
        
       // $this->load->view('employee_view', $data);
    }*/ 
    
    
}