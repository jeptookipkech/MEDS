<?php
class Karlfisher extends CI_Controller{

	public function karlfisher(){
		parent::__construct();
	}
	function index(){
		$data['assignment'] = $this->uri->segment(3);
		$data['test_request'] = $this->uri->segment(4);
		$test_request = $this->uri->segment(4);
		$status =0;
			
		$query_e=$this->db->get_where('equipment_maintenance', array('status' =>0));
	    $results_e=$query_e->result_array();	    
	    $data['query_e']=$results_e;		

	    $query=$this->db->get_where('test_request', array('id' =>$test_request));
	    $results=$query->result_array();	    
	    $data['results']=$results[0];

	    $data['sql_standards']=
    	$this->db->select('standard_register.reference_number,standard_register.item_description,standard_register.batch_number,standard_register.manufacturer_supplier,standard_register.status')->get_where('standard_register', array('status' => $status))->result_array();

		$this->load->view('test_water_method', $data);
	}
	function index_manufacture_linear(){			
		$this->load->view('test_manufacturer_specification');
	}
	function index_manufacture_precision(){			
		$this->load->view('test_manufacturer_specification_precision');
	}	
	function worksheet(){
	$this->load->model('test_water_method_model');			
	if ($this->input->post('save_water_method')) {
		$this->test_water_method_model->save_worksheet();
		
			}				
	}	
}
?>