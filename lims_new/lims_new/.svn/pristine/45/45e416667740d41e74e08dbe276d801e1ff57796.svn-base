<?php

class editSubCategory extends CI_Controller {
    public function index() {
        
        
        $data['SID']=$_GET['SID'];
        $data['Name']=$_GET['SubCat'];
        $data['cid']=$_GET['catID'];
        
        
        
        $this->load->view('lab/layout/Header');   
        $this->load->view('his-layout/MainHeader');    
        $this->load->view('lab/editSubCategory',$data);
        $this->load->view('lab/layout/sideMenu'); 
    }
    public function updateSubCategory(){
        
        if (isset($_POST['Category'])) {
            $Data = $_POST['Category'];
            $curl_post_data = array(
                "sub_CategoryID" => $Data[0],
                "fCategory_ID" => $Data[2],
                "sub_CategoryName" => $Data[1]
            );
            $data_string = json_encode($curl_post_data);
            $this->load->model('/lab/labtestmanagermodel', 'cate');
            print_r($data_string);
            $ss = $this->cate->updateSubCategory($data_string);
            return $ss;
        }
        
        
    }
    
    
    
}