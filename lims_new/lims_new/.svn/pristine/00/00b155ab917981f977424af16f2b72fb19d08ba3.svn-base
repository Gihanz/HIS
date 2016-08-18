<?php

class editLabDepartment extends CI_Controller {
    public function index() {
        
        
        $data['DID']=$_GET['DID'];
        $data['DeptName']=$_GET['Dept'];
        $this->load->view('lab/layout/Header');   
        $this->load->view('his-layout/MainHeader');    
        $this->load->view('lab/editLabDepartment',$data);
        $this->load->view('lab/layout/sideMenu'); 
    }
    public function updateLabDept(){
        
        if (isset($_POST['lab'])) {
            $Data = $_POST['lab'];
            $curl_post_data = array(
                "labDept_ID" => $Data[0],
                "labDept_Name" => $Data[1]
            );
            $data_string = json_encode($curl_post_data);
            $this->load->model('/lab/LabManagerModel', 'lab');
          
            $ss = $this->lab->updateLabDept($data_string);
            return $ss;
        }
        
        
    }
    
    
    
}