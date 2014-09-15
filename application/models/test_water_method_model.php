<?php
class Test_Water_Method_Model extends CI_Model{

	function Test_Water_Method_Model(){
		parent::__construct();
	}

	function save_worksheet(){
		
		$coa_method_used=$this->input->post('coa_method_used');
		$coa_results=$this->input->post('coa_results');
		$coa_specification=$this->input->post('coa_specification');
		$status =1;
		$test_request=$this->input->post('test_request');
		$assignment=$this->input->post('assignment');
		$status =1;
		$test_type='Karl Fisher';
		$analyst= $this->input->post('analyst');
		
		$data =array(
			'equipment_make'=>$this->input->post('equipment_make'),
			'equipment_number'=>$this->input->post('equipment_number'),
			'burette_id'=>$this->input->post('burette_id'),
			'burette_volume'=>$this->input->post('burette_volume'),
			'balance_make'=>$this->input->post('balance_make'),
			'balance_number'=>$this->input->post('balance_number'),
			'standard_description'=>$this->input->post('standard_description'),
			'standard_container_1'=>$this->input->post('standard_container_1'),
			'standard_container_2'=>$this->input->post('standard_container_2'),
			'standard_container_3'=>$this->input->post('standard_container_3'),
			'standard_container_4'=>$this->input->post('standard_container_4'),
			'standard_container_5'=>$this->input->post('standard_container_5'),
			'standard_container_6'=>$this->input->post('standard_container_6'),
			'container_1'=>$this->input->post('container_1'),
			'container_2'=>$this->input->post('container_2'),
			'container_3'=>$this->input->post('container_3'),
			'container_4'=>$this->input->post('container_4'),
			'container_5'=>$this->input->post('container_5'),
			'container_6'=>$this->input->post('container_6'),
			'standard_weight_1'=>$this->input->post('standard_weight_1'),
			'standard_weight_2'=>$this->input->post('standard_weight_2'),
			'standard_weight_3'=>$this->input->post('standard_weight_3'),
			'standard_weight_4'=>$this->input->post('standard_weight_4'),
			'standard_weight_5'=>$this->input->post('standard_weight_5'),
			'standard_weight_6'=>$this->input->post('standard_weight_6'),
			'initial_temperature'=>$this->input->post('initial_temperature'),
			'final_temperature'=>$this->input->post('final_temperature'),
			'kf_volume_1'=>$this->input->post('kf_volume_1'),
			'kf_volume_2'=>$this->input->post('kf_volume_2'),
			'kf_volume_3'=>$this->input->post('kf_volume_3'),
			'kf_volume_4'=>$this->input->post('kf_volume_4'),
			'kf_volume_5'=>$this->input->post('kf_volume_5'),
			'kf_volume_6'=>$this->input->post('kf_volume_6'),
			'titer_1'=>$this->input->post('titer_1'),
			'titer_2'=>$this->input->post('titer_2'),
			'titer_3'=>$this->input->post('titer_3'),
			'titer_4'=>$this->input->post('titer_4'),
			'titer_5'=>$this->input->post('titer_5'),
			'titer_6'=>$this->input->post('titer_6'),
			'rsd_acceptance_criteria'=>$this->input->post('rsd_acceptance_criteria'),
			'rsd_result'=>$this->input->post('rsd_result'),
			'rsd_comment'=>$this->input->post('rsd_comment'),
			'sample_tier_standard_container_1'=>$this->input->post('sample_tier_standard_container_1'),
			'sample_tier_standard_container_2'=>$this->input->post('sample_tier_standard_container_2'),
			'sample_tier_standard_container_3'=>$this->input->post('sample_tier_standard_container_3'),
			'sample_tier_standard_container_4'=>$this->input->post('sample_tier_standard_container_4'),
			'sample_tier_standard_container_5'=>$this->input->post('sample_tier_standard_container_5'),
			'sample_tier_standard_container_6'=>$this->input->post('sample_tier_standard_container_6'),
			'sample_tier_container_1'=>$this->input->post('sample_tier_container_1'),
			'sample_tier_container_2'=>$this->input->post('sample_tier_container_2'),
			'sample_tier_container_3'=>$this->input->post('sample_tier_container_3'),
			'sample_tier_container_4'=>$this->input->post('sample_tier_container_4'),
			'sample_tier_container_5'=>$this->input->post('sample_tier_container_5'),
			'sample_tier_container_6'=>$this->input->post('sample_tier_container_6'),
			'sample_tier_standard_weight_1'=>$this->input->post('sample_tier_standard_weight_1'),
			'sample_tier_standard_weight_2'=>$this->input->post('sample_tier_standard_weight_2'),
			'sample_tier_standard_weight_3'=>$this->input->post('sample_tier_standard_weight_3'),
			'sample_tier_standard_weight_4'=>$this->input->post('sample_tier_standard_weight_4'),
			'sample_tier_standard_weight_5'=>$this->input->post('sample_tier_standard_weight_5'),
			'sample_tier_standard_weight_6'=>$this->input->post('sample_tier_standard_weight_6'),
			'sample_tier_kf_volume_1'=>$this->input->post('sample_tier_kf_volume_1'),
			'sample_tier_kf_volume_2'=>$this->input->post('sample_tier_kf_volume_2'),
			'sample_tier_kf_volume_3'=>$this->input->post('sample_tier_kf_volume_3'),
			'sample_tier_kf_volume_4'=>$this->input->post('sample_tier_kf_volume_4'),
			'sample_tier_kf_volume_5'=>$this->input->post('sample_tier_kf_volume_5'),
			'sample_tier_kf_volume_6'=>$this->input->post('sample_tier_kf_volume_6'),

			'det_1_kfv'=>$this->input->post('det_1_kfv'),
			'det_1_f'=>$this->input->post('det_1_f'),
			'det_1_wt'=>$this->input->post('det_1_wt'),
			'determination_1'=>$this->input->post('determination_1'),

			'det_3_kfv'=>$this->input->post('det_3_kfv'),
			'det_3_f'=>$this->input->post('det_3_f'),
			'det_3_wt'=>$this->input->post('det_3_wt'),
			'determination_3'=>$this->input->post('determination_3'),

			'det_2_kfv'=>$this->input->post('det_2_kfv'),
			'det_2_f'=>$this->input->post('det_2_f'),
			'det_2_wt'=>$this->input->post('det_2_wt'),			
			'determination_2'=>$this->input->post('determination_2'),
			
			'average'=>$this->input->post('average'),
			'equivalent'=>$this->input->post('equivalent'),
			'range'=>$this->input->post('range'),
			'rsd'=>$this->input->post('rsd'),
			'content_ac'=>$this->input->post('content_ac'),
			'content_result'=>$this->input->post('content_result'),
			'content_comment'=>$this->input->post('content_comment'),
			'sd_ac'=>$this->input->post('sd_ac'),
			'sd_result'=>$this->input->post('sd_result'),
			'sd_comment'=>$this->input->post('sd_comment'),
			'rsd_ac'=>$this->input->post('rsd_ac'),
			'rsd_result_2'=>$this->input->post('rsd_result_2'),
			'rsd_comment_2'=>$this->input->post('rsd_comment_2'),
			'test_request'=>$this->input->post('test_request'),
			'assignment'=>$this->input->post('assignment'),
			'status'=>$status,	
			
			'sysytem_suitability_sequence'=>$this->input->post('sysytem_suitability_sequence'),
			'sysytem_suitability_sequence_comment'=>$this->input->post('sysytem_suitability_sequence_comment'),
			'sample_injection_sequence'=>$this->input->post('sample_injection_sequence'),
			'chromatograms_attached_comment'=>$this->input->post('chromatograms_attached_comment'),
			'chromatograms_attached'=>$this->input->post('chromatograms_attached'),
			'sample_injection_sequence_comment'=>$this->input->post('Sample_injection_sequence_comment'),
			'choice'=>$this->input->post('choice'),
			'supervisor'=>$this->input->post('supervisor'),
			'date'=>$this->input->post('date'),
			'further_comments'=>$this->input->post('further_comments'),		

			);
		$this->db->insert('water_method', $data);
		


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
		$test_name='Karl Fisher';
		$analyst= $this->input->post('analyst');
		$water_method_id= 1;


		$data = array(
			'monograph' => $this->input->post('water_method_monograph'),
			'test_request_id' => $this->input->post('test_request'),
			'assignment_id' => $this->input->post('assignment'),
			'test_name' => $test_name,
			'analyst' => $this->input->post('analyst'),
			'water_method_id' => $water_method_id


			);
		$this->db->insert('water_method_monograph', $data);
		redirect('test/index/'.$assignment.'/'.$test_request);	

	}
}

?> 