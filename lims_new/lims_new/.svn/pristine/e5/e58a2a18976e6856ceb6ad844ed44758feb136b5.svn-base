<?php

class TestRequestResultOpd extends CI_Controller{
    
    public function index(){        

        $this->load->view('lab/layout/Header');
        $data['Requests']=$this->getAllTestRequests();        
        $this->load->view('his-layout/MainHeader');
        $this->load->view('lab/TestRequestReportOpd',$data);
        $this->load->view('lab/layout/sideMenu'); 
          
    }
    
     public function  getAllTestRequests()
    {
             $this->load->model('/lab/testRequestReportOpdModel','requests');
             $ss=$this->requests->getAlltRequests();
             return $ss;
    }
    
}

