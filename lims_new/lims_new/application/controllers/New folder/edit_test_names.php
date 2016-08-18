<?php

class editTestNames extends CI_Controller {
    public function index() {
        $data['TID']=$_GET['TID'];
        $data['TN']=$_GET['TN'];
        $data['cid']=$_GET['cid'];
        $data['cat']=$_GET['cat'];
        $data['sid']=$_GET['sid'];
        $data['sub']=$_GET['sub'];
        
        print_r($data);
        
        
        $this->load->view('lab/layout/Header');   
        $this->load->view('his-layout/MainHeader');    
        $this->load->view('lab/editTestNames',$data);
        $this->load->view('lab/layout/sideMenu');   
    }
    
    public function updateTestNames(){
  
        if (isset($_POST['test'])) {
            $Data = $_POST['test'];
            $curl_post_data = array(
                "test_ID" => $Data[0],
                "fTest_CategoryID" => $Data[1],
                "fTest_Sub_CategoryID" => $Data[2],
                "fTest_LastUpdateUserID" => $Data[3],
                "test_Name" => $Data[4]  
            );
            $data_string = json_encode($curl_post_data);
            $this->load->model('/lab/labtestmanagermodel', 'test');
            print_r($data_string);
            $ss = $this->test->updateTestNames($data_string);
            return $ss;
            
        }
        
        
    }
    
}


