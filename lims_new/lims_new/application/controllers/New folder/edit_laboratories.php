<?php

class editLaboratories extends CI_Controller {
    public function index() {
        
        
        $data['LabID']=$_GET['LID'];
        $data['LabName']=$_GET['LabName'];
        $data['type']=$_GET['type'];
        $data['dept']=$_GET['dept'];
        $data['count']=$_GET['count'];
        $data['incharge']=$_GET['incharge'];
        $data['location']=$_GET['location'];
        $data['email']=$_GET['email'];
        $data['con1']=$_GET['con1'];
        $data['con2']=$_GET['con2'];
        $data['labTypes']=$this->GetAlllabTypes(); 
        $data['Depts']=$this->GetAllDepts(); 
        
        $this->load->view('lab/layout/Header');   
        $this->load->view('his-layout/MainHeader');    
        $this->load->view('lab/editLaboratories',$data);
        $this->load->view('lab/layout/sideMenu'); 
    }
    function EditLaboraroty() {
        if (isset($_POST['LabData'])) {
            $Data = $_POST['LabData'];
            $curl_post_data = array(
                "flabType_ID" => $Data[0],
                "flabDept_ID" => $Data[1],
                "lab_Dept_Count" =>$Data[2],
                "flabLast_UpdatedUserID" => $Data[3],
                "lab_ID" => $Data[4],
                "lab_Name" => $Data[5],
                "lab_Incharge" => $Data[6],
                "location" => $Data[7],
                "email" => $Data[8],
                "contactNumber1" => $Data[9],
                "contactNumber2" => $Data[10]  
            );
            $data_string = json_encode($curl_post_data);
            $this->load->model('/lab/LabManagerModel', 'cate');
            $ss = $this->cate->EditLaboraroty($data_string);
            return $ss;
        }
    }
    
    public function GetAlllabTypes() {
        $this->load->model('/lab/LabManagerModel', 'labtypes');
        $ss = $this->labtypes->GetAlllabTypes();
        return $ss;
    }
    
    public function GetAllDepts() {
        $this->load->model('/lab/LabManagerModel', 'depts');
        $ss = $this->depts->GetAllDepts();
        return $ss;
    }
    
    
    
}