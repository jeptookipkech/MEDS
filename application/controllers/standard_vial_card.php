<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Standard_Vial_Card extends CI_Controller {
	function __construct()
	{
	  parent::__construct();
	}
	public function index(){
		$id = $this->uri->segment(3);
		/*echo $id;
		die();*/

		//$query=$this->db->select('*');
		//$query=$this->db->from('standard_vial_card,standard_register');
		//$query=$this->db->where('standard_register.id','standard_vial_card.standard_reg_id' );
		//$query=$this->db->where('standard_vial_card.standard_reg_id',$id );

		/*$query=$this->db->select('*');
		$query=$this->db->from('$query=');
		$query=$this->db->join('standard_register', 'standard_register.id = $query=.standard_reg_id',array('standard_reg_id'=>$id));
		
		$query = $this->db->get();
		$results=$query->result_array();

		
		$data['query']=$results[0];*/

		

		$query=$this->db->select('standard_register.id,standard_register.batch_number,standard_register.reference_number,standard_register.certificate_number,standard_register.physical_appearance,standard_register.item_description');
		$query=$this->db->from('standard_register');
		$query=$this->db->select('standard_vial_card.id,standard_vial_card.id_number,standard_vial_card.batch_number AS standard_vial_card_batch_number,standard_vial_card.reference_number,standard_vial_card.units,standard_vial_card.source,standard_vial_card.item,standard_vial_card.location,standard_vial_card.type,standard_vial_card.date_received,standard_vial_card.reorder,standard_vial_card.expiry_date');
		//$query=$this->db->from('standard_vial_card');
		$query=$this->db->get_where('standard_vial_card', array('standard_reg_id'=>$id));
		$results=$query->result_array();		
		$data['query']=$results[0];
		/*
		$sql = "SELECT standard_register.id,standard_register.batch_number,standard_register.reference_number,standard_register.certificate_number,standard_register.physical_appearance,standard_register.item_description 
				FROM standard_register INNER JOIN standard_vial_card ON standard_register.id = standard_vial_card.standard_reg_id 
				AND standard_reg_id = $id";

		$query =$this->db->query($sql);
		
		$data['query'] = $query->result();
		*/
		$this->load->view('assign_vial_card',$data);
	}
	function save(){
		
		$this->load->model('standard_vial_cardmodel');        
	
	if($this->input->post('submit_sv')){
		$this->standard_vial_cardmodel->process();                
	}
		redirect('standard_vial_card_records/Get');
	}

	function assignsave(){
		$id = $this->uri->segment(3);
		
		$this->load->model('standard_vial_cardmodel');        
	
	if($this->input->post('submit_assign')){
		$this->standard_vial_cardmodel->assignprocess($id);                
	}
		redirect('standard_register_records/Get');
	}	
}
?>