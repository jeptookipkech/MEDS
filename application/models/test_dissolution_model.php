<?php
class Test_Dissolution_Model extends CI_Model{

	function Test_Dissolution_Model(){
		parent::__construct();
	}

	function save_worksheet($assignment,$test){
		$test =$this->input->post('test');
		$test_request=$this->input->post('test_request');
		$assignment=$this->input->post('assignment');
		$status =1;
		$test_type='Dissolution';
		$analyst= $this->input->post('analyst');
		
		$data =array(
			'equipment_make'=>$this->input->post('equipment_make'),
			'equipment_number'=>$this->input->post('equipment_number'),
			'hcl_prepaparation'=>$this->input->post('hcl_prepaparation'),
			
			'apparatus'=>$this->input->post('apparatus'),
			'actual_apparatus'=>$this->input->post('actual_apparatus'), 
			'apparatus_comment'=>$this->input->post('apparatus_comment'), 
			'rotation'=>$this->input->post('rotation'),
			'actual_rotation'=>$this->input->post('actual_rotation'), 
			'rotation_comment'=>$this->input->post('rotation_comment'),
			'time'=>$this->input->post('time'), 
			'actual_time'=>$this->input->post('actual_time,'), 
			'time_comment'=>$this->input->post('time_comment'),
			'temperature'=>$this->input->post('temperature'),
			'actual_temperature'=>$this->input->post('actual_temperature'),
			'temperature_comment'=>$this->input->post('temperature_comment'),
			
			'standard_preparation'=>$this->input->post('standard_preparation'),
			'standard_weight'=>$this->input->post('standard_weight'),
			'standard_description'=>$this->input->post('standard_description'),
			'potency'=>$this->input->post('potency'),
			'lot_no'=>$this->input->post('lot_no'),
			'id_no'=>$this->input->post('id_no') ,
			'potency_standard_container'=>$this->input->post('potency_standard_container'),
			'potency_container'=>$this->input->post('potency_container'),
			'standard_weight_1'=>$this->input->post('standard_weight_1'),
			'standard_dilution'=>$this->input->post('standard_dilution'), 
			
			'first_absorbance'=>$this->input->post('first_absorbance'),
			'second_absorbance'=>$this->input->post('second_absorbance') ,
			'difference_standard'=>$this->input->post('difference_standard'), 
			'difference_s1'=>$this->input->post('difference_s1'),
			'difference_s2'=>$this->input->post('difference_s2'),
			'difference_s3'=>$this->input->post('difference_s3'),
			'difference_s4'=>$this->input->post('difference_s4'),
			'difference_s5'=>$this->input->post('difference_s5'),
			'difference_s6'=>$this->input->post('difference_s6'),
			
			'content'=>$this->input->post('content'),
			'df_1'=>$this->input->post('df_1'),
			'df_2'=>$this->input->post('df_2'),
			'df_3'=>$this->input->post('df_3'),
			'dilution_factor'=>$this->input->post('dilution_factor'),
			'determination_1'=>$this->input->post('determination_1'),
			'determination_2'=>$this->input->post('determination_2'),
			'determination_3'=>$this->input->post('determination_3'),
			'determination_4'=>$this->input->post('determination_4,'), 
			'determination_5'=>$this->input->post('determination_5,'), 
			'determination_6'=>$this->input->post('determination_6'),
			'average'=>$this->input->post('average'), 
			'equivalent'=>$this->input->post('equivalent'),
			'range_min'=>$this->input->post('range_min'), 
			'range_max'=>$this->input->post('range_max'), 
			'rsd'=>$this->input->post('rsd'),
			'content_from'=>$this->input->post('content_from'),  
			'content_to'=>$this->input->post('content_to'),  
			'acceptance_criteria'=>$this->input->post('acceptance_criteria'),  
			'results'=>$this->input->post('results'), 
			'comment'=>$this->input->post('comment'),		
			'test_request'=>$test_request,
			'assignment'=>$assignment,
			'status' =>$status,
			'sysytem_suitability_sequence'=>$this->input->post('sysytem_suitability_sequence'),
			'sysytem_suitability_sequence_comment'=>$this->input->post('sysytem_suitability_sequence_comment'),
			'sample_injection_sequence'=>$this->input->post('sample_injection_sequence'),
			'chromatograms_attached_comment'=>$this->input->post('chromatograms_attached_comment'),
			'chromatograms_attached'=>$this->input->post('chromatograms_attached'),
			'sample_injection_sequence_comment'=>$this->input->post('Sample_injection_sequence_comment'),
			'choice'=>$this->input->post('choice'),
			'supervisor'=>$this->input->post('supervisor'),
			'date'=>$this->input->post('date'),
			'analyst'=>$this->input->post('analyst'),	
			'date_done'=>$this->input->post('date_done'),	
			'further_comments'=>$this->input->post('further_comments'),	

			);
		$this->db->insert('diss_data', $data);

		$determination_data = array(
			'test_request'=>$test_request,
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

			$this->db->insert('diss_uv_determinations', $determination_data);

		redirect('test/index/'.$assignment.'/'.$test_request);
/*
		$status_data = array('request_status'=>$status);
		$this->db->update('test_request', $status_data);*/
		

	}
	function save_second_worksheet(){
		$test_request=$this->input->post('test_request');
		$assignment=$this->input->post('assignment');
		$second_status =2;
		$test_type='Dissolution by UV, Second Stage';
		$analyst= $this->input->post('analyst');
		
		$data =array(
			'equipment_make'=>$this->input->post('equipment_make'),
			'equipment_no'=>$this->input->post('equipment_no'),
			'hcl_prepaparation'=>$this->input->post('hcl_prepaparation'),
			'apparatus'=>$this->input->post('apparatus'),
			'actual_apparatus'=>$this->input->post('actual_apparatus'), 
			'apparatus_comment'=>$this->input->post('apparatus_comment'), 
			'rotation'=>$this->input->post('rotation'),
			'actual_rotation'=>$this->input->post('actual_rotation'), 
			'rotation_comment'=>$this->input->post('rotation_comment'),
			'time'=>$this->input->post('time'), 
			'actual_time'=>$this->input->post('actual_time,'), 
			'time_comment'=>$this->input->post('time_comment'),
			'temperature'=>$this->input->post('temperature'),
			'actual_temperature'=>$this->input->post('actual_temperature'),
			'temperature_comment'=>$this->input->post('temperature_comment'),
			'sample_preparation'=>$this->input->post('sample_preparation'),
			'standard_weight'=>$this->input->post('standard_weight'),
			'standard_description'=>$this->input->post('standard_description'),
			'potency'=>$this->input->post('potency'),
			'lot_no'=>$this->input->post('lot_no'),
			'id_no'=>$this->input->post('id_no') ,
			'potency_standard_container'=>$this->input->post('potency_standard_container'),
			'potency_container'=>$this->input->post('potency_container'),
			'standard_weight_1'=>$this->input->post('standard_weight_1'),
			'standard_dilution'=>$this->input->post('standard_dilution'), 
			'first_absorbance'=>$this->input->post('first_absorbance'),
			'second_absorbance'=>$this->input->post('second_absorbance') ,
			'difference_standard'=>$this->input->post('difference_standard'), 
			'difference_s1'=>$this->input->post('difference_s1'),
			'difference_s2'=>$this->input->post('difference_s2'),
			'difference_s3'=>$this->input->post('difference_s3'),
			'difference_s4'=>$this->input->post('difference_s4'),
			'difference_s5'=>$this->input->post('difference_s5'),
			'difference_s6'=>$this->input->post('difference_s6'),
			'content'=>$this->input->post('content'),
			'determination_1'=>$this->input->post('determination_1'),
			'determination_2'=>$this->input->post('determination_2'),
			'determination_3'=>$this->input->post('determination_3'),
			'determination_4'=>$this->input->post('determination_4,'), 
			'determination_5'=>$this->input->post('determination_5,'), 
			'determination_6'=>$this->input->post('determination_6'),
			'average'=>$this->input->post('average'), 
			'equivalent'=>$this->input->post('equivalent'),
			'range'=>$this->input->post('range'), 
			'rsd'=>$this->input->post('rsd'),
			'acceptance_criteria'=>$this->input->post('acceptance_criteria'),  
			'results'=>$this->input->post('results'), 
			'comment'=>$this->input->post('comment'),		
			'test_request'=>$test_request,
			'assignment'=>$assignment,
			'status' =>$second_status,
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
		$this->db->insert('diss_data', $data);

		$determination_data = array(
			'test_request'=>$test_request,
			'status' =>$second_status,
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

			$this->db->insert('diss_uv_determinations', $determination_data);

		redirect('test/index/'.$assignment.'/'.$test_request);
/*
		$status_data = array('request_status'=>$status);
		$this->db->update('test_request', $status_data);*/
		

	}
	function save_third_worksheet(){
		$test_request=$this->input->post('test_request');
		$assignment=$this->input->post('assignment');
		$third_status =3;
		$test_type='Dissolution by UV, Third Stage';
		$analyst= $this->input->post('analyst');
		
		$data =array(
			'equipment_make'=>$this->input->post('equipment_make'),
			'equipment_no'=>$this->input->post('equipment_no'),
			'hcl_prepaparation'=>$this->input->post('hcl_prepaparation'),
			'apparatus'=>$this->input->post('apparatus'),
			'actual_apparatus'=>$this->input->post('actual_apparatus'), 
			'apparatus_comment'=>$this->input->post('apparatus_comment'), 
			'rotation'=>$this->input->post('rotation'),
			'actual_rotation'=>$this->input->post('actual_rotation'), 
			'rotation_comment'=>$this->input->post('rotation_comment'),
			'time'=>$this->input->post('time'), 
			'actual_time'=>$this->input->post('actual_time,'), 
			'time_comment'=>$this->input->post('time_comment'),
			'temperature'=>$this->input->post('temperature'),
			'actual_temperature'=>$this->input->post('actual_temperature'),
			'temperature_comment'=>$this->input->post('temperature_comment'),
			'sample_preparation'=>$this->input->post('sample_preparation'),
			'standard_weight'=>$this->input->post('standard_weight'),
			'standard_description'=>$this->input->post('standard_description'),
			'potency'=>$this->input->post('potency'),
			'lot_no'=>$this->input->post('lot_no'),
			'id_no'=>$this->input->post('id_no') ,
			'potency_standard_container'=>$this->input->post('potency_standard_container'),
			'potency_container'=>$this->input->post('potency_container'),
			'standard_weight_1'=>$this->input->post('standard_weight_1'),
			'standard_dilution'=>$this->input->post('standard_dilution'), 
			'first_absorbance'=>$this->input->post('first_absorbance'),
			'second_absorbance'=>$this->input->post('second_absorbance') ,
			'difference_standard'=>$this->input->post('difference_standard'), 
			
			'difference_s1'=>$this->input->post('difference_s1'),
			'difference_s2'=>$this->input->post('difference_s2'),
			'difference_s3'=>$this->input->post('difference_s3'),
			'difference_s4'=>$this->input->post('difference_s4'),
			'difference_s5'=>$this->input->post('difference_s5'),
			'difference_s6'=>$this->input->post('difference_s6'),
			'difference_s7'=>$this->input->post('difference_s7'),
			'difference_s8'=>$this->input->post('difference_s8'),
			'difference_s9'=>$this->input->post('difference_s9'),
			'difference_s10'=>$this->input->post('difference_s10'),
			'difference_s11'=>$this->input->post('difference_s11'),
			'difference_s12'=>$this->input->post('difference_s12'),

			'content'=>$this->input->post('content'),
			'determination_1'=>$this->input->post('determination_1'),
			'determination_2'=>$this->input->post('determination_2'),
			'determination_3'=>$this->input->post('determination_3'),
			'determination_4'=>$this->input->post('determination_4,'), 
			'determination_5'=>$this->input->post('determination_5,'), 
			'determination_6'=>$this->input->post('determination_6'),
			'average'=>$this->input->post('average'), 
			'equivalent'=>$this->input->post('equivalent'),
			'range'=>$this->input->post('range'), 
			'rsd'=>$this->input->post('rsd'),
			'acceptance_criteria'=>$this->input->post('acceptance_criteria'),  
			'results'=>$this->input->post('results'), 
			'comment'=>$this->input->post('comment'),		
			'test_request'=>$test_request,
			'assignment'=>$assignment,
			'status' =>$third_status,
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
		$this->db->insert('diss_data', $data);

		$determination_data = array(
			'test_request'=>$test_request,
			'status' =>$third_status,
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

			$this->db->insert('diss_uv_determinations', $determination_data);

		redirect('test/index/'.$assignment.'/'.$test_request);
/*
		$status_data = array('request_status'=>$status);
		$this->db->update('test_request', $status_data);*/
		

	}
	function save_hplc_worksheet($assignment,$test){
		$test_request=$this->input->post('test_request');
		$assignment=$this->input->post('assignment');
		$status =1;
		$test_type='Dissolution by HPLC';
		$analyst= $this->input->post('analyst');
		$data =array(
			'balance_number'=>$this->input->post('balance_number'),
			'balance_make'=>$this->input->post('balance_make'),
			'standard_description'=>$this->input->post('standard_description'),
			'potency'=>$this->input->post('potency'),
			'potency_2'=>$this->input->post('potency_2'), 
			'potency_standard_container'=>$this->input->post('potency_standard_container'), 
			'potency_standard_container_2'=>$this->input->post('potency_standard_container_2'),
			'potency_container'=>$this->input->post('potency_container'), 
			'potency_container_2'=>$this->input->post('potency_container_2'),
			'standard_weight_1'=>$this->input->post('standard_weight_1'),

			'standard_weight_2'=>$this->input->post('standard_weight_2'),
			'standard_dilution'=>$this->input->post('standard_dilution'),
			'difference_standard'=>$this->input->post('difference_standard'),
			'difference_11'=>$this->input->post('difference_11'),
			'difference_12'=>$this->input->post('difference_12'), 
			'difference_13'=>$this->input->post('difference_13'), 
			'difference_standard_2'=>$this->input->post('difference_standard_2'),
			'difference_31'=>$this->input->post('difference_31'), 
			'difference_32'=>$this->input->post('difference_32'),
			'difference_33'=>$this->input->post('difference_33'),

			'difference_standard_4'=>$this->input->post('difference_standard_4'),
			'difference_41'=>$this->input->post('difference_41'),
			'difference_42'=>$this->input->post('difference_42'),
			'difference_43'=>$this->input->post('difference_43'),
			'difference_standard_5'=>$this->input->post('difference_standard_5'), 
			'difference_51'=>$this->input->post('difference_51'), 
			'difference_52'=>$this->input->post('difference_52'),
			'difference_53'=>$this->input->post('difference_53'), 
			'difference_standard_6'=>$this->input->post('difference_standard_6'),
			'difference_61'=>$this->input->post('difference_61'),

			'difference_62'=>$this->input->post('difference_62'),
			'difference_63'=>$this->input->post('difference_63'),
			'difference_standard_avg'=>$this->input->post('difference_standard_avg'),
			'difference_s1_avg'=>$this->input->post('difference_s1_avg'),
			'difference_s2_avg'=>$this->input->post('difference_s2_avg'), 
			'difference_s3_avg'=>$this->input->post('difference_s3_avg'), 
			'difference_standard_sd'=>$this->input->post('difference_standard_sd'),
			'difference_s1_sd'=>$this->input->post('difference_s1_sd'), 
			'difference_s2_sd'=>$this->input->post('difference_s2_sd'),
			'difference_s3_sd'=>$this->input->post('difference_s3_sd'),

			'difference_standard_rsd'=>$this->input->post('difference_standard_rsd'),
			'difference_s1_rsd'=>$this->input->post('difference_s1_rsd'),
			'difference_s2_rsd'=>$this->input->post('difference_s2_rsd'),
			'difference_s3_rsd'=>$this->input->post('difference_s3_rsd'),
			'difference_standard_comment'=>$this->input->post('difference_standard_comment'), 
			'difference_s1_comment'=>$this->input->post('difference_s1_comment'), 
			'difference_s2_comment'=>$this->input->post('difference_s2_comment'),
			'difference_s3_comment'=>$this->input->post('difference_s3_comment'), 
			'std_prepaparation'=>$this->input->post('std_prepaparation'),
			'equipment_number'=>$this->input->post('equipment_number'),

			'mobile_phase'=>$this->input->post('mobile_phase'),
			'length'=>$this->input->post('length'),
			'serial_no'=>$this->input->post('serial_no'),
			'manufacturer'=>$this->input->post('manufacturer'),
			'column_pressure'=>$this->input->post('column_pressure'), 
			'column_oven_pressure'=>$this->input->post('column_oven_pressure'), 
			'flow_rate'=>$this->input->post('flow_rate'),
			'wavelength'=>$this->input->post('wavelength'), 
			'equipment_make'=>$this->input->post('equipment_make'),
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
			'standard_description_3'=>$this->input->post('standard_description_3'),
			'potency_3'=>$this->input->post('potency_3'), 
			'potency_4'=>$this->input->post('potency_4'), 
			'potency_standard_container_3'=>$this->input->post('potency_standard_container_3'),
			'potency_standard_container_4'=>$this->input->post('potency_standard_container_4'), 
			'standard_weight_3'=>$this->input->post('standard_weight_3'),
			'standard_weight_4'=>$this->input->post('standard_weight_4'),

			'standard_dilution_2'=>$this->input->post('standard_dilution_2'),
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

			'sample_4'=>$this->input->post('sample_4'),
			'sample_4_s1'=>$this->input->post('sample_4_s1'),
			'sample_4_s2'=>$this->input->post('sample_4_s2'),
			'sample_4_s3'=>$this->input->post('sample_4_s3'),
			'sample_4_s4'=>$this->input->post('sample_4_s4'), 
			'sample_4_s5'=>$this->input->post('sample_4_s5'), 
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
			
			'determination_1'=>$this->input->post('determination_1'),
			'determination_2'=>$this->input->post('determination_2'),
			'determination_3'=>$this->input->post('determination_3'),
			'determination_4'=>$this->input->post('determination_4'),
			'determination_5'=>$this->input->post('determination_5'), 
			'determination_6'=>$this->input->post('determination_6'), 
			'average'=>$this->input->post('average'),
			'equivalent'=>$this->input->post('equivalent'), 
			'range'=>$this->input->post('range'),
			'rsd'=>$this->input->post('rsd'),

			'acceptance_criteria'=>$this->input->post('acceptance_criteria'),
			'results'=>$this->input->post('results'),
			'comment'=>$this->input->post('comment'),
			'second_reagent'=>$this->input->post('second_reagent'),
			'second_standard'=>$this->input->post('second_standard'), 
			'second_sample_1_s1'=>$this->input->post('second_sample_1_s1'),  
			'second_sample_1_s2'=>$this->input->post('second_sample_1_s2'), 
			'second_sample_1_s3'=>$this->input->post('second_sample_1_s3'),
			'second_sample_1_s4'=>$this->input->post('second_sample_1_s4'), 
			'second_sample_1_s5'=>$this->input->post('second_sample_1_s5'),
			'second_sample_1_s6'=>$this->input->post('second_sample_1_s6'),
			
			'second_sample_2'=>$this->input->post('second_sample_2'),
			'second_sample_2_s1'=>$this->input->post('second_sample_2_s1'),
			'second_sample_2_s2'=>$this->input->post('second_sample_2_s2'),
			'second_sample_2_s3'=>$this->input->post('second_sample_2_s3'),
			'second_sample_2_s4'=>$this->input->post('second_sample_2_s4'), 
			'second_sample_2_s5'=>$this->input->post('second_sample_2_s5'), 
			'second_sample_2_s6'=>$this->input->post('second_sample_2_s6'),
			'second_sample_3'=>$this->input->post('second_sample_3'), 
			'second_sample_3_s1'=>$this->input->post('second_sample_3_s1'),
			'second_sample_3_s2'=>$this->input->post('second_sample_3_s2'),

			'second_sample_3_s3'=>$this->input->post('second_sample_3_s3'),
			'second_sample_3_s4'=>$this->input->post('second_sample_3_s4'),
			'second_sample_3_s5'=>$this->input->post('second_sample_3_s5'),
			'second_sample_3_s6'=>$this->input->post('second_sample_3_s6'),
			'second_sample_4'=>$this->input->post('second_sample_4'), 
			'second_sample_4_s1'=>$this->input->post('second_sample_4_s1'),  
			'second_sample_4_s2'=>$this->input->post('second_sample_4_s2'), 
			'second_sample_4_s3'=>$this->input->post('second_sample_4_s3'),
			'second_sample_4_s4'=>$this->input->post('second_sample_4_s4'), 
			'second_sample_4_s5'=>$this->input->post('second_sample_4_s5'),
			'second_sample_4_s6'=>$this->input->post('second_sample_4_s6'),
			
			'second_sample_5'=>$this->input->post('second_sample_5'),
			'second_sample_5_s1'=>$this->input->post('second_sample_5_s1'),
			'second_sample_5_s2'=>$this->input->post('second_sample_5_s2'),
			'second_sample_5_s3'=>$this->input->post('second_sample_5_s3'),
			'second_sample_5_s4'=>$this->input->post('second_sample_5_s4'), 
			'second_sample_5_s5'=>$this->input->post('second_sample_5_s5'), 
			'second_sample_5_s6'=>$this->input->post('second_sample_5_s6'),
			'second_sample_avg'=>$this->input->post('second_sample_avg'), 
			'second_sample_avg_s1'=>$this->input->post('second_sample_avg_s1'),
			'second_sample_avg_s2'=>$this->input->post('second_sample_avg_s2'),

			'second_sample_avg_s3'=>$this->input->post('second_sample_avg_s3'),
			'second_sample_avg_s4'=>$this->input->post('second_sample_avg_s4'),
			'second_sample_avg_s5'=>$this->input->post('second_sample_avg_s5'),
			'second_sample_avg_s6'=>$this->input->post('second_sample_avg_s6'),
			'second_determination_1'=>$this->input->post('second_determination_1'), 
			'second_determination_2'=>$this->input->post('second_determination_2'),  
			'second_determination_3'=>$this->input->post('second_determination_3'), 
			'second_determination_4'=>$this->input->post('second_determination_4'),
			'second_determination_5'=>$this->input->post('second_determination_5'), 
			'second_determination_6'=>$this->input->post('second_determination_6'),
			'second_average'=>$this->input->post('second_average'),
			
			'second_equivalent'=>$this->input->post('second_equivalent'),
			'second_rsd'=>$this->input->post('second_rsd'),
			'second_acceptance_criteria'=>$this->input->post('second_acceptance_criteria'),
			'second_results'=>$this->input->post('second_results'),
			'second_comment'=>$this->input->post('second_comment'), 
			'test_request'=>$test_request,
			'assignment'=>$assignment,
			'status' =>$status,
			);
		$this->db->insert('dissolution', $data);

		// $coa_data = array('coa_method_used'=>$coa_method_used,
		// 	'coa_results'=>$coa_results,
		// 	'coa_specification'=>$coa_specification,
		// 	'test_request_id'=>$test_request,
		// 	'assignment_id'=>$assignment,
		// 	'test_type'=>$test_type,
		// 	'analyst'=>$analyst,
		// 	);
		// $this->db->insert('coa', $coa_data);
		redirect('test/index/'.$assignment.'/'.$test_request);
	}
	function save_monograph(){
		$test_request=$this->input->post('test_request');
		$assignment=$this->input->post('assignment');
		$test_name='Dissolution: UV';
		$analyst= $this->input->post('analyst');
		$uv_id= 1;


		$data = array(
			'monograph' => $this->input->post('uv_monograph'),
			'test_request_id' => $this->input->post('test_request'),
			'assignment_id' => $this->input->post('assignment'),
			'test_name' => $test_name,
			'analyst' => $this->input->post('analyst'),
			'uv_id' => $uv_id


			);
		$this->db->insert('diss_uv_monograph', $data);
		redirect('test/index/'.$assignment.'/'.$test_request);	

	}

}

?> 