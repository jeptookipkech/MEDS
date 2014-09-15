<?php
class Test_Loss_Drying_Model extends CI_Model{

	function Test_Loss_Drying_Model(){
		parent::__construct();
	}

	function save_worksheet(){
		
		$coa_method_used=$this->input->post('coa_method_used');
		$coa_results=$this->input->post('coa_results');
		$coa_specification=$this->input->post('coa_specification');
		$status =1;
		$test_request=$this->input->post('test_request');
		$assignment=$this->input->post('assignment');
		$test_type='Loss on Drying';
		$analyst= $this->input->post('analyst');
		
		$data =array(
			
			'balance_make'=>$this->input->post('balance_make'),
			'balance_number'=>$this->input->post('balance_number'),
			'potency'=>$this->input->post('potency'),
			'lot_no'=>$this->input->post('lot_no'),
			'id_no'=>$this->input->post('id_no'),
			
			'potency_standard_container'=>$this->input->post('potency_standard_container'),
			'potency_container'=>$this->input->post('potency_container'),
			'standard_weight_1'=>$this->input->post('standard_weight_1'),
			'standard_dilution'=>$this->input->post('standard_dilution'),
			'equipment_make'=>$this->input->post('equipment_make'),
			'equipment_number'=>$this->input->post('equipment_number'),
			'time'=>$this->input->post('time'),
			'actual_time'=>$this->input->post('actual_time'),
			'time_comment'=>$this->input->post('time_comment'),
			'temperature'=>$this->input->post('temperature'),
			'actual_temperature'=>$this->input->post('actual_temperature'),
			'temperature_comment'=>$this->input->post('temperature_comment'),

			'potency_standard_container_1'=>$this->input->post('potency_standard_container_1'),
			'potency_standard_container_2'=>$this->input->post('potency_standard_container_2'),
			'potency_standard_container_3'=>$this->input->post('potency_standard_container_3'),			
			'potency_container_1'=>$this->input->post('potency_container_1'),
			'potency_container_2'=>$this->input->post('potency_container_2'),
			'potency_container_3'=>$this->input->post('potency_container_3'),
			'standard_weight_2'=>$this->input->post('standard_weight_2'),
			'standard_weight_3'=>$this->input->post('standard_weight_3'),

			'time_11'=>$this->input->post('time_11'),
			'time_12'=>$this->input->post('time_12'),
			'time_13'=>$this->input->post('time_13'),
			'time_21'=>$this->input->post('time_21'),
			'time_22'=>$this->input->post('time_22'),
			'time_23'=>$this->input->post('time_23'),
			'time_31'=>$this->input->post('time_31'),
			'time_32'=>$this->input->post('time_32'),
			'time_33'=>$this->input->post('time_33'),

			'det_1_initial'=>$this->input->post('det_1_initial'),
			'det_1_weight'=>$this->input->post('det_1_weight'),
			'det_1_initial_weight'=>$this->input->post('det_1_initial_weight'),
			'determination_1'=>$this->input->post('determination_1'),

			'det_2_initial'=>$this->input->post('det_2_initial'),
			'det_2_weight'=>$this->input->post('det_2_weight'),
			'det_2_initial_weight'=>$this->input->post('det_2_initial_weight'),
			'determination_2'=>$this->input->post('determination_2'),

			'det_3_initial'=>$this->input->post('det_3_initial'),
			'det_3_weight'=>$this->input->post('det_3_weight'),
			'det_3_initial_weight'=>$this->input->post('det_3_initial_weight'),
			'determination_3'=>$this->input->post('determination_3'),

			'det_4_initial'=>$this->input->post('det_4_initial'),
			'det_4_weight'=>$this->input->post('det_4_weight'),
			'det_4_initial_weight'=>$this->input->post('det_4_initial_weight'),
			'determination_4'=>$this->input->post('determination_4'),

			'det_6_initial'=>$this->input->post('det_6_initial'),
			'det_6_weight'=>$this->input->post('det_6_weight'),
			'det_6_initial_weight'=>$this->input->post('det_6_initial_weight'),
			'determination_6'=>$this->input->post('determination_6'),

			'det_5_initial'=>$this->input->post('det_5_initial'),
			'det_5_weight'=>$this->input->post('det_5_weight'),
			'det_5_initial_weight'=>$this->input->post('det_5_initial_weight'),
			'determination_5'=>$this->input->post('determination_5'),

			'average'=>$this->input->post('average'),
			'equivalent'=>$this->input->post('equivalent'),
			'range'=>$this->input->post('range'),
			'rsd'=>$this->input->post('rsd'),

			'acceptance_criteria'=>$this->input->post('acceptance_criteria'),
			'results'=>$this->input->post('results'),
			'comment'=>$this->input->post('comment'),
			'test_request'=>$this->input->post('test_request'),
			'assignment'=>$this->input->post('assignment'),
			'status'=>$status,	
			
			'choice'=>$this->input->post('choice'),
			'supervisor'=>$this->input->post('supervisor'),
			'date'=>$this->input->post('date'),
			'further_comments'=>$this->input->post('further_comments'),	

			);
		$this->db->insert('loss_drying', $data);
		


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
		$assignment=$this->input->post('assignment');
		$test_name='Loss on Drying';
		$analyst= $this->input->post('analyst');
		$loss_drying_id= 1;


		$data = array(
			'monograph' => $this->input->post('loss_drying_monograph'),
			'test_request_id' => $this->input->post('test_request'),
			'assignment_id' => $this->input->post('assignment'),
			'test_name' => $this->input->post('test_name'),
			'analyst' => $this->input->post('analyst'),
			'loss_drying_id' => $loss_drying_id
			

			);
		$this->db->insert('loss_drying_monograph', $data);
		redirect('test/index/'.$assignment.'/'.$test_request);	

	}
}

?> 