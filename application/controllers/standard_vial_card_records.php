<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Standard_Vial_Card_Records extends CI_Controller {
	function __construct()
	{
	  parent::__construct();
	}
function index(){
		$id = $this->uri->segment(3);
		
		$query=$this->db->select('*');
		$query=$this->db->from('standard_vial_card');
		$query=$this->db->get_where('standard_register', array('standard_register.id'=>$id));
		$results=$query->result_array();		
		$data['query']=$results[0];
		
		//var_dump($results);
		$this->load->view('standard_vial_card_form', $data);
	}	
	
function GeTAll(){
        
        $this->load->model('standard_vial_cardrecordsmodel');
	
        $data['query'] = 
        $this->standard_vial_cardrecordsmodel->standard_vial_list_getall();
	
        $this->load->view('standard_vial_card_records',$data);
    
    }
function Get(){
	$this->load->model('standard_vial_cardrecordsmodel');
    
	$data['query'] = 
        $this->standard_vial_cardrecordsmodel->standard_vial_list_get();
	
        $this->load->view('standard_vial_card_records',$data);
    
}

function getExhausted (){
	$this->load->model('standard_vial_cardrecordsmodel');
	
	$data['query'] = 
    $this->standard_vial_cardrecordsmodel->pending();
    $this->load->view('standard_vial_card_records',$data);
}
function getDamaged(){
	$this->load->model('standard_vial_cardrecordsmodel');
	
	$data['query'] = 
    $this->standard_vial_cardrecordsmodel->damaged();
    $this->load->view('standard_vial_card_records',$data);
}
function getExpired(){
	$this->load->model('standard_vial_cardrecordsmodel');

	$data['query'] = 
    $this->standard_vial_cardrecordsmodel->expired();
    $this->load->view('standard_vial_card_records',$data);
}


}
?>