<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calibration_Requirement_Records extends CI_Controller {
    
function Calibration_Requirement_Records()
 {
   parent::__construct();
 }	
function GeTAll(){
        
        $this->load->model('calibration_requirement_recordsmodel');
	
        $data['query'] = 
        $this->calibration_requirement_recordsmodel->calibration_requirement_list_getall();
	
        $this->load->view('calibration_requirement_records',$data);
    
    }
function Get(){
    $this->load->model('calibration_requirement_recordsmodel');
    
    $data['query'] = 
        $this->calibration_requirement_recordsmodel->calibration_requirement_list_get();
	
        $this->load->view('calibration_requirement_records',$data);
    
}
}
?>