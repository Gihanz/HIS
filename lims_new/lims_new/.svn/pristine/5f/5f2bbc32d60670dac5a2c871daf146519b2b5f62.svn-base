<?php

class TestResultsController extends CI_Controller{
    
    public function index(){     
        $pid = $_GET['PID'];
        $data['history']=$this->getAllPatientTests($pid); 
        $data1['patient']=$this->getAllPatientByID($pid);
        $this->load->view('lab/layout/Header');
        $this->load->view('his-layout/MainHeader');
        $this->load->view('lab/TestResults',$data,$data1);
        $this->load->view('lab/layout/sideMenu');
    }
    
    
 
    
    public function  getAllFields()
    {
         
         if(isset($_POST['ID']))
        {
             $Data=  array();
             $ID = $_POST['ID'];
             $this->load->model('/lab/ParentTestFieldsModel','Fields');
             $ss=$this->Fields->getFields($ID);
            // print_r($ss);

             $c=1;
                $result = array();
                 foreach ($ss as $key => $value) {
                  $nikan = array(
                      'parent_FieldID'=>$value->parent_FieldID,
                      'parent_FieldName'=>$value->parent_FieldName
                  );
                  array_push($Data, $nikan);
                  
                 }
           
              echo json_encode($Data);
         }
           
    }
    
    public function AddMainResults()

    {
        if (isset($_POST['results'])) {
            $Data = $_POST['results'];

            $data_string = json_encode($Data);
            $this->load->model('/lab/MainResultsModel', 'TestName');
            $ss = $this->TestName->InsertMainResults($data_string);
            
            //update status
			$this->load->model('/lab/testRequestModel', 'requests');
			$this->requests->setStatus(json_encode(array("reqID" => $_GET['ReqID'], "status" => "Report Issued")));
   
        }

    }

    public function getAllPatientTests($pid) {
        $this->load->model('/lab/testRequestModel', 'data');
        $ss = $this->data->getAllTestByID($pid);
        return $ss;
       
    }
    
    public function getAllPatientByID($pid) {
         $this->load->model('/lab/MainResultsModel', 'patient');
         $ss = $this->patient->getAllPatientByID($pid);
         return $ss;  
    }
    
    
    
}

