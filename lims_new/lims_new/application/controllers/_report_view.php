<?php

class Report_view extends CI_Controller{
	function __construct()
	{
		parent::__construct();
	}
	
	private function _init()
	{
		$this->output->set_template('default');
		$this->load->section('sidebar', 'includes/sidebar');
	} 
	
    public function index(){
        $this->_init();
        $this->load->view('report_view');
		// getting value from url
		$req_id = $this->uri->uri_to_assoc(2);
        //update status
        $this->load->model('test_request_model', 'requests');
        $this->requests->setStatus(json_encode(array("reqID" => $req_id, "status" => "Report Issued")));
    }

    public function  getAllReport()
    {

        if (isset($_POST['ID'])) {
            $Data = $_POST['ID'];
            $this->load->model('report_modal','report');
            $ss=$this->report->getReportData($Data);
            print_r($ss);
            return $ss;
        }
    }

}
