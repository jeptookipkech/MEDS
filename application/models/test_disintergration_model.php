<?php
class Test_Disintergration_Model extends CI_Model{

	function Test_Disintegration_Model(){
		parent::__construct();
	}

	function save_worksheet(){
		$equipment_make=$this->input->post('equipment_make');
		$equipment_no=$this->input->post('equipment_no');
		$highest_hours=$this->input->post('highest_hours');
		$highest_mins=$this->input->post('highest_mins');
		$highest_seconds=$this->input->post('highest_seconds');
		$mean_hours=$this->input->post('mean_hours');
		$mean_mins=$this->input->post('mean_mins');
		$mean_seconds=$this->input->post('mean_seconds');
		$medium=$this->input->post('medium');
		$actual_medium=$this->input->post('actual_medium');
		$medium_comment=$this->input->post('medium_comment');
		$medium_temperature=$this->input->post('medium_temperature');
		$actual_medium_temperature=$this->input->post('actual_medium_temperature');
		$medium_temperature_comment=$this->input->post('medium_temperature_comment');
		$coa_method_used=$this->input->post('coa_method_used');
		$coa_results=$this->input->post('coa_results');
		$coa_specification=$this->input->post('coa_specification');
		$status =1;
		$test_request=$this->input->post('test_request');
		$assignment=$this->input->post('assignment');
		$status =1;
		$test_type='Disintegration';
		$analyst= $this->input->post('analyst');
		
		$data =array(
			'equipment_make'=>$equipment_make,
			'equipment_no'=>$equipment_no,
			'highest_hours'=>$highest_hours,
			'highest_mins'=>$highest_mins,
			'highest_seconds'=>$highest_seconds, 
			'mean_hours'=>$mean_hours,
			'mean_mins'=>$mean_mins,
			'mean_seconds'=>$mean_seconds, 
			'dis_medium'=>$medium,
			'actual_medium'=>$actual_medium,
			'medium_comment'=>$medium_comment,
			'medium_temperature'=>$medium_temperature,
			'actual_medium_temperature'=>$actual_medium_temperature,
			'medium_temperature_comment'=>$medium_temperature_comment, 
			'coa_method_used'=>$coa_method_used,
			'coa_results'=>$coa_results,
			'coa_specification'=>$coa_specification,
			'test_request'=>$test_request,
			'assignment'=>$assignment,
			'status'=>$status,
			'choice'=>$this->input->post('choice'),
			'supervisor'=>$this->input->post('supervisor'),
			'date'=>$this->input->post('date'),
			'further_comments'=>$this->input->post('further_comments'),			

			);
		$this->db->insert('disintegration', $data);
		


		$coa_data = array(
			'coa_method_used'=>$coa_method_used,
			'coa_results'=>$coa_results,
			'coa_specification'=>$coa_specification,
			'test_request_id'=>$test_request,
			'assignment_id'=>$assignment,
			'test_type'=>$test_type,
			'analyst'=>$analyst,
			);
		$this->db->insert('coa', $coa_data);

		redirect('test/index/'.$assignment.'/'.$test_request);	
	}
	function save_monograph(){
		$test_request=$this->input->post('test_request');
		
		$result_disintegration_id = $this->db->select_max('disintegration.id')->get_where('disintegration', array('disintegration.test_request' => $test_request))->result();
	    //$disintegration_id = $result_disintegration_id[0];

	    foreach ($result_disintegration_id as $disintegration_id) {
	    	$disintegration_id_count=$disintegration_id+1;
	    }
	    //$disintegration_id_count =$disintegration_id ;
	    print_r($disintegration_id_count) ;
	    die;

		$assignment=$this->input->post('assignment');
		$test_name='Disintegration';
		$analyst= $this->input->post('analyst');
		$disintegration_id= 1;

		$data = array(
			'monograph' => $this->input->post('vs_monograph'),
			'test_request_id' => $this->input->post('test_request'),
			'assignment_id' => $this->input->post('assignment'),
			'test_name' => $test_name,
			'analyst' => $this->input->post('analyst'),
			'disintegration_id' => $disintegration_id,

			);
		$this->db->insert('disintegration_monograph', $data);
		redirect('test/index/'.$assignment.'/'.$test_request);	

	}
}

?> 