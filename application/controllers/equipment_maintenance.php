<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Equipment_Maintenance extends CI_Controller {
	function __construct()
	{
	  parent::__construct();
	  $this->load->model('equipment_model','',TRUE);
	}
	
	function index(){
		$this->load->view('equipment_maintenance_form');	
	}
	function save(){
		//This method will have the credentials validation
	       $this->load->library('form_validation');
	       $this->form_validation->set_rules('id_number', 'id_number', 'trim|required|xss_clean|callback_check_database');
	       $this->form_validation->set_rules('serial_number','serial_number', 'trim|required|xss_clean');
	       $this->form_validation->set_rules('model', 'model', 'trim|required|xss_clean');
	       
	       if($this->form_validation->run() == FALSE){
	       //Field validation success.  Use redirected to equipment records page
	       redirect('equipment_maintenance_records/Get');	
	       }
		
	}
	function check_database($id_number){
	  
	/*  
	echo $id_number;?>
	<br>
	<?php
	echo $serial_number;
	?>
	<br>
	<?php
	echo $description;
	die;*/
	
	  //query the database
	  $result= $this->equipment_model->register($id_number,$serial_number,$model);
	  
	  if($result){
	  /*
	   *	$sess_array = array();
		foreach($result as $row)
		{
		  $sess_array = array(
		    'id' => $row->id,
		    'test_request_id'=>$row->test_request_id,
		    'client_id'=>$row->client_id,
		    'username' => $row->username,
		    'fname'=> $row->fname,
		    'lname'=> $row->lname,
		    'user_type'=> $row->user_type,
		    'department_id'=> $row->department_id,
		    'role'=> $row->role,
		    'acc_status'=> $row->acc_status
		  );
		  $this->session->set_userdata('logged_in', $sess_array);
		}*/
		
		 $this->form_validation->set_message('check_database', 'Error! That Equipment Already Exists');
		 return false;
		}else{
			$this->load->model('equipment_maintenancemodel');     
			if($this->input->post('submit')){
				$this->equipment_maintenancemodel->process();                
			}
			redirect('equipment_maintenance_records/Get');
		}
	}
}
?>