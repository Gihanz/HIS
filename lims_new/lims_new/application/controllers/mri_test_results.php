<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mri_test_results extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('mri_test_results_model','results');
        $this->load->helper('url');
    }

    private function _init()
    {
        $this->output->set_template('default');
        $this->load->section('sidebar', 'includes/sidebar');
    }

    public function index()
    {
        $this->_init();
        //getting value from uri
        $uri_values = $this->uri->uri_to_assoc(3);
        $reqId = $uri_values['req_id'];
        $data['test'] = $this->results->getTestParentFields($reqId);
        $this->load->view('mri_test_results',$data);
    }

    public function get_parent_fields() {
        if(isset($_POST['req_id'])) {
            $reqId = $_POST['req_id'];
            $data['req_id'] = $_POST['req_id'];
            $data['parent_fields'] = $this->results->getTestParentFields($reqId);
            $data['success'] = true;
        } else {
            $data['success'] = false;
        }
        echo json_encode($data);
    }

    public function add_parent_results() {
        $obj = json_encode($_POST);
        echo $this->results->addParentTestResult($obj);
    }

    public function get_sub_fields() {
        $data['sub_fields'] = array();
        if(isset($_POST['parent'])){
           $data['sub_fields'] = $this->results->getTestSubFields($_POST['parent']);
        }
        echo json_encode($data['sub_fields']);
    }

    public function add_sub_results() {
        $obj = json_encode($_POST);
        echo $this->results->addSubTestResult($obj);
    }

    public function  update_request_table() {
        if(isset($_POST['id'])){
            echo $this->results->update_request_table($_POST['id']);
        }
    }


}