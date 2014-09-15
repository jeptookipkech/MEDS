<?php
class Test_Related_Substances_Model extends CI_Model{

	function Test_Related_Substances_Model(){
		parent::__construct();
	}

	function save_worksheet(){
		
		$coa_method_used=$this->input->post('coa_method_used');
		$coa_results=$this->input->post('coa_results');
		$coa_specification=$this->input->post('coa_specification');
		$status =1;
		$test_request=$this->input->post('test_request');
		$assignment=$this->input->post('assignment');
		$test_type='Related Substances';
		$analyst= $this->input->post('analyst');
		
		$data =array(
			
			'balance_make'=>$this->input->post('balance_make'),
			'balance_number'=>$this->input->post('balance_number'),
			'standard_weight'=>$this->input->post('standard_weight'),
			'standard_description'=>$this->input->post('standard_description'),
			'potency'=>$this->input->post('potency'),
			'lot_no'=>$this->input->post('lot_no'),
			'id_no'=>$this->input->post('id_no'),
			'potency_2'=>$this->input->post('potency_2'),
			'lot_no_2'=>$this->input->post('lot_no_2'),
			'id_no_2'=>$this->input->post('id_no_2'),
			'potency_standard_container'=>$this->input->post('potency_standard_container'),
			'potency_standard_container_2'=>$this->input->post('potency_standard_container_2'),
			'potency_container'=>$this->input->post('potency_container'),
			'potency_container_2'=>$this->input->post('potency_container_2'),
			'standard_weight_1'=>$this->input->post('standard_weight_1'),
			'standard_weight_2'=>$this->input->post('standard_weight_2'),
			'standard_dilution'=>$this->input->post('standard_dilution'),
			'chromatographic_system'=>$this->input->post('chromatographic_system'),
			'equipment_make'=>$this->input->post('equipment_make'),
			'equipment_number'=>$this->input->post('equipment_number'),
			'sample_container'=>$this->input->post('sample_container'),
			'container'=>$this->input->post('container'),
			'sample_weight'=>$this->input->post('sample_weight'),
			'sample_dilution'=>$this->input->post('sample_dilution'),
			'sample_container_2'=>$this->input->post('sample_container_2'),
			'container_2'=>$this->input->post('container_2'),
			'sample_weight_2'=>$this->input->post('sample_weight_2'),
			'sample_dilution_2'=>$this->input->post('sample_dilution_2'),
			'sample_container_3'=>$this->input->post('sample_container_3'),	
			'container_3'=>$this->input->post('container_3'),		
			'sample_weight_3'=>$this->input->post('sample_weight_3'),
			'sample_dilution_3'=>$this->input->post('sample_dilution_3'),
			'mobile_phase'=>$this->input->post('mobile_phase'),
			'name'=>$this->input->post('name'),
			'length'=>$this->input->post('length'),
			'manufacturer'=>$this->input->post('manufacturer'),
			'column_pressure'=>$this->input->post('column_pressure'),
			'column_oven_pressure'=>$this->input->post('column_oven_pressure'),
			'flow_rate'=>$this->input->post('flow_rate'),
			'wavelength'=>$this->input->post('wavelength'),

			'sample_container_4'=>$this->input->post('sample_container_4'),
			'sample_container_5'=>$this->input->post('sample_container_5'),
			'sample_container_6'=>$this->input->post('sample_container_6'),
			'container_4'=>$this->input->post('container_4'),
			'container_5'=>$this->input->post('container_5'),
			'container_6'=>$this->input->post('container_6'),
			'sample_weight_4'=>$this->input->post('sample_weight_4'),
			'sample_weight_5'=>$this->input->post('sample_weight_5'),
			'sample_weight_6'=>$this->input->post('sample_weight_6'),

			'standard_weight_3'=>$this->input->post('standard_weight_3'),
			'standard_description_2'=>$this->input->post('standard_description_2'),
			'potency_3'=>$this->input->post('potency_3'),
			'lot_no_3'=>$this->input->post('lot_no_3'),
			'id_no_3'=>$this->input->post('id_no_3'),
			'potency_4'=>$this->input->post('potency_4'),
			'lot_no_4'=>$this->input->post('lot_no_4'),
			'id_no_4'=>$this->input->post('id_no_4'),
			'potency_standard_container_3'=>$this->input->post('potency_standard_container_3'),
			'potency_standard_container_4'=>$this->input->post('potency_standard_container_4'),
			'potency_container_3'=>$this->input->post('potency_container_3'),
			'potency_container_4'=>$this->input->post('potency_container_4'),
			'standard_weight_4'=>$this->input->post('standard_weight_4'),
			'standard_dilution_2'=>$this->input->post('standard_dilution_2'),

			'blocker_1'=>$this->input->post('blocker_1'),
			'tertiary_1'=>$this->input->post('tertiary_1'),
			'bis_ether_1'=>$this->input->post('bis_ether_1'),
			'unspecified_1'=>$this->input->post('unspecified_1'),
			'impurity_1'=>$this->input->post('impurity_1'),

			'blocker_2'=>$this->input->post('blocker_2'),
			'tertiary_2'=>$this->input->post('tertiary_2'),
			'bis_ether_2'=>$this->input->post('bis_ether_2'),
			'unspecified_2'=>$this->input->post('unspecified_2'),
			'impurity_2'=>$this->input->post('impurity_2'),
			
			'blocker_3'=>$this->input->post('blocker_3'),
			'tertiary_3'=>$this->input->post('tertiary_3'),
			'bis_ether_3'=>$this->input->post('bis_ether_3'),
			'unspecified_3'=>$this->input->post('unspecified_3'),
			'impurity_3'=>$this->input->post('impurity_3'),

			'blocker_4'=>$this->input->post('blocker_4'),
			'tertiary_4'=>$this->input->post('tertiary_4'),
			'bis_ether_4'=>$this->input->post('bis_ether_4'),
			'unspecified_4'=>$this->input->post('unspecified_4'),
			'impurity_4'=>$this->input->post('impurity_4'),

			'blocker_5'=>$this->input->post('blocker_5'),
			'tertiary_5'=>$this->input->post('tertiary_5'),
			'bis_ether_5'=>$this->input->post('bis_ether_5'),
			'unspecified_5'=>$this->input->post('unspecified_5'),
			'impurity_5'=>$this->input->post('impurity_5'),

			'blocker_avg'=>$this->input->post('blocker_avg'),
			'tertiary_avg'=>$this->input->post('tertiary_avg'),
			'bis_ether_avg'=>$this->input->post('bis_ether_avg'),
			'unspecified_avg'=>$this->input->post('unspecified_avg'),
			'impurity_avg'=>$this->input->post('impurity_avg'),

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
		$this->db->insert('related_substances', $data);
		


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
		$test_name='Related Substances';
		$analyst= $this->input->post('analyst');
		$related_substances_id= 1;


		$data = array(
			'monograph' => $this->input->post('related_substances_monograph'),
			'test_request_id' => $this->input->post('test_request'),
			'assignment_id' => $this->input->post('assignment'),
			'test_name' => $this->input->post('test_name'),
			'analyst' => $this->input->post('analyst'),
			'related_substances_id' => $related_substances_id


			);
		$this->db->insert('related_substances_monograph', $data);
		redirect('test/index/'.$assignment.'/'.$test_request);	

	}
}

?> 