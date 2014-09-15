<?php
class Test_Identification_Chemical_Model extends CI_Model{

	function Test_Identification_Chemical_Model(){
		parent::__construct();
	}

	function save_worksheet(){
		
		$coa_method_used=$this->input->post('coa_method_used');
		$coa_results=$this->input->post('coa_results');
		$coa_specification=$this->input->post('coa_specification');
		$status =1;
		$test_request=$this->input->post('test_request');
		$assignment=$this->input->post('assignment');
		$test_type='Identification: Chemical Method';
		$analyst= $this->input->post('analyst');
		
		$data =array(			
			
			'chemical_test'=>$this->input->post('chemical_test'),
			'equipment_number'=>$this->input->post('equipment_number'),
			'equipment_make'=>$this->input->post('equipment_make'),
			'sample_container'=>$this->input->post('sample_container'),
			'container'=>$this->input->post('container'),
			'sample_weight'=>$this->input->post('sample_weight'),
			'sample_dilution'=>$this->input->post('sample_dilution'),

			'standard_description'=>$this->input->post('standard_description'),
			'potency'=>$this->input->post('potency'),
			'lot_no'=>$this->input->post('lot_no'),
			'id_no'=>$this->input->post('id_no'),

			'standard_container_2'=>$this->input->post('standard_container_2'),
			'container_2'=>$this->input->post('container_2'),
			'standard_weight_2'=>$this->input->post('standard_weight_2'),

			// 'standard_container_3'=>$this->input->post('standard_container_3'),
			// 'container_3'=>$this->input->post('container_3'),
			// 'standard_weight_3'=>$this->input->post('standard_weight_3'),

			// 'standard_container_4'=>$this->input->post('standard_container_4'),
			// 'container_4'=>$this->input->post('container_4'),
			// 'standard_weight_4'=>$this->input->post('standard_weight_4'),

			// 'standard_container_5'=>$this->input->post('standard_container_5'),
			// 'container_5'=>$this->input->post('container_5'),
			// 'standard_weight_5'=>$this->input->post('standard_weight_5'),

			'standard_dilution'=>$this->input->post('standard_dilution'),

			'reagent_description'=>$this->input->post('reagent_description'),
			'reagent_weight_container_1'=>$this->input->post('reagent_weight_container_1'),
			'reagent_container_1'=>$this->input->post('reagent_container_1'),
			'reagent_weight_1'=>$this->input->post('reagent_weight_1'),
			'reagent_dilution'=>$this->input->post('reagent_dilution'),

			'calculation_mobile'=>$this->input->post('calculation_mobile'),
			'observation'=>$this->input->post('observation'),
			'acceptance_criteria'=>$this->input->post('acceptance_criteria'),
			'results'=>$this->input->post('results'),
			'comment'=>$this->input->post('comment'),
			'test_request'=>$this->input->post('test_request'),
			'assignment'=>$this->input->post('assignment'),
			'status'=>$status,
			
			'choice'=>$this->input->post('choice'),
			'date_done'=>$this->input->post('date_done'),
			'analyst'=>$this->input->post('analyst'),
			'supervisor'=>$this->input->post('supervisor'),
			'date'=>$this->input->post('date'),
			'further_comments'=>$this->input->post('further_comments'),				

			);
		$this->db->insert('identification_chemical_method', $data);

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
		$test_name='Chemical Method';
		$analyst= $this->input->post('analyst');
		$identification_chemical_method_id= 1;


		$data = array(
			'monograph' => $this->input->post('chemical_monograph'),
			'test_request_id' => $this->input->post('test_request'),
			'assignment_id' => $this->input->post('assignment'),
			'test_name' => $test_name,
			'analyst' => $this->input->post('analyst'),
			'identification_chemical_method_id' => $identification_chemical_method_id,


			);
		$this->db->insert('identification_chemical_method_monograph', $data);
		redirect('test/index/'.$assignment.'/'.$test_request);	

	}
}

?> 
