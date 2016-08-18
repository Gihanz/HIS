<?php

class Test_request extends CI_Controller{
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
	
    public function index()
	{ 
        $data['Requests']=$this->getAllTestRequests();        
        //$this->load->view('TestRequest',$data); 
		$this->load->view('test_request',$data); 		
    }
    
     public function  getAllTestRequests()
    {
             $this->load->model('test_request_model','requests');
             $ss=$this->requests->getAlltRequests();
             return $ss;
    }
    
}

