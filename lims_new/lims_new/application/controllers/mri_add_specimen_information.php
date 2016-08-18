<?php

class Mri_add_specimen_information extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->_init();
    }

    private function _init()
    {
        $this->output->set_template('default');
        $this->load->section('sidebar', 'includes/sidebar');
    }

    public function index(){       
		
        $this->load->view('mri_add_specimen_information');
        
    }

    
     

    
     public function getSpecimenIDByRequestIDRange($sReqID,$eReqID){ 
        $data = array();
        $data['specimen'] = $this->getSpecimenRequestID($sReqID,$eReqID);        

//print_r ($data['specimen']);

        return $data['specimen'];          
    }

    public function getSpecimenRequestID($sRequest_id,$eRequest_id) {
        $this->load->model('mri_specimen_model', 'specimens');
        return $this->specimens->getSpecimen_ids_by_requestID($sRequest_id, $eRequest_id);

    }
     

}
