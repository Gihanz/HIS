<?php

class editLabType extends CI_Controller {
    public function index() {
        
        
        $data['LabID']=$_GET['LID'];
        $data['LabName']=$_GET['Lab'];
        $this->load->view('lab/layout/Header');   
        $this->load->view('his-layout/MainHeader');    
        $this->load->view('lab/editLabType',$data);
        $this->load->view('lab/layout/sideMenu'); 
    }
    public function updateLab(){
        
        if (isset($_POST['lab'])) {
            $Data = $_POST['lab'];
            $curl_post_data = array(
                "labType_ID" => $Data[0],
                "lab_Type_Name" => $Data[1]
            );
            $data_string = json_encode($curl_post_data);
            $this->load->model('/lab/LabManagerModel', 'lab');
          
            $ss = $this->lab->updateLabType($data_string);
            return $ss;
        }
        
        
    }
    
    
    
}