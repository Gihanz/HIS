<?php

class editCategory extends CI_Controller {
    public function index() {
        
        
        $data['catID']=$_GET['CID'];
        $data['catName']=$_GET['Cat'];
        $this->load->view('lab/layout/Header');   
        $this->load->view('his-layout/MainHeader');    
        $this->load->view('lab/CategoryEdit',$data);
        $this->load->view('lab/layout/sideMenu'); 
    }
    public function updateCategory(){
        
        if (isset($_POST['Category'])) {
            $Data = $_POST['Category'];
            $curl_post_data = array(
                "category_ID" => $Data[0],
                "category_Name" => $Data[1]
            );
            $data_string = json_encode($curl_post_data);
            $this->load->model('/lab/labtestmanagermodel', 'cate');
            print_r($data_string);
            $ss = $this->cate->updateCategory($data_string);
            return $ss;
        }
        
        
    }
    
    
    
}