<?php

class userRoles_Controller extends CI_Controller {

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
        
        $this->load->model('UserRoles_Model');
        $data['all_userRoles_result'] = $this->UserRoles_Model->GetAllUserRoles();
        
        $this->load->view('userRoles_view', $data);
    }

    public function InsertNewUserRoles()
    {
        if (isset($_POST['userRoles'])) {
            $Data = $_POST['userRoles'];

            $data_string = json_encode($Data);
            
            $this->load->model('userRoles_Model');
            $ss = $this->userRoles_Model->InsertNewUserRoles($data_string);
            
            echo json_encode($ss);
        }

    }
}