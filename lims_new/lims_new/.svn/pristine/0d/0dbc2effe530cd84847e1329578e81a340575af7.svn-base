<?php

class TestRequest extends CI_Controller{
    function __construct()
	{
		parent::__construct();

		$this->load->helper('url');

		$this->_init();
	}
	
	private function _init()
	{
		$this->output->set_template('default - Copy');
		$this->load->section('sidebar', 'ci_simplicity/sidebar');
	}
	
    public function index()
	{ 
        $data['Requests']=$this->getAllTestRequests();        
        //$this->load->view('TestRequest',$data); 
		$this->load->view('test_request',$data); 		
    }
    
     public function  getAllTestRequests()
    {
             $this->load->model('testrequestmodel','requests');
             $ss=$this->requests->getAlltRequests();
             return $ss;
    }
    
}

