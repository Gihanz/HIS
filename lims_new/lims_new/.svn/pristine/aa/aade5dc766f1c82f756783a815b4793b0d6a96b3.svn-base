<?php

class NewTestController extends CI_Controller {

    public function index() {
        $this->load->view('lab/layout/Header');
        $this->load->view('his-layout/MainHeader');
        $this->load->view('lab/AddNewTest');
        $this->load->view('lab/layout/sideMenu');
    }

    public function GetAllCategories() {

        $this->load->model('/lab/newTestModel', 'requests');
        $ss = $this->requests->GetAllCategories();
        print_r($ss);
        exit;
        return $ss;
    }

    public function GetAllSubCategoriesByCategoryID() {

        if (isset($_POST['CategoryID'])) {
            $Data = $_POST['CategoryID'];
            $this->load->model('/lab/newTestModel', 'requests');
            $ss = $this->requests->GetAllSubCategoriesByCategoryID($Data);
            print_r($ss);
            exit;
            return $ss;
        }
    }

    public function GetSpecimenTypesByIDs() {
 
        if (isset($_POST['CategoryID']) && isset($_POST['SubCategoryID'])) {
            $CID = $_POST['CategoryID'];
            $SID = $_POST['SubCategoryID'];
            $this->load->model('/lab/newTestModel', 'requests');
            $ss = $this->requests->GetSpecimenTypes($CID, $SID);
            print_r($ss);
            exit;
            return $ss;
        }
    }

    public function GetSpecimenRetTyeps() {

        if (isset($_POST['CategoryID']) && isset($_POST['SubCategoryID'])) {
            $CID = $_POST['CategoryID'];
            $SID = $_POST['SubCategoryID'];
            $this->load->model('/lab/newTestModel', 'requests');
            $ss = $this->requests->GetSpecimenRetTypes($CID, $SID);

            print_r($ss);
            exit;
            return $ss;
        }
    }

    function addCategory() {

        if (isset($_POST['addCategory'])) {
            $Data = $_POST['addCategory'];
            $curl_post_data = array(
                "category_IDName" => $Data[1],
                "category_Name" => $Data[0]
            );
            $data_string = json_encode($curl_post_data);
            $this->load->model('/lab/newTestModel', 'cate');
            $ss = $this->cate->AddCategory($data_string);
        }
    }

    function addSubCategory() {

        if (isset($_POST['addSubCategory'])) {
            $Data = $_POST['addSubCategory'];
            $curl_post_data = array(
                "subCategory_IDName" => $Data[0],
                "sub_CategoryName" => $Data[1],
                "fCategory_ID" => $Data[2]
            );
            $data_string = json_encode($curl_post_data);
            $this->load->model('/lab/newTestModel', 'Subcate');
            $ss = $this->Subcate->AddSubCategory($data_string);
        }
    }

    function AddSpecimenType() {

        if (isset($_POST['speciType'])) {
            $Data = $_POST['speciType'];

            $curl_post_data = array(
                "specimen_TypeName" => $Data[0],
                "fCategry_ID" => $Data[1],
                "fSub_CategoryID" => $Data[2]
            );
            $data_string = json_encode($curl_post_data);
            $this->load->model('/lab/newTestModel', 'specimen');
            $ss = $this->specimen->AddSpecimenType($data_string);
        }
    }

    function SpecimenRetentionType() {

        if (isset($_POST['speciRetType'])) {
            $Data = $_POST['speciRetType'];
            $curl_post_data = array(
                "retention_TypeName" => $Data[0],
                "duration" => $Data[1],
                "fCategory_ID" => $Data[2],
                "fSub_CategryID" => $Data[3]
            );
            $data_string = json_encode($curl_post_data);
            $this->load->model('/lab/newTestModel', 'specimenRet');
            $ss = $this->specimenRet->AddSpecimenRetentionType($data_string);
        }
    }

    function testName() {

        if (isset($_POST['TestName'])) {
            $Data = $_POST['TestName'];
            $curl_post_data = array(
                "test_IDName" => $Data[0],
                "test_Name" => $Data[1],
                "fTest_CategoryID" => $Data[2],
                "fTest_Sub_CategoryID" => $Data[3],
                "fTest_CreateUserID" => $Data[4],
            );
            $data_string = json_encode($curl_post_data);
            $this->load->model('/lab/newTestModel', 'TestName');
            $ss = $this->TestName->AddTestName($data_string);
            print_r($ss);
            exit;
            return $ss;

        }
    }

    public function GetMaxParentID() {

        $this->load->model('/lab/newTestModel', 'newTest');
        $ss = $this->newTest->GetMaxParentID();
        print_r($ss);
        return $ss;
    }

    public function GetMaxSubFieldID() {

        $this->load->model('/lab/newTestModel', 'newTest');
        $ss = $this->newTest->GetMaxSubFieldID();
        print_r($ss);
        return $ss;
    }
    public function getMaxTestNameID() {

        $this->load->model('/lab/newTestModel', 'newTest');
        $ss = $this->newTest->getMaxTestNameID();
        print_r($ss);
        return $ss;
    }
    public function AddParentFields()

    {
        if (isset($_POST['results'])) {
            $Data = $_POST['results'];
            $data_string = json_encode($Data);
            $this->load->model('/lab/newTestModel', 'newTestModel');
            $ss = $this->newTestModel->AddParentFields($data_string);
            print_r($ss);
        }
  }
    public function Add_ranges()
    {
        if (isset($_POST['range'])) {
            $Data = $_POST['range'];
           
            $curl_post_data = array(
                "gender" => $Data[0],
                "minage" => $Data[1],
                "unit" => $Data[3],
                "maxage" => $Data[2],
                "minVal" => $Data[4],
                "maxVal" => $Data[5],
                "fparentfield_ID" => $Data[6]

            );
            $data_string = json_encode($curl_post_data);
            print_r($data_string);
            $this->load->model('/lab/newTestModel', 'testRange');
            $ss = $this->testRange->AddParentFieldsRanges($data_string);
            
            return $ss;

        }

    }

    public function addSubFiedls(){

        
        if (isset($_POST['results'])) {
            $Data = $_POST['results'];
            $data_string = json_encode($Data);
            $this->load->model('/lab/newTestModel', 'subfields');
            $ss = $this->subfields->addSubFiedls($data_string);
            print_r($ss);
            return $ss;
        }
        
        

    }
    public function AddSubFieldRanges()
    {
        if (isset($_POST['data4'])) {
            $Data = $_POST['data4'];
            $curl_post_data = array(
                "gender" => $Data[0],
                "minage" => $Data[1],
                "maxage" => $Data[2],
                "unit" => $Data[3],
                "minVal" => $Data[4],
                "maxVal" => $Data[5],
                "fsubfield_ID" => $Data[6]
            );
            $data_string = json_encode($curl_post_data);
            print_r($data_string);
            $this->load->model('/lab/newTestModel', 'testRange');
            $ss = $this->testRange->AddSubFieldsRanges($data_string);
            
            return $ss;

        }

    }
    
    

    
    
    
}
