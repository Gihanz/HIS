<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mri_test_report extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('mri_test_report_model','report');
    }

    private function _init()
    {
        $this->output->set_template('default');
        $this->load->section('sidebar', 'includes/sidebar');
    }

    public function index()
    {
        $this->_init();
        $uri_values = $this->uri->uri_to_assoc(3);
        $reqId = $uri_values['req_id'];
        $data['report_data'] = $this->report->getReportParentDetails($reqId);
        $this->load->view("mri_test_report",$data);
    }

    public function pdfGen() {
        $this->_init();
        $uri_values = $this->uri->uri_to_assoc(3);
        $reqId = $uri_values['req_id'];
        $data['report_data'] = $this->report->getReportParentDetails($reqId);
        $this->pdf->load_view("mri_test_report",$data);
    }

    public function pdfGenerate() {
        $this->load->library('pdf');
        $this->_init();
        $uri_values = $this->uri->uri_to_assoc(3);
        $reqId = $uri_values['req_id'];
        $data['report_data'] = $this->report->getReportParentDetails($reqId);
        $this->pdf->load_view("mri_normal_report",$data);
        $this->pdf->render();
        $this->pdf->stream("report.pdf");
    }

}