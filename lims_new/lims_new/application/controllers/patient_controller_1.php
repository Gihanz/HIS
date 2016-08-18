<?php

class Patient_Controller_1 extends CI_Controller {

    function __construct() {
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
        }
        else {
           $this->load->section('sidebar', 'includes/sidebarNon');                                                                                                                         }


    }

    public function index() {

        $this->load->model('Patient_Model');
        $data['all_patient_result'] = $this->Patient_Model->GetAllPatients();
        

          $role = $this->session->userdata('role');
        $roleId = $this->session->userdata('roleId');

        //Chief MLT,Doctor, MLT,counter ,Admin .Consutant
        if($roleId == "3"||$roleId == "1"||$roleId == "2"||$roleId == "4"||$roleId == "7"||$roleId == "6")
        {
               $this->load->view('patient_view', $data);
        }
        else 
        {
           // $this->load->view('login_view');
             echo '<script type="text/javascript">
           window.location = "http://localhost/lims_new/login_controller"
           </script>';
        }
    }

    public function GetAllInternalPatients1() {

        $this->load->model('Patient_Model');
        $result = $this->Patient_Model->GetAllInternalPatients();

        echo json_encode($result);
    }

    public function GetExternalPatientById($data) {

        $this->load->model('Patient_Model');
        $result = $this->Patient_Model->GetExternalPatientById($data);

        echo json_encode($result);
    }

public function GetAllPatients() {


        $this->load->model('Patient_Model');
        $result = $this->Patient_Model->GetAllPatients();

        echo json_encode($result);
    }

    public function GetAllHospitalpatients() {


        $this->load->model('Patient_Model');
        $result = $this->Patient_Model->GetAllHospitalpatients();

        echo json_encode($result);
    }

    public function GetHospitalpatientsByHID($data) {


        $this->load->model('Patient_Model');
        $result = $this->Patient_Model->GetHospitalpatientsByHID($data);

        echo json_encode($result);
    }

    public function InsertNewPatient() {
       

        if (isset($_POST['patient'])) {
            $Data = $_POST['patient'];

            $data_string = json_encode($Data);

            $this->load->model('Patient_Model');
            $ss = $this->Patient_Model->InsertNewPatient($data_string);

            echo json_encode($ss);
        }
    }


     public function UpdatePatient() {
        if (isset($_POST['patient'])) {
            $Data = $_POST['patient'];

            $data_string = json_encode($Data);

            $this->load->model('Patient_Model');
            $ss = $this->Patient_Model->UpdatePatient($data_string);

            echo json_encode($ss);
        }
    }

     //UpdatePatientVisit
      public function UpdateHospitalPatientVist() {
        if (isset($_POST['patient'])) {
            $Data = $_POST['patient'];

            $data_string = json_encode($Data);

            $this->load->model('Patient_Model');
            $ss = $this->Patient_Model->UpdateHospitalPatientVist($data_string);

            echo json_encode($ss);
        }
    }

    //UpdateIternalpVisit
      public function UpdateInternalPatientVist() {
        if (isset($_POST['patient'])) {
            $Data = $_POST['patient'];

            $data_string = json_encode($Data);

            $this->load->model('Patient_Model');
            $ss = $this->Patient_Model->UpdateInternalPatientVist($data_string);

            echo json_encode($ss);
        }
    }

    public function GetPatientCount() {
        $this->load->model('Patient_Model');
        $result = $this->Patient_Model->GetPatientCount();

        echo json_encode($result);
        exit;
    }

}
