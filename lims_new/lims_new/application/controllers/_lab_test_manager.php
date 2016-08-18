<?php

class Lab_test_manager extends CI_Controller {
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
        $data['categories']=$this->GetAllCategories(); 
        $data['Subcategories']=$this->GetAllSubCategories(); 
        $data['TestNames']=$this->GetAllTestNames();
        $this->load->view('lab_test_manager',$data);
    }
    
    public function GetAllCategories() {
        $this->load->model('lab_test_manager_model', 'category');
        $ss = $this->category->getAlltCategories();
        return $ss;
    }
    
    public function GetAllSubCategories() {
        $this->load->model('lab_test_manager_model', 'Subcategory');
        $ss = $this->Subcategory->getAllSubCategories();
        return $ss;
    }
    
    public function GetAllTestNames() {
        $this->load->model('lab_test_manager_model', 'TestNames');
        $ss = $this->TestNames->getAllTestNames();
        return $ss;
    }
    
}
