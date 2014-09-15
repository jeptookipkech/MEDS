<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calibration_Requirement_List extends CI_Controller {
	function __construct()
	{
	  parent::__construct();
	}
	public function index()
	{
		$this->load->view('calibration_requirement_list_form');
	}
	function save(){
		$this->load->model('calibration_requirementlistmodel');        
	
	if($this->input->post('submit_c')){
		$this->calibration_requirementlistmodel->process();                
	}
		redirect('calibration_requirement_records/Get');
	}	
}
?>