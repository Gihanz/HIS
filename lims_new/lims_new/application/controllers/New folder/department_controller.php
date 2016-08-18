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
        $this->load->section('sidebar', 'includes/sidebar');
    }

    public function index() {
        
        $this->load->model('Department_Model');
        $data['all_department_result'] = $this->Department_Model->GetAllDepartments();
        
        $this->load->view('department_view', $data);
    }
    
     public function InsertNewDepartment()
    {
        if (isset($_POST['department'])) {
            $Data = $_POST['department'];

            $data_string = json_encode($Data);
            
            $this->load->model('department_Model');
            $ss = $this->Department_Model->InsertNewDepartment($data_string);
            
            echo json_encode($ss);
        }

    }
    
}