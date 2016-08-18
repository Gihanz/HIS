<?php
/**
 * Created by PhpStorm.
 * User: Kanchana
 * Date: 95/6/16
 * Time: 7:06 AM
 */
?>

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mri_verify_results extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mri_verify_results_model_1','results');
         $this->load->library('session');
    }

    private function _init()
    {
           $this->output->set_template('default');
       $this->load->library('session');
      $role = $this->session->userdata('role');
         $roleId = $this->session->userdata('roleId');
        
        if($roleId == "1")
        {
            $this->load->section('sidebar', 'includes/sidebarMLT');
        }
        else if ($roleId == "2")
        {
            $this->load->section('sidebar', 'includes/sidebarDoctor');
        }
           else if ($roleId == "4")
        {
            $this->load->section('sidebar', 'includes/sidebarLabAssistant');
        }
             else if ($roleId == "5")
        {
            $this->load->section('sidebar', 'includes/sidebarNurse');
        }
           else if ($roleId == "3")
        {
            $this->load->section('sidebar', 'includes/sidebar');
        }   else if ($roleId == "6")
        {
            //Admin
            $this->load->section('sidebar', 'includes/sidebarAdmin');
        }
            else if ($roleId == "7")
        {
            //Cosultnant
            $this->load->section('sidebar', 'includes/sidebarConsultant');
        }
        else {
           $this->load->section('sidebar', 'includes/sidebarNon');                                                                                                                         }
    }

    public function index()
    {
        $this->_init();
      

             $role = $this->session->userdata('role');
        $roleId = $this->session->userdata('roleId');
        //Chief MLT ,MLT ,Doctor,Admin , Consuant
        if($roleId == "3"||$roleId == "2"||$roleId == "1"||$roleId == "6"||$roleId == "7")
        {
          $this->load->view('mri_verify_results');
        }
        else 
        {
           // $this->load->view('login_view');
             echo '<script type="text/javascript">
           window.location = "http://localhost/lims_new/login_controller"
           </script>';
        }
    }

    public function report()
    {
        $this->_init();
        $this->load->view('mri_binary_report');
    }

    public function getTestReqests() {
        echo $this->results->getTestRequests($_POST);

    }

    public function setSigleResults() {
        $res = $this->results->setSigleResults($_POST);
        if($res=='true') {
            echo json_encode(array("success"=>true));
        } else {
            echo json_encode(array("success"=>false));
        }

    }

    public function getCompletedTestReqests() {
        echo $this->results->getCompletedTestReqests($_POST);
    }

    public function special_report() {
        if(isset($_GET['req_id'])){
            $this->load->library('pdf');
            $data = array();
            $data['results'] = $this->results->getSingleTestRequestData($_GET['req_id']);
            $this->pdf->load_view("mri_spcl_report",$data);
            $this->pdf->render();
            $this->pdf->stream("report.pdf");
        }
    }

    public function special_report_all() {
        if(isset($_POST['ids'])){
            $this->load->library('pdf');
            $data = array();
            for($i=0;$i<count($_POST['ids']);$i++){
                $data['results'][] = $this->results->getSingleTestRequestData($_POST['ids'][$i]);
            }
            $this->pdf->load_view("mri_spcl_report_all",$data);
            $this->pdf->render();
            //$this->pdf->stream("report.pdf");
            if (!file_exists('./reports/')) {
                mkdir('./reports/', 0777, true);
            }
            $filename = 'report'.uniqid().'.pdf';
            file_put_contents('./reports/'.$filename,$this->pdf->output());
            echo json_encode(array("filename"=>$filename,"success"=>true));
        } else {
            echo json_encode(array("success"=>false));
        }
    }
}