<?php

class TestRequest extends CI_Controller{
    
    public function index(){        

        $this->load->view('lab/layout/Header');
        $data['Requests']=$this->getAllTestRequests();        
        $this->load->view('his-layout/MainHeader');
        $this->load->view('lab/TestRequest',$data);
        $this->load->view('lab/layout/sideMenu'); 
          
    }
    
     public function  getAllTestRequests()
    {
             $this->load->model('/lab/testRequestModel','requests');
             $ss=$this->requests->getAlltRequests();
             return $ss;
    }
    
}

