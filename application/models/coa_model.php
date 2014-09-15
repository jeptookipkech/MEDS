<?php
class Coa_Model extends CI_Model{
	function Coa_Model(){
		parent::__construct();
	}

	function process(){
		//The varibles from the view

		$reg_no =$this->input->post('reg_no');
		$request_date = $this->input->post('request_date');
		$test_date= $this->input->post('test_date');
		$product_name= $this->input->post('product_name');
		$client= $this->input->post('client');
		$manufacturer =$this->input->post('manufacturer');
		$label_claim =$this->input->post('label_claim');		
		$batch_no = $this->input->post('batch_no');
		$manufacture_date =$this->input->post('manufacture_date');
		$expiry_date =$this->input->post('expiry_date');
		$appearance =$this->input->post('appearance');
		$test_done =$this->input->post('test_done');
		$method =$this->input->post('method');
		$specification =$this->input->post('specification');
		$results =$this->input->post('results');
		$remarks =$this->input->post('remarks');
		$conclusions =$this->input->post('conclusions');
		$prepared_by =$this->input->post('prepared_by');
		$reviewed_by =$this->input->post('reviewed_by');
		$approved_by =$this->input->post('approved_by');
		

		$data =array(
			'reg_no'=>$reg_no,
			'request_date'=>$request_date,
			'test_date'=>$test_date,
			'product_name'=>$product_name,
			'client'=>$client,
			'manufacturer'=>$manufacturer,
			'label_claim'=>$label_claim,
			'batch_no'=>$batch_no,
			'manufacture_date'=>$manufacture_date,
			'expiry_date'=>$expiry_date,	
			'appearance'=>$appearance,
			'test_done'=>$test_done,
			'method'=>$method,
			'specification'=>$specification,
			'results'=>$results,
			'remarks'=>$remarks,
			'conclusions'=>$conclusions,
			'prepared_by'=>$prepared_by,
			'reviewed_by'=>$reviewed_by,
			'approved_by'=>$approved_by			
			);
		$this->db->insert('coa',$data);
		redirect('coa_list/records');

	}
}

?>