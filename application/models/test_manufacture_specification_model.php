<?php
class Test_Manufacture_Specification_Model extends CI_Model{

	function Test_Manufacture_Specification_Model(){
		parent::__construct();
	}

	function save_worksheet_linearity(){
		
		$coa_method_used=$this->input->post('coa_method_used');
		$coa_results=$this->input->post('coa_results');
		$coa_specification=$this->input->post('coa_specification');
		$status =1;
		$test_request=$this->input->post('test_request');
		$assignment=$this->input->post('assignment');
		$status =1;
		$test_type='Manufacturers Specification: Linearity and Range';
		$analyst= $this->input->post('analyst');
		
		$data =array(
			'balance_make'=>$this->input->post('balance_make'),
			'balance_number'=>$this->input->post('balance_number'),

			'potency'=>$this->input->post('potency'),
			'potency_2'=>$this->input->post('potency_2'),
			'potency_3'=>$this->input->post('potency_3'),
			'potency_4'=>$this->input->post('potency_4'),

			'potency_standard_container'=>$this->input->post('potency_standard_container'),
			'potency_standard_container_2'=>$this->input->post('potency_standard_container_2'),
			'potency_standard_container_3'=>$this->input->post('potency_standard_container_3'),
			'potency_standard_container_4'=>$this->input->post('potency_standard_container_4'),

			'potency_container'=>$this->input->post('potency_container'),
			'potency_container_2'=>$this->input->post('potency_container_2'),
			'potency_container_3'=>$this->input->post('potency_container_3'),
			'potency_container_4'=>$this->input->post('potency_container_4'),

			'standard_weight_1'=>$this->input->post('standard_weight_1'),
			'standard_weight_2'=>$this->input->post('standard_weight_2'),
			'standard_weight_3'=>$this->input->post('standard_weight_3'),
			'standard_weight_4'=>$this->input->post('standard_weight_4'),
			'standard_dilution'=>$this->input->post('standard_dilution'),

			'preparation_1'=>$this->input->post('preparation_1'),
			'concetration_1'=>$this->input->post('concetration_1'),
			'preparation_2'=>$this->input->post('preparation_2'),
			'concetration_2'=>$this->input->post('concetration_2'),
			'preparation_3'=>$this->input->post('preparation_3'),
			'concetration_3'=>$this->input->post('concetration_3'),
			'preparation_4'=>$this->input->post('preparation_4'),
			'concetration_4'=>$this->input->post('concetration_4'),
			'preparation_5'=>$this->input->post('preparation_5'),
			'concetration_5'=>$this->input->post('concetration_5'),

			'rt_1'=>$this->input->post('rt_1'),
			'peak_area_1'=>$this->input->post('peak_area_1'),
			'asymmetry_1'=>$$this->input->post('asymmetry_1'),
			'theoretical_plates_1'=>$this->input->post('theoretical_plates_1'),
			'rtt_1'=>$this->input->post('rtt_1'),

			'rt_2'=>$this->input->post('rt_2'),
			'peak_area_2'=>$this->input->post('peak_area_2'),
			'asymmetry_2'=>$this->input->post('asymmetry_2'),
			'theoretical_plates_2'=>$this->input->post('theoretical_plates_2'),
			'rtt_2'=>$this->input->post('rtt_2'),

			'rt_3'=>$this->input->post('rt_3'),
			'peak_area_3'=>$this->input->post('peak_area_3'),
			'asymmetry_3'=>$this->input->post('asymmetry_3'),
			'theoretical_plates_3'=>$this->input->post('theoretical_plates_3'),
			'rtt_3'=>$this->input->post('rtt_3'),

			'rt_4'=>$this->input->post('rt_4'),
			'peak_area_4'=>$this->input->post('peak_area_4'),
			'asymmetry_4'=>$this->input->post('asymmetry_4'),
			'theoretical_plates_4'=>$this->input->post('theoretical_plates_4'),
			'rtt_4'=>$this->input->post('rtt_4'),

			'rt_5'=>$this->input->post('rt_5'),
			'peak_area_5'=>$this->input->post('peak_area_5'),
			'asymmetry_5'=>$this->input->post('asymmetry_5'),
			'theoretical_plates_5'=>$this->input->post('theoretical_plates_5'),
			'rtt_5'=>$this->input->post('rtt_5'),

			'rt_6'=>$$this->input->post('rt_6'),
			'peak_area_6'=>$this->input->post('peak_area_6'),
			'theoretical_plates_6'=>$this->input->post('theoretical_plates_6'),
			'rtt_6'=>$this->input->post('rtt_6'),

			'rt_avg'=>$this->input->post('rt_avg'),
			'peak_area_avg'=>$this->input->post('peak_area_avg'),
			'asymmetry_avg'=>$this->input->post('asymmetry_avg'),
			'theoretical_plates_avg'=>$this->input->post('theoretical_plates_avg'),
			'rtt_avg'=>$this->input->post('rtt_avg'),

			'rt_sd'=>$this->input->post('rt_sd'),
			'peak_area_sd'=>$this->input->post('peak_area_sd'),
			'asymmetry_sd'=>$this->input->post('asymmetry_sd'),
			'theoretical_plates_sd'=>$this->input->post('theoretical_plates_sd'),
			'rtt_sd'=>$this->input->post('rtt_sd'),

			'rt_rsd'=>$this->input->post('rt_rsd'),
			'peak_area_rsd'=>$this->input->post('peak_area_rsd'),
			'asymmetry_rsd'=>$this->input->post('asymmetry_rsd'),
			'peak_area_5'=>$this->input->post('determination_3'),
			'rtt_rsd'=>$this->input->post('rtt_rsd'),

			'rt_comment'=>$this->input->post('rt_comment'),
			'peak_area_comment'=>$$this->input->post('peak_area_comment'),
			'asymmetry_comment'=>$this->input->post('asymmetry_comment'),
			'theoretical_plates_comment'=>$this->input->post('theoretical_plates_comment'),
			'rtt_comment'=>$this->input->post('rtt_comment'),

			'equipment_make'=>$this->input->post('equipment_make'),
			'equipment_number'=>$this->input->post('equipment_number'),
			'mobile_phase'=>$this->input->post('mobile_phase'),
			'name'=>$this->input->post('name'),
			'length'=>$this->input->post('length'),
			'serial_no'=>$this->input->post('serial_no'),
			'manufacturer'=>$this->input->post('manufacturer'),
			'column_pressure'=>$this->input->post('column_pressure'),
			'column_oven_pressure'=>$this->input->post('column_oven_pressure'),
			'flow_rate'=>$this->input->post('flow_rate'),
			'wavelength'=>$this->input->post('wavelength'),

			'peak_area_dilution'=>$this->input->post('peak_area_dilution'),
			'peak_area_1'=>$this->input->post('peak_area_1'),
			'peak_area_2'=>$this->input->post('peak_area_2'),
			'peak_area_3'=>$this->input->post('peak_area_3'),
			'peak_area_4'=>$this->input->post('peak_area_4'),
			'peak_area_5'=>$this->input->post('peak_area_5'),
			'peak_area_avg'=>$this->input->post('peak_area_avg'),
			'peak_area_sd'=>$this->input->post('peak_area_sd'),
			'peak_area_rsd'=>$$this->input->post('peak_area_rsd'),

			'acceptance_criteria'=>$this->input->post('acceptance_criteria'),
			'results'=>$this->input->post('results'),
			'comments'=>$this->input->post('comments'),			
			'acceptance_criteria_2'=>$this->input->post('acceptance_criteria_2'),
			'results_2'=>$this->input->post('results_2'),
			'comments_2'=>$this->input->post('comments_2'),
			'test_request'=>$this->input->post('test_request'),
			'assignment'=>$this->input->post('assignment'),
			'status'=>$status,			

			);
		$this->db->insert('manufacturer_specification', $data);
		


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
	function save_worksheet_precision(){
		
		$coa_method_used=$this->input->post('coa_method_used');
		$coa_results=$this->input->post('coa_results');
		$coa_specification=$this->input->post('coa_specification');
		$status =1;
		$test_request=$this->input->post('test_request');
		$assignment=$this->input->post('assignment');
		$test_type='Manufacturers Specification: Precision';
		$analyst= $this->input->post('analyst');
		
		$data =array(
			'standard_1'=>$this->input->post('standard_1'),
			'sample_1'=>$this->input->post('sample_1'),
			'standard_2'=>$this->input->post('standard_2'),
			'sample_2'=>$this->input->post('sample_2'),
			'standard_3'=>$this->input->post('standard_3'),
			'sample_3'=>$this->input->post('sample_3'),
			'standard_4'=>$this->input->post('standard_4'),
			'sample_4'=>$this->input->post('sample_4'),
			'standard_5'=>$this->input->post('standard_5'),
			'sample_5'=>$this->input->post('sample_5'),
			'standard_6'=>$this->input->post('standard_6'),
			'sample_6'=>$this->input->post('sample_6'),
			'standard_sd'=>$this->input->post('standard_sd'),
			'sample_sd'=>$this->input->post('sample_sd'),

			'precision_acceptance_criteria'=>$this->input->post('precision_acceptance_criteria'),
			'precision_results'=>$this->input->post('precision_results'),
			'precision_comments'=>$this->input->post('precision_comments'),
			'precision_acceptance_criteria_2'=>$this->input->post('precision_acceptance_criteria_2'),
			'precision_results_2'=>$this->input->post('precision_results_2'),
			'preparation_1'=>$this->input->post('preparation_1'),
			'precision_comments_2'=>$this->input->post('precision_comments_2'),
			
			'test_request'=>$this->input->post('test_request'),
			'assignment'=>$this->input->post('assignment'),
			'status'=>$status,			

			);
		$this->db->insert('manufacturer_specification', $data);
		


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
}

?> 