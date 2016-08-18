<?php

class editSampleCenter extends CI_Controller {
    public function index() {
        $data['scid']=$_GET['SCID'];
        $data['type']=$_GET['type'];
        $data['name']=$_GET['name'];
        $data['incharge']=$_GET['incharge'];
        $data['location']=$_GET['location'];
        $data['email']=$_GET['email'];
        $data['con1']=$_GET['con1'];
        $data['con2']=$_GET['con2'];
        $data['SSTypes']=$this->GetAllSampleTypes(); 
        $this->load->view('lab/layout/Header');   
        $this->load->view('his-layout/MainHeader');    
        $this->load->view('lab/editSampleCenter',$data);
        $this->load->view('lab/layout/sideMenu'); 
    }
    function UpdateSampleCenter() {
        if (isset($_POST['LabData'])) {
            $Data = $_POST['LabData'];
            $curl_post_data = array(
                
                
                
                "fSampleCenterType_ID" => $Data[0],
                "fSampleCenter_AddedUserID" => $Data[1],
                "sampleCenter_ID" =>$Data[2],
                "sampleCenter_Name" =>$Data[3],
                "sampleCenter_Incharge" => $Data[4],
                "location" => $Data[5],
                "email" => $Data[6],
                "contactNumber1" => $Data[7],
                "contactNumber2" => $Data[8]
            );
            $data_string = json_encode($curl_post_data);
            $this->load->model('/lab/sampleCentreManagerModel', 'cate');
            $ss = $this->cate->UpdateSampleCenter($data_string);
            return $ss;
        }
    }
    
    public function GetAllSampleTypes() {
        $this->load->model('/lab/sampleCentreManagerModel', 'labtypes');
        $ss = $this->labtypes->GetAllSampleTypes();
        return $ss;
    }
    
    
    
    
}