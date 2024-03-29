<?php
class Test_Dissolution_Enteric_Coated_Model extends CI_Model{

	function Test_Dissolution_Enteric_Coated_Model(){
		parent::__construct();
	}

	function save_worksheet(){
		
		$coa_method_used=$this->input->post('coa_method_used');
		$coa_results=$this->input->post('coa_results');
		$coa_specification=$this->input->post('coa_specification');
		$status =1;
		$test_request=$this->input->post('test_request');
		$assignment=$this->input->post('assignment');
		$test_type='Dissolution Test Enteric Coated Capsules';
		$analyst= $this->input->post('analyst');
		
		$data =array(			
			'equipment_make'=>$this->input->post('equipment_make'),
			'equipment_number'=>$this->input->post('equipment_number'),
			'dissolution_prepaparation'=>$this->input->post('dissolution_prepaparation'),
			'apparatus'=>$this->input->post('apparatus'),
			'actual_apparatus'=>$this->input->post('actual_apparatus'),
			'apparatus_comment'=>$this->input->post('apparatus_comment'),
			'rotation'=>$this->input->post('rotation'),
			'actual_rotation'=>$this->input->post('actual_rotation'),
			'rotation_comment'=>$this->input->post('rotation_comment'),
			'time'=>$this->input->post('time'),
			'actual_time'=>$this->input->post('actual_time'),
			'time_comment'=>$this->input->post('time_comment'),
			'temperature'=>$this->input->post('temperature'),
			'actual_temperature'=>$this->input->post('actual_temperature'),
			'temperature_comment'=>$this->input->post('temperature_comment'),
			'sample_preparation'=>$this->input->post('sample_preparation'),
			'standard_weight'=>$this->input->post('standard_weight'),
			'standard_description'=>$this->input->post('standard_description'),
			'potency'=>$this->input->post('potency'),
			'lot_no'=>$this->input->post('lot_no'),
			'id_no'=>$this->input->post('id_no'),
			'standard_container'=>$this->input->post('standard_container'),
			'container'=>$this->input->post('container'),
			'standard_weight_1'=>$this->input->post('standard_weight_1'),
			'standard_dilution'=>$this->input->post('standard_dilution'),

			'balance_make'=>$this->input->post('balance_make'),
			'balance_number'=>$this->input->post('balance_number'),
			'standard_description_1'=>$this->input->post('standard_description_1'),
			'potency_1'=>$this->input->post('potency_1'),
			'lot_no_1'=>$this->input->post('lot_no_1'),
			'id_no_1'=>$this->input->post('id_no_1'),
			'standard_container_1'=>$this->input->post('standard_container_1'),
			'container_1'=>$this->input->post('container_1'),
			'standard_weight_2'=>$this->input->post('standard_weight_2'),
			'standard_dilution_1'=>$this->input->post('standard_dilution_1'),
			'mobile_phase'=>$this->input->post('mobile_phase'),
			'name'=>$this->input->post('name'),
			'length'=>$this->input->post('length'),
			'serial_no'=>$this->input->post('serial_no'),
			'manufacturer'=>$this->input->post('manufacturer'),
			'column_pressure'=>$this->input->post('column_pressure'),
			'column_oven_pressure'=>$this->input->post('column_oven_pressure'),
			'flow_rate'=>$this->input->post('flow_rate'),
			'wavelength'=>$this->input->post('wavelength'),

			'rt_1'=>$this->input->post('rt_1'),
			'peak_area_1'=>$this->input->post('peak_area_1'),
			'asymmetry_1'=>$this->input->post('asymmetry_1'),
			'resolution_1'=>$this->input->post('resolution_1'),
			'other_1'=>$this->input->post('other_1'),
			'rt_2'=>$this->input->post('rt_2'),
			'peak_area_2'=>$this->input->post('peak_area_2'),
			'asymmetry_2'=>$this->input->post('asymmetry_2'),
			'resolution_2'=>$this->input->post('resolution_2'),
			'other_1'=>$this->input->post('other_2'),
			'rt_3'=>$this->input->post('rt_3'),
			'peak_area_3'=>$this->input->post('peak_area_3'),
			'asymmetry_3'=>$this->input->post('asymmetry_3'),
			'resolution_3'=>$this->input->post('resolution_3'),
			'other_1'=>$this->input->post('other_3'),
			'rt_4'=>$this->input->post('rt_4'),

			'peak_area_4'=>$this->input->post('peak_area_4'),
			'asymmetry_4'=>$this->input->post('asymmetry_4'),
			'resolution_4'=>$this->input->post('resolution_4'),
			'other_1'=>$this->input->post('other_4'),
			'rt_5'=>$this->input->post('rt_5'),
			'peak_area_5'=>$this->input->post('peak_area_5'),
			'asymmetry_5'=>$this->input->post('asymmetry_5'),
			'resolution_5'=>$this->input->post('resolution_5'),
			'other_1'=>$this->input->post('other_5'),
			'rt_6'=>$this->input->post('rt_6'),
			'peak_area_6'=>$this->input->post('peak_area_6'),
			'asymmetry_6'=>$this->input->post('asymmetry_6'),
			'resolution_6'=>$this->input->post('resolution_6'),
			'other_1'=>$this->input->post('other_6'),
			'rt_avg'=>$this->input->post('rt_avg'),
			'peak_area_avg'=>$this->input->post('peak_area_avg'),
			'asymmetry_avg'=>$this->input->post('asymmetry_avg'),
			'resolution_avg'=>$this->input->post('resolution_avg'),
			'other_1'=>$this->input->post('other_avg'),
			'rt_sd'=>$this->input->post('rt_sd'),
			'peak_area_sd'=>$this->input->post('peak_area_sd'),
			'asymmetry_sd'=>$this->input->post('asymmetry_sd'),
			'resolution_sd'=>$this->input->post('resolution_sd'),
			'other_1'=>$this->input->post('other_sd'),

			'rt_rsd'=>$this->input->post('rt_rsd'),
			'peak_area_rsd'=>$this->input->post('peak_area_rsd'),
			'asymmetry_rsd'=>$this->input->post('asymmetry_rsd'),
			'resolution_rsd'=>$this->input->post('resolution_rsd'),
			'other_rsd'=>$this->input->post('other_rsd'),

			'rt_comment'=>$this->input->post('rt_comment'),
			'peak_area_comment'=>$this->input->post('peak_area_comment'),
			'asymmetry_comment'=>$this->input->post('asymmetry_comment'),
			'resolution_comment'=>$this->input->post('resolution_comment'),
			'other_comment'=>$this->input->post('other_comment'),

			'sample_1'=>$this->input->post('sample_1'),
			'sample_1_s1'=>$this->input->post('sample_1_s1'),
			'sample_1_s2'=>$this->input->post('sample_1_s2'),
			'sample_1_s3'=>$this->input->post('sample_1_s3'),
			'sample_1_s4'=>$this->input->post('sample_1_s4'),
			'sample_1_s5'=>$this->input->post('sample_1_s5'),
			'sample_1_s6'=>$this->input->post('sample_1_s6'),

			'sample_2'=>$this->input->post('sample_2'),
			'sample_2_s1'=>$this->input->post('sample_2_s1'),
			'sample_2_s2'=>$this->input->post('sample_2_s2'),
			'sample_2_s3'=>$this->input->post('sample_2_s3'),
			'sample_2_s4'=>$this->input->post('sample_2_s4'),
			'sample_2_s5'=>$this->input->post('sample_2_s5'),
			'sample_2_s6'=>$this->input->post('sample_2_s6'),

			'sample_3'=>$this->input->post('sample_3'),
			'sample_3_s1'=>$this->input->post('sample_3_s1'),
			'sample_3_s2'=>$this->input->post('sample_3_s2'),
			'sample_3_s3'=>$this->input->post('sample_3_s3'),
			'sample_3_s4'=>$this->input->post('sample_3_s4'),
			'sample_3_s5'=>$this->input->post('sample_3_s5'),
			'sample_3_s6'=>$this->input->post('sample_3_s6'),
			
			'sample_4'=>$this->input->post('sample_4'),
			'sample_4_s1'=>$this->input->post('sample_4_s1'),
			'sample_4_s2'=>$this->input->post('sample_4_s2'),
			'sample_4_s3'=>$this->input->post('sample_4_s3'),
			'sample_4_s4'=>$this->input->post('sample_4_s4'),
			'sample_4_s5'=>$this->input->post('sample_4_s5'),
			'sample_4_s6'=>$this->input->post('sample_4_s6'),

			'sample_5'=>$this->input->post('sample_5'),
			'sample_5_s1'=>$this->input->post('sample_5_s1'),
			'sample_5_s2'=>$this->input->post('sample_5_s2'),
			'sample_5_s3'=>$this->input->post('sample_5_s3'),
			'sample_5_s4'=>$this->input->post('sample_5_s4'),
			'sample_5_s5'=>$this->input->post('sample_5_s5'),
			'sample_5_s6'=>$this->input->post('sample_5_s6'),

			'avg'=>$this->input->post('avg'),
			'avg_s1'=>$this->input->post('avg_s1'),
			'avg_s2'=>$this->input->post('avg_s2'),
			'avg_s3'=>$this->input->post('avg_s3'),
			'avg_s4'=>$this->input->post('avg_s4'),
			'avg_s5'=>$this->input->post('avg_s5'),
			'avg_s6'=>$this->input->post('avg_s6'),

			'average'=>$this->input->post('average'),
			'equivalent'=>$this->input->post('equivalent'),
			'range'=>$this->input->post('range'),
			'rsd'=>$this->input->post('rsd'),
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
		$this->db->insert('diss_enteric_coated', $data);

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

		$determination_data = array(
			'test_request'=>$this->input->post('test_request'),
			
			'det_1_pkt'=>$this->input->post('det_1_pkt'),
			'det_1_wstd'=>$this->input->post('det_1_wstd'),
			'det_1_df'=>$this->input->post('det_1_df'),
			'det_1_potency'=>$this->input->post('det_1_potency'),
			'det_1_pkstd'=>$this->input->post('det_1_pkstd'),
			'det_1_lc'=>$this->input->post('det_1_lc'),
			'determination_1'=>$this->input->post('determination_1'),

			'det_2_pkt'=>$this->input->post('det_2_pkt'),
			'det_2_wstd'=>$this->input->post('det_2_wstd'),
			'det_2_df'=>$this->input->post('det_2_df'),
			'det_2_potency'=>$this->input->post('det_2_potency'),
			'det_2_pkstd'=>$this->input->post('det_2_pkstd'),
			'det_2_lc'=>$this->input->post('det_2_lc'),
			'determination_2'=>$this->input->post('determination_2'),

			'det_3_pkt'=>$this->input->post('det_3_pkt'),
			'det_3_wstd'=>$this->input->post('det_3_wstd'),
			'det_3_df'=>$this->input->post('det_3_df'),
			'det_3_potency'=>$this->input->post('det_3_potency'),
			'det_3_pkstd'=>$this->input->post('det_3_pkstd'),
			'det_3_lc'=>$this->input->post('det_3_lc'),
			'determination_3'=>$this->input->post('determination_3'),

			'det_4_pkt'=>$this->input->post('det_4_pkt'),
			'det_4_wstd'=>$this->input->post('det_4_wstd'),
			'det_4_df'=>$this->input->post('det_4_df'),
			'det_4_potency'=>$this->input->post('det_4_potency'),
			'det_4_pkstd'=>$this->input->post('det_4_pkstd'),
			'det_4_lc'=>$this->input->post('det_4_lc'),
			'determination_4'=>$this->input->post('determination_4'),

			'det_5_pkt'=>$this->input->post('det_5_pkt'),
			'det_5_wstd'=>$this->input->post('det_5_wstd'),
			'det_5_df'=>$this->input->post('det_5_df'),
			'det_5_potency'=>$this->input->post('det_5_potency'),
			'det_5_pkstd'=>$this->input->post('det_5_pkstd'),
			'det_5_lc'=>$this->input->post('det_5_lc'),
			'determination_5'=>$this->input->post('determination_5'),

			'det_6_pkt'=>$this->input->post('det_6_pkt'),
			'det_6_wstd'=>$this->input->post('det_6_wstd'),
			'det_6_df'=>$this->input->post('det_6_df'),
			'det_6_potency'=>$this->input->post('det_6_potency'),
			'det_6_pkstd'=>$this->input->post('det_6_pkstd'),
			'det_6_lc'=>$this->input->post('det_6_lc'),
			'determination_6'=>$this->input->post('determination_6'),
			);

			$this->db->insert('diss_enteric_coated_determinations', $determination_data);

		redirect('test/index/'.$assignment.'/'.$test_request);	
	}

	function save_second_stage_worksheet(){
		
		$coa_method_used=$this->input->post('coa_method_used');
		$coa_results=$this->input->post('coa_results');
		$coa_specification=$this->input->post('coa_specification');
		$second_status =2;
		$test_request=$this->input->post('test_request');
		$assignment=$this->input->post('assignment');
		$test_type='Dissolution Test Enteric Coated Capsules';
		$analyst= $this->input->post('analyst');
		
		$data =array(			
			'equipment_make'=>$this->input->post('equipment_make'),
			'equipment_number'=>$this->input->post('equipment_number'),
			'dissolution_prepaparation'=>$this->input->post('dissolution_prepaparation'),
			'apparatus'=>$this->input->post('apparatus'),
			'actual_apparatus'=>$this->input->post('actual_apparatus'),
			'apparatus_comment'=>$this->input->post('apparatus_comment'),
			'rotation'=>$this->input->post('rotation'),
			'actual_rotation'=>$this->input->post('actual_rotation'),
			'rotation_comment'=>$this->input->post('rotation_comment'),
			'time'=>$this->input->post('time'),
			'actual_time'=>$this->input->post('actual_time'),
			'time_comment'=>$this->input->post('time_comment'),
			'temperature'=>$this->input->post('temperature'),
			'actual_temperature'=>$this->input->post('actual_temperature'),
			'temperature_comment'=>$this->input->post('temperature_comment'),
			'sample_preparation'=>$this->input->post('sample_preparation'),
			'standard_weight'=>$this->input->post('standard_weight'),
			'standard_description'=>$this->input->post('standard_description'),
			'potency'=>$this->input->post('potency'),
			'lot_no'=>$this->input->post('lot_no'),
			'id_no'=>$this->input->post('id_no'),
			'standard_container'=>$this->input->post('standard_container'),
			'container'=>$this->input->post('container'),
			'standard_weight_1'=>$this->input->post('standard_weight_1'),
			'standard_dilution'=>$this->input->post('standard_dilution'),

			'balance_make'=>$this->input->post('balance_make'),
			'balance_number'=>$this->input->post('balance_number'),
			'standard_description_1'=>$this->input->post('standard_description_1'),
			'potency_1'=>$this->input->post('potency_1'),
			'lot_no_1'=>$this->input->post('lot_no_1'),
			'id_no_1'=>$this->input->post('id_no_1'),
			'standard_container_1'=>$this->input->post('standard_container_1'),
			'container_1'=>$this->input->post('container_1'),
			'standard_weight_2'=>$this->input->post('standard_weight_2'),
			'standard_dilution_1'=>$this->input->post('standard_dilution_1'),
			'mobile_phase'=>$this->input->post('mobile_phase'),
			'name'=>$this->input->post('name'),
			'length'=>$this->input->post('length'),
			'serial_no'=>$this->input->post('serial_no'),
			'manufacturer'=>$this->input->post('manufacturer'),
			'column_pressure'=>$this->input->post('column_pressure'),
			'column_oven_pressure'=>$this->input->post('column_oven_pressure'),
			'flow_rate'=>$this->input->post('flow_rate'),
			'wavelength'=>$this->input->post('wavelength'),

			'rt_1'=>$this->input->post('rt_1'),
			'peak_area_1'=>$this->input->post('peak_area_1'),
			'asymmetry_1'=>$this->input->post('asymmetry_1'),
			'resolution_1'=>$this->input->post('resolution_1'),
			'other_1'=>$this->input->post('other_1'),

			'rt_2'=>$this->input->post('rt_2'),
			'peak_area_2'=>$this->input->post('peak_area_2'),
			'asymmetry_2'=>$this->input->post('asymmetry_2'),
			'resolution_2'=>$this->input->post('resolution_2'),
			'other_2'=>$this->input->post('other_2'),

			'rt_3'=>$this->input->post('rt_3'),
			'peak_area_3'=>$this->input->post('peak_area_3'),
			'asymmetry_3'=>$this->input->post('asymmetry_3'),
			'resolution_3'=>$this->input->post('resolution_3'),
			'other_3'=>$this->input->post('other_3'),

			'rt_4'=>$this->input->post('rt_4'),
			'peak_area_4'=>$this->input->post('peak_area_4'),
			'asymmetry_4'=>$this->input->post('asymmetry_4'),
			'resolution_4'=>$this->input->post('resolution_4'),
			'other_4'=>$this->input->post('other_4'),

			'rt_5'=>$this->input->post('rt_5'),
			'peak_area_5'=>$this->input->post('peak_area_5'),
			'asymmetry_5'=>$this->input->post('asymmetry_5'),
			'resolution_5'=>$this->input->post('resolution_5'),
			'other_5'=>$this->input->post('other_5'),

			'rt_6'=>$this->input->post('rt_6'),
			'peak_area_6'=>$this->input->post('peak_area_6'),
			'asymmetry_6'=>$this->input->post('asymmetry_6'),
			'resolution_6'=>$this->input->post('resolution_6'),
			'other_6'=>$this->input->post('other_6'),

			'rt_avg'=>$this->input->post('rt_avg'),
			'peak_area_avg'=>$this->input->post('peak_area_avg'),
			'asymmetry_avg'=>$this->input->post('asymmetry_avg'),
			'resolution_avg'=>$this->input->post('resolution_avg'),
			'other_avg'=>$this->input->post('other_avg'),

			'rt_sd'=>$this->input->post('rt_sd'),
			'peak_area_sd'=>$this->input->post('peak_area_sd'),
			'asymmetry_sd'=>$this->input->post('asymmetry_sd'),
			'resolution_sd'=>$this->input->post('resolution_sd'),
			'other_sd'=>$this->input->post('other_sd'),

			'rt_rsd'=>$this->input->post('rt_rsd'),
			'peak_area_rsd'=>$this->input->post('peak_area_rsd'),
			'asymmetry_rsd'=>$this->input->post('asymmetry_rsd'),
			'resolution_rsd'=>$this->input->post('resolution_rsd'),
			'other_rsd'=>$this->input->post('other_rsd'),

			'rt_comment'=>$this->input->post('rt_comment'),
			'peak_area_comment'=>$this->input->post('peak_area_comment'),
			'asymmetry_comment'=>$this->input->post('asymmetry_comment'),
			'resolution_comment'=>$this->input->post('resolution_comment'),
			'other_comment'=>$this->input->post('other_comment'),

			'sample_1'=>$this->input->post('sample_1'),
			'sample_1_s1'=>$this->input->post('sample_1_s1'),
			'sample_1_s2'=>$this->input->post('sample_1_s2'),
			'sample_1_s3'=>$this->input->post('sample_1_s3'),
			'sample_1_s4'=>$this->input->post('sample_1_s4'),
			'sample_1_s5'=>$this->input->post('sample_1_s5'),
			'sample_1_s6'=>$this->input->post('sample_1_s6'),

			'sample_2'=>$this->input->post('sample_2'),
			'sample_2_s1'=>$this->input->post('sample_2_s1'),
			'sample_2_s2'=>$this->input->post('sample_2_s2'),
			'sample_2_s3'=>$this->input->post('sample_2_s3'),
			'sample_2_s4'=>$this->input->post('sample_2_s4'),
			'sample_2_s5'=>$this->input->post('sample_2_s5'),
			'sample_2_s6'=>$this->input->post('sample_2_s6'),

			'sample_3'=>$this->input->post('sample_3'),
			'sample_3_s1'=>$this->input->post('sample_3_s1'),
			'sample_3_s2'=>$this->input->post('sample_3_s2'),
			'sample_3_s3'=>$this->input->post('sample_3_s3'),
			'sample_3_s4'=>$this->input->post('sample_3_s4'),
			'sample_3_s5'=>$this->input->post('sample_3_s5'),
			'sample_3_s6'=>$this->input->post('sample_3_s6'),
			
			'sample_4'=>$this->input->post('sample_4'),
			'sample_4_s1'=>$this->input->post('sample_4_s1'),
			'sample_4_s2'=>$this->input->post('sample_4_s2'),
			'sample_4_s3'=>$this->input->post('sample_4_s3'),
			'sample_4_s4'=>$this->input->post('sample_4_s4'),
			'sample_4_s5'=>$this->input->post('sample_4_s5'),
			'sample_4_s6'=>$this->input->post('sample_4_s6'),

			'sample_5'=>$this->input->post('sample_5'),
			'sample_5_s1'=>$this->input->post('sample_5_s1'),
			'sample_5_s2'=>$this->input->post('sample_5_s2'),
			'sample_5_s3'=>$this->input->post('sample_5_s3'),
			'sample_5_s4'=>$this->input->post('sample_5_s4'),
			'sample_5_s5'=>$this->input->post('sample_5_s5'),
			'sample_5_s6'=>$this->input->post('sample_5_s6'),

			'avg'=>$this->input->post('avg'),
			'avg_s1'=>$this->input->post('avg_s1'),
			'avg_s2'=>$this->input->post('avg_s2'),
			'avg_s3'=>$this->input->post('avg_s3'),
			'avg_s4'=>$this->input->post('avg_s4'),
			'avg_s5'=>$this->input->post('avg_s5'),
			'avg_s6'=>$this->input->post('avg_s6'),

			'average'=>$this->input->post('average'),
			'equivalent'=>$this->input->post('equivalent'),
			'range'=>$this->input->post('range'),
			'rsd'=>$this->input->post('rsd'),
			'test_request'=>$this->input->post('test_request'),
			'assignment'=>$this->input->post('assignment'),
			'status'=>$second_status,		

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
		$this->db->insert('diss_enteric_coated', $data);

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

		$determination_data = array(
			'test_request'=>$this->input->post('test_request'),
			'status'=>$second_status,
			
			'det_1_pkt'=>$this->input->post('det_1_pkt'),
			'det_1_wstd'=>$this->input->post('det_1_wstd'),
			'det_1_df'=>$this->input->post('det_1_df'),
			'det_1_potency'=>$this->input->post('det_1_potency'),
			'det_1_pkstd'=>$this->input->post('det_1_pkstd'),
			'det_1_lc'=>$this->input->post('det_1_lc'),
			'determination_1'=>$this->input->post('determination_1'),

			'det_2_pkt'=>$this->input->post('det_2_pkt'),
			'det_2_wstd'=>$this->input->post('det_2_wstd'),
			'det_2_df'=>$this->input->post('det_2_df'),
			'det_2_potency'=>$this->input->post('det_2_potency'),
			'det_2_pkstd'=>$this->input->post('det_2_pkstd'),
			'det_2_lc'=>$this->input->post('det_2_lc'),
			'determination_2'=>$this->input->post('determination_2'),

			'det_3_pkt'=>$this->input->post('det_3_pkt'),
			'det_3_wstd'=>$this->input->post('det_3_wstd'),
			'det_3_df'=>$this->input->post('det_3_df'),
			'det_3_potency'=>$this->input->post('det_3_potency'),
			'det_3_pkstd'=>$this->input->post('det_3_pkstd'),
			'det_3_lc'=>$this->input->post('det_3_lc'),
			'determination_3'=>$this->input->post('determination_3'),

			'det_4_pkt'=>$this->input->post('det_4_pkt'),
			'det_4_wstd'=>$this->input->post('det_4_wstd'),
			'det_4_df'=>$this->input->post('det_4_df'),
			'det_4_potency'=>$this->input->post('det_4_potency'),
			'det_4_pkstd'=>$this->input->post('det_4_pkstd'),
			'det_4_lc'=>$this->input->post('det_4_lc'),
			'determination_4'=>$this->input->post('determination_4'),

			'det_5_pkt'=>$this->input->post('det_5_pkt'),
			'det_5_wstd'=>$this->input->post('det_5_wstd'),
			'det_5_df'=>$this->input->post('det_5_df'),
			'det_5_potency'=>$this->input->post('det_5_potency'),
			'det_5_pkstd'=>$this->input->post('det_5_pkstd'),
			'det_5_lc'=>$this->input->post('det_5_lc'),
			'determination_5'=>$this->input->post('determination_5'),

			'det_6_pkt'=>$this->input->post('det_6_pkt'),
			'det_6_wstd'=>$this->input->post('det_6_wstd'),
			'det_6_df'=>$this->input->post('det_6_df'),
			'det_6_potency'=>$this->input->post('det_6_potency'),
			'det_6_pkstd'=>$this->input->post('det_6_pkstd'),
			'det_6_lc'=>$this->input->post('det_6_lc'),
			'determination_6'=>$this->input->post('determination_6'),
			);

			$this->db->insert('diss_enteric_coated_determinations', $determination_data);

		redirect('test/index/'.$assignment.'/'.$test_request);	
	}
	function save_third_stage_worksheet(){
		
		$coa_method_used=$this->input->post('coa_method_used');
		$coa_results=$this->input->post('coa_results');
		$coa_specification=$this->input->post('coa_specification');
		$third_status =3;
		$test_request=$this->input->post('test_request');
		$assignment=$this->input->post('assignment');
		$test_type='Dissolution Test Enteric Coated Capsules: Third Stage';
		$analyst= $this->input->post('analyst');
		
		$data =array(			
			'equipment_make'=>$this->input->post('equipment_make'),
			'equipment_number'=>$this->input->post('equipment_number'),
			'dissolution_prepaparation'=>$this->input->post('dissolution_prepaparation'),
			'apparatus'=>$this->input->post('apparatus'),
			'actual_apparatus'=>$this->input->post('actual_apparatus'),
			'apparatus_comment'=>$this->input->post('apparatus_comment'),
			'rotation'=>$this->input->post('rotation'),
			'actual_rotation'=>$this->input->post('actual_rotation'),
			'rotation_comment'=>$this->input->post('rotation_comment'),
			'time'=>$this->input->post('time'),
			'actual_time'=>$this->input->post('actual_time'),
			'time_comment'=>$this->input->post('time_comment'),
			'temperature'=>$this->input->post('temperature'),
			'actual_temperature'=>$this->input->post('actual_temperature'),
			'temperature_comment'=>$this->input->post('temperature_comment'),
			'sample_preparation'=>$this->input->post('sample_preparation'),
			'standard_weight'=>$this->input->post('standard_weight'),
			'standard_description'=>$this->input->post('standard_description'),
			'potency'=>$this->input->post('potency'),
			'lot_no'=>$this->input->post('lot_no'),
			'id_no'=>$this->input->post('id_no'),
			'standard_container'=>$this->input->post('standard_container'),
			'container'=>$this->input->post('container'),
			'standard_weight_1'=>$this->input->post('standard_weight_1'),
			'standard_dilution'=>$this->input->post('standard_dilution'),

			'balance_make'=>$this->input->post('balance_make'),
			'balance_number'=>$this->input->post('balance_number'),
			'standard_description_1'=>$this->input->post('standard_description_1'),
			'potency_1'=>$this->input->post('potency_1'),
			'lot_no_1'=>$this->input->post('lot_no_1'),
			'id_no_1'=>$this->input->post('id_no_1'),
			'standard_container_1'=>$this->input->post('standard_container_1'),
			'container_1'=>$this->input->post('container_1'),
			'standard_weight_2'=>$this->input->post('standard_weight_2'),
			'standard_dilution_1'=>$this->input->post('standard_dilution_1'),
			'mobile_phase'=>$this->input->post('mobile_phase'),
			'name'=>$this->input->post('name'),
			'length'=>$this->input->post('length'),
			'serial_no'=>$this->input->post('serial_no'),
			'manufacturer'=>$this->input->post('manufacturer'),
			'column_pressure'=>$this->input->post('column_pressure'),
			'column_oven_pressure'=>$this->input->post('column_oven_pressure'),
			'flow_rate'=>$this->input->post('flow_rate'),
			'wavelength'=>$this->input->post('wavelength'),

			'rt_1'=>$this->input->post('rt_1'),
			'peak_area_1'=>$this->input->post('peak_area_1'),
			'asymmetry_1'=>$this->input->post('asymmetry_1'),
			'resolution_1'=>$this->input->post('resolution_1'),
			'other_1'=>$this->input->post('other_1'),

			'rt_2'=>$this->input->post('rt_2'),
			'peak_area_2'=>$this->input->post('peak_area_2'),
			'asymmetry_2'=>$this->input->post('asymmetry_2'),
			'resolution_2'=>$this->input->post('resolution_2'),
			'other_2'=>$this->input->post('other_2'),

			'rt_3'=>$this->input->post('rt_3'),
			'peak_area_3'=>$this->input->post('peak_area_3'),
			'asymmetry_3'=>$this->input->post('asymmetry_3'),
			'resolution_3'=>$this->input->post('resolution_3'),
			'other_3'=>$this->input->post('other_3'),

			'rt_4'=>$this->input->post('rt_4'),
			'peak_area_4'=>$this->input->post('peak_area_4'),
			'asymmetry_4'=>$this->input->post('asymmetry_4'),
			'resolution_4'=>$this->input->post('resolution_4'),
			'other_4'=>$this->input->post('other_4'),

			'rt_5'=>$this->input->post('rt_5'),
			'peak_area_5'=>$this->input->post('peak_area_5'),
			'asymmetry_5'=>$this->input->post('asymmetry_5'),
			'resolution_5'=>$this->input->post('resolution_5'),
			'other_5'=>$this->input->post('other_5'),

			'rt_6'=>$this->input->post('rt_6'),
			'peak_area_6'=>$this->input->post('peak_area_6'),
			'asymmetry_6'=>$this->input->post('asymmetry_6'),
			'resolution_6'=>$this->input->post('resolution_6'),
			'other_6'=>$this->input->post('other_6'),

			'rt_avg'=>$this->input->post('rt_avg'),
			'peak_area_avg'=>$this->input->post('peak_area_avg'),
			'asymmetry_avg'=>$this->input->post('asymmetry_avg'),
			'resolution_avg'=>$this->input->post('resolution_avg'),
			'other_avg'=>$this->input->post('other_avg'),

			'rt_sd'=>$this->input->post('rt_sd'),
			'peak_area_sd'=>$this->input->post('peak_area_sd'),
			'asymmetry_sd'=>$this->input->post('asymmetry_sd'),
			'resolution_sd'=>$this->input->post('resolution_sd'),
			'other_sd'=>$this->input->post('other_sd'),

			'rt_rsd'=>$this->input->post('rt_rsd'),
			'peak_area_rsd'=>$this->input->post('peak_area_rsd'),
			'asymmetry_rsd'=>$this->input->post('asymmetry_rsd'),
			'resolution_rsd'=>$this->input->post('resolution_rsd'),
			'other_rsd'=>$this->input->post('other_rsd'),

			'rt_comment'=>$this->input->post('rt_comment'),
			'peak_area_comment'=>$this->input->post('peak_area_comment'),
			'asymmetry_comment'=>$this->input->post('asymmetry_comment'),
			'resolution_comment'=>$this->input->post('resolution_comment'),
			'other_comment'=>$this->input->post('other_comment'),
			
			'average'=>$this->input->post('average'),
			'equivalent'=>$this->input->post('equivalent'),
			'range'=>$this->input->post('range'),
			'rsd'=>$this->input->post('rsd'),
			'test_request'=>$this->input->post('test_request'),
			'assignment'=>$this->input->post('assignment'),
			'status'=>$third_status,		

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
		$this->db->insert('diss_enteric_coated', $data);

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

			$samples_data = array(
			'sample_1'=>$this->input->post('sample_1'),
			'sample_1_s1'=>$this->input->post('sample_1_s1'),
			'sample_1_s2'=>$this->input->post('sample_1_s2'),
			'sample_1_s3'=>$this->input->post('sample_1_s3'),
			'sample_1_s4'=>$this->input->post('sample_1_s4'),
			'sample_1_s5'=>$this->input->post('sample_1_s5'),
			'sample_1_s6'=>$this->input->post('sample_1_s6'),
			'sample_1_s7'=>$this->input->post('sample_1_s7'),
			'sample_1_s8'=>$this->input->post('sample_1_s8'),
			'sample_1_s9'=>$this->input->post('sample_1_s9'),
			'sample_1_s10'=>$this->input->post('sample_1_s10'),
			'sample_1_s11'=>$this->input->post('sample_1_s11'),
			'sample_1_s12'=>$this->input->post('sample_1_s12'),

			'sample_2'=>$this->input->post('sample_2'),
			'sample_2_s1'=>$this->input->post('sample_2_s1'),
			'sample_2_s2'=>$this->input->post('sample_2_s2'),
			'sample_2_s3'=>$this->input->post('sample_2_s3'),
			'sample_2_s4'=>$this->input->post('sample_2_s4'),
			'sample_2_s5'=>$this->input->post('sample_2_s5'),
			'sample_2_s6'=>$this->input->post('sample_2_s6'),
			'sample_2_s7'=>$this->input->post('sample_2_s7'),
			'sample_2_s8'=>$this->input->post('sample_2_s8'),
			'sample_2_s9'=>$this->input->post('sample_2_s9'),
			'sample_2_s10'=>$this->input->post('sample_2_s10'),
			'sample_2_s11'=>$this->input->post('sample_2_s11'),
			'sample_2_s12'=>$this->input->post('sample_2_s12'),

			'sample_3'=>$this->input->post('sample_3'),
			'sample_3_s1'=>$this->input->post('sample_3_s1'),
			'sample_3_s2'=>$this->input->post('sample_3_s2'),
			'sample_3_s3'=>$this->input->post('sample_3_s3'),
			'sample_3_s4'=>$this->input->post('sample_3_s4'),
			'sample_3_s5'=>$this->input->post('sample_3_s5'),
			'sample_3_s6'=>$this->input->post('sample_3_s6'),
			'sample_3_s7'=>$this->input->post('sample_3_s7'),
			'sample_3_s8'=>$this->input->post('sample_3_s8'),
			'sample_3_s9'=>$this->input->post('sample_3_s9'),
			'sample_3_s10'=>$this->input->post('sample_3_s10'),
			'sample_3_s11'=>$this->input->post('sample_3_s11'),
			'sample_3_s12'=>$this->input->post('sample_3_s12'),
			
			'sample_4'=>$this->input->post('sample_4'),
			'sample_4_s1'=>$this->input->post('sample_4_s1'),
			'sample_4_s2'=>$this->input->post('sample_4_s2'),
			'sample_4_s3'=>$this->input->post('sample_4_s3'),
			'sample_4_s4'=>$this->input->post('sample_4_s4'),
			'sample_4_s5'=>$this->input->post('sample_4_s5'),
			'sample_4_s6'=>$this->input->post('sample_4_s6'),
			'sample_4_s7'=>$this->input->post('sample_4_s7'),
			'sample_4_s8'=>$this->input->post('sample_4_s8'),
			'sample_4_s9'=>$this->input->post('sample_4_s9'),
			'sample_4_s10'=>$this->input->post('sample_4_s10'),
			'sample_4_s11'=>$this->input->post('sample_4_s11'),
			'sample_4_s12'=>$this->input->post('sample_4_s12'),

			'sample_5'=>$this->input->post('sample_5'),
			'sample_5_s1'=>$this->input->post('sample_5_s1'),
			'sample_5_s2'=>$this->input->post('sample_5_s2'),
			'sample_5_s3'=>$this->input->post('sample_5_s3'),
			'sample_5_s4'=>$this->input->post('sample_5_s4'),
			'sample_5_s5'=>$this->input->post('sample_5_s5'),
			'sample_5_s6'=>$this->input->post('sample_5_s6'),
			'sample_5_s7'=>$this->input->post('sample_5_s7'),
			'sample_5_s8'=>$this->input->post('sample_5_s8'),
			'sample_5_s9'=>$this->input->post('sample_5_s9'),
			'sample_5_s10'=>$this->input->post('sample_5_s10'),
			'sample_5_s11'=>$this->input->post('sample_5_s11'),
			'sample_5_s12'=>$this->input->post('sample_5_s12'),

			'avg'=>$this->input->post('avg'),
			'avg_s1'=>$this->input->post('avg_s1'),
			'avg_s2'=>$this->input->post('avg_s2'),
			'avg_s3'=>$this->input->post('avg_s3'),
			'avg_s4'=>$this->input->post('avg_s4'),
			'avg_s5'=>$this->input->post('avg_s5'),
			'avg_s6'=>$this->input->post('avg_s6'),
			'avg_s7'=>$this->input->post('avg_s7'),
			'avg_s8'=>$this->input->post('avg_s8'),
			'avg_s9'=>$this->input->post('avg_s9'),
			'avg_s10'=>$this->input->post('avg_s10'),
			'avg_s11'=>$this->input->post('avg_s11'),
			'avg_s12'=>$this->input->post('avg_s12'),
			);
			$this->db->insert('diss_enteric_coated_third_samples', $samples_data);

		$determination_data = array(
			'test_request'=>$this->input->post('test_request'),
			'status'=>$third_status,
			
			'det_1_pkt'=>$this->input->post('det_1_pkt'),
			'det_1_wstd'=>$this->input->post('det_1_wstd'),
			'det_1_df'=>$this->input->post('det_1_df'),
			'det_1_potency'=>$this->input->post('det_1_potency'),
			'det_1_pkstd'=>$this->input->post('det_1_pkstd'),
			'det_1_lc'=>$this->input->post('det_1_lc'),
			'determination_1'=>$this->input->post('determination_1'),

			'det_2_pkt'=>$this->input->post('det_2_pkt'),
			'det_2_wstd'=>$this->input->post('det_2_wstd'),
			'det_2_df'=>$this->input->post('det_2_df'),
			'det_2_potency'=>$this->input->post('det_2_potency'),
			'det_2_pkstd'=>$this->input->post('det_2_pkstd'),
			'det_2_lc'=>$this->input->post('det_2_lc'),
			'determination_2'=>$this->input->post('determination_2'),

			'det_3_pkt'=>$this->input->post('det_3_pkt'),
			'det_3_wstd'=>$this->input->post('det_3_wstd'),
			'det_3_df'=>$this->input->post('det_3_df'),
			'det_3_potency'=>$this->input->post('det_3_potency'),
			'det_3_pkstd'=>$this->input->post('det_3_pkstd'),
			'det_3_lc'=>$this->input->post('det_3_lc'),
			'determination_3'=>$this->input->post('determination_3'),

			'det_4_pkt'=>$this->input->post('det_4_pkt'),
			'det_4_wstd'=>$this->input->post('det_4_wstd'),
			'det_4_df'=>$this->input->post('det_4_df'),
			'det_4_potency'=>$this->input->post('det_4_potency'),
			'det_4_pkstd'=>$this->input->post('det_4_pkstd'),
			'det_4_lc'=>$this->input->post('det_4_lc'),
			'determination_4'=>$this->input->post('determination_4'),

			'det_5_pkt'=>$this->input->post('det_5_pkt'),
			'det_5_wstd'=>$this->input->post('det_5_wstd'),
			'det_5_df'=>$this->input->post('det_5_df'),
			'det_5_potency'=>$this->input->post('det_5_potency'),
			'det_5_pkstd'=>$this->input->post('det_5_pkstd'),
			'det_5_lc'=>$this->input->post('det_5_lc'),
			'determination_5'=>$this->input->post('determination_5'),

			'det_6_pkt'=>$this->input->post('det_6_pkt'),
			'det_6_wstd'=>$this->input->post('det_6_wstd'),
			'det_6_df'=>$this->input->post('det_6_df'),
			'det_6_potency'=>$this->input->post('det_6_potency'),
			'det_6_pkstd'=>$this->input->post('det_6_pkstd'),
			'det_6_lc'=>$this->input->post('det_6_lc'),
			'determination_6'=>$this->input->post('determination_6'),
			);

			$this->db->insert('diss_enteric_coated_determinations', $determination_data);

		redirect('test/index/'.$assignment.'/'.$test_request);	
	}
	function save_monograph(){
		$test_request=$this->input->post('test_request');
		$assignment=$this->input->post('assignment');
		$test_name='Dissolution Test: Enteric Coated Capsules';
		$analyst= $this->input->post('analyst');
		$diss_enteric_coated=1;


		$data = array(
			'monograph' => $this->input->post('enteric_coated_monograph'),
			'test_request_id' => $this->input->post('test_request'),
			'assignment_id' => $this->input->post('assignment'),
			'test_name' => $test_name,
			'analyst' => $this->input->post('analyst'),
			'diss_enteric_coated_id' => $diss_enteric_coated,


			);
		$this->db->insert('diss_enteric_coated_monograph', $data);
		redirect('test/index/'.$assignment.'/'.$test_request);	

	}
}

?> 
