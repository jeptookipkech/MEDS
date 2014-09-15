<?php
class Test_Identification extends CI_Controller{
	function Test_Identification(){
		parent::__construct();
	}

	function index(){		
		$data['assignment'] = $this->uri->segment(3);
		$data['test_request'] = $this->uri->segment(4);
		$test_request = $this->uri->segment(4);
		$user_type=6;
		
		$sql = "SELECT * FROM test_request WHERE id =$test_request";
		$query = $this->db->query($sql);
		$result =$query->result_array();
		$data['results']=$result[0];
		
		$data['sql_approved']=
    	$this->db->select('user.fname,user.lname,user.user_type')->get_where('user', array('user_type' => $user_type))->result_array();

		$this->load->view('test_identification_view', $data);
		
	}
	function index_chemical(){		
		$data['assignment'] = $this->uri->segment(3);
		$data['test_request'] = $this->uri->segment(4);
		$test_request = $this->uri->segment(4);
		$status =0;$user_type=6;
		
		$sql = "SELECT * FROM test_request WHERE id =$test_request";
		$query = $this->db->query($sql);
		$result =$query->result_array();
		$data['results']=$result[0];

		$query_e=$this->db->get_where('equipment_maintenance', array('status' =>0));
	    $results_e=$query_e->result_array();	    
	    $data['query_e']=$results_e;

	    $data['sql_standards']=
    	$this->db->select('standard_register.reference_number,standard_register.potency,standard_register.item_description,standard_register.batch_number,standard_register.manufacturer_supplier,standard_register.status')->get_where('standard_register', array('status' => $status))->result_array();
		
		$data['sql_reagents']=
    	$this->db->select('reagents_inventory_record.certificate_number,reagents_inventory_record.item_description,reagents_inventory_record.batch_number,reagents_inventory_record.manufacturer_supplier,reagents_inventory_record.status')->get_where('reagents_inventory_record', array('status' => $status))->result_array();
				
		$data['sql_approved']=
    	$this->db->select('user.fname,user.lname,user.user_type')->get_where('user', array('user_type' => $user_type))->result_array();

		$this->load->view('test_identification_chemical_view', $data);
		
	}
	function index_hplc(){		
		$data['assignment'] = $this->uri->segment(3);
		$data['test_request'] = $this->uri->segment(4);
		$test_request = $this->uri->segment(4);
		$status =0;$user_type=6;
		
		$sql = "SELECT * FROM test_request WHERE id =$test_request";
		$query = $this->db->query($sql);
		$result =$query->result_array();
		$data['results']=$result[0];

		$data['sql_columns']=
    	$this->db->select('columns.column_type,columns.serial_number,columns.column_dimensions,columns.manufacturer,columns.column_number')->get_where('columns', array('status' => $status))->result_array();

		$query_e=$this->db->get_where('equipment_maintenance', array('status' =>0));
	    $results_e=$query_e->result_array();	    
	    $data['query_e']=$results_e;

	    $data['sql_standards']=
    	$this->db->select('standard_register.reference_number,standard_register.potency,standard_register.item_description,standard_register.batch_number,standard_register.manufacturer_supplier,standard_register.status')->get_where('standard_register', array('status' => $status))->result_array();
		
		$data['sql_reagents']=
    	$this->db->select('reagents_inventory_record.certificate_number,reagents_inventory_record.item_description,reagents_inventory_record.batch_number,reagents_inventory_record.manufacturer_supplier,reagents_inventory_record.status')->get_where('reagents_inventory_record', array('status' => $status))->result_array();
		
		$data['sql_approved']=
    	$this->db->select('user.fname,user.lname,user.user_type')->get_where('user', array('user_type' => $user_type))->result_array();
		
		$this->load->view('test_identification_hplc_view', $data);
		
	}
	function index_thin_layer(){		
		$data['assignment'] = $this->uri->segment(3);
		$data['test_request'] = $this->uri->segment(4);
		$test_request = $this->uri->segment(4);
		$status =0;$user_type=6;
		
		$sql = "SELECT * FROM test_request WHERE id =$test_request";
		$query = $this->db->query($sql);
		$result =$query->result_array();
		$data['results']=$result[0];

		$query_e=$this->db->get_where('equipment_maintenance', array('status' =>0));
	    $results_e=$query_e->result_array();	    
	    $data['query_e']=$results_e;

	    $data['sql_standards']=
    	$this->db->select('standard_register.reference_number,standard_register.potency,standard_register.item_description,standard_register.batch_number,standard_register.manufacturer_supplier,standard_register.status')->get_where('standard_register', array('status' => $status))->result_array();
		
		$data['sql_reagents']=
    	$this->db->select('reagents_inventory_record.certificate_number,reagents_inventory_record.item_description,reagents_inventory_record.batch_number,reagents_inventory_record.manufacturer_supplier,reagents_inventory_record.status')->get_where('reagents_inventory_record', array('status' => $status))->result_array();
		
		$data['sql_approved']=
    	$this->db->select('user.fname,user.lname,user.user_type')->get_where('user', array('user_type' => $user_type))->result_array();
		
		$this->load->view('test_identification_thin_layer_view', $data);
		
	}
	function index_uv(){
		$data['assignment'] = $this->uri->segment(3);
		$data['test_request'] = $this->uri->segment(4);
		$test_request = $this->uri->segment(4);
		$status =0;$user_type=6;

		$sql = "SELECT * FROM test_request WHERE id =$test_request";
		$query = $this->db->query($sql);
		$result =$query->result_array();
		$data['results']=$result[0];

		$data['sql_standards']=
    	$this->db->select('standard_register.reference_number,standard_register.potency,standard_register.item_description,standard_register.batch_number,standard_register.manufacturer_supplier,standard_register.status')->get_where('standard_register', array('status' => $status))->result_array();
		
		$data['sql_reagents']=
    	$this->db->select('reagents_inventory_record.certificate_number,reagents_inventory_record.item_description,reagents_inventory_record.batch_number,reagents_inventory_record.manufacturer_supplier,reagents_inventory_record.status')->get_where('reagents_inventory_record', array('status' => $status))->result_array();
		
		$data['sql_approved']=
    	$this->db->select('user.fname,user.lname,user.user_type')->get_where('user', array('user_type' => $user_type))->result_array();

		$this->load->view('test_identification_uv_view', $data);
	}
	function index_infrared(){
		$data['assignment'] = $this->uri->segment(3);
		$data['test_request'] = $this->uri->segment(4);
		$test_request = $this->uri->segment(4);
		$user_type=6;$status=0;

		$sql = "SELECT * FROM test_request WHERE id =$test_request";
		$query = $this->db->query($sql);
		$result =$query->result_array(); 
		$data['results']=$result[0];

	    $data['query_e']=$this->db->get_where('equipment_maintenance', array('status' =>0))->result_array();

		$data['sql_standards']=
    	$this->db->select('standard_register.reference_number,standard_register.potency,standard_register.item_description,standard_register.batch_number,standard_register.manufacturer_supplier,standard_register.status')->get_where('standard_register', array('status' => $status))->result_array();
				
		$data['sql_approved']=
    	$this->db->select('user.fname,user.lname,user.user_type')->get_where('user', array('user_type' => $user_type))->result_array();

		$this->load->view('test_identification_infrared_view', $data);
	}
	
	function worksheet_assay(){
		$this->load->model('test_identification_model');
		if ($this->input->post('save_identification')) {
			$this->test_identification_model->save_identification_assay();
		}		
	}
	function worksheet_uv(){
		$this->load->model('test_identification_model');
		if ($this->input->post('save_uv_identification')) {
			$this->test_identification_model->save_identification_uv();
		}
		//redirect('test/index/'.$assignment.'/'.$test_request);
	}
	function worksheet_infrared(){
		$this->load->model('test_identification_model');
		if ($this->input->post('save_infrared_identification')) {
			$this->test_identification_model->save_identification_infrared();
		}
		//redirect('test/index/'.$assignment.'/'.$test_request);
	}
	function worksheet_tlc(){
		$this->load->model('test_identification_model');
		if ($this->input->post('save_tlc_identification')) {
			$this->test_identification_model->save_identification_tlc();
		}
		//redirect('test/index/'.$assignment.'/'.$test_request);
	}
	function worksheet_thin_layer(){
		$this->load->model('test_identification_thin_layer_model');
		if ($this->input->post('save_thin_layer')) {
			$this->test_identification_thin_layer_model->save_worksheet();
		}
		//redirect('test/index/'.$assignment.'/'.$test_request);
	}
	function worksheet_chemical_method(){
		$this->load->model('test_identification_chemical_model');
		if ($this->input->post('save_chemical_method')) {
			$this->test_identification_chemical_model->save_worksheet();
		}
		//redirect('test/index/'.$assignment.'/'.$test_request);
	}
	function worksheet_hplc(){
		$this->load->model('test_identification_hplc_model');
		if ($this->input->post('save_hplc_method')) {
			$this->test_identification_hplc_model->save_worksheet();
		}
		//redirect('test/index/'.$assignment.'/'.$test_request);
	}
	function view_worksheet(){
		$data['assignment'] = $this->uri->segment(3);
		$data['test_request'] = $this->uri->segment(4);
		$test_request =$this->uri->segment(4);
		$test_id =$this->uri->segment(5);

		$sql = "SELECT * FROM test_request WHERE id =$test_request";
		$query = $this->db->query($sql);
		$result =$query->result_array();

		$data['results']=$result[0];

		$query_e=$this->db->get_where('identification_from_assay', array('test_request' =>$test_request));
	    $results_e=$query_e->result_array();
	    $assay_id = $results_e[0]['id'];
	    $data['query_e']=$results_e[0];

	    $result_monograph = $this->db->get_where('identification_assay_monograph', array('test_request_id' => $test_request))->result_array();
	    $data['query_monograph'] = $result_monograph[0];
		//var_dump($results_e);
		//die;

		$this->load->view('test_identification_view_worksheet', $data);	
	}
	function view_worksheet_uv(){
		$data['assignment'] = $this->uri->segment(3);
		$data['test_request'] = $this->uri->segment(4);
		$test_request =$this->uri->segment(4);

		$sql = "SELECT * FROM test_request WHERE id =$test_request";
		$query = $this->db->query($sql);
		$result =$query->result_array();

		$data['results']=$result[0];

		$query_e=$this->db->get_where('identification_uv', array('test_request' =>$test_request));
	    $results_e=$query_e->result_array();
	    $data['query_e']=$results_e[0];

	    $result_monograph = $this->db->get_where('identification_uv_monograph', array('test_request_id' => $test_request))->result_array();
	    $data['query_monograph'] = $result_monograph[0];
		//var_dump($results_e);
		// die;

		$this->load->view('test_identification_view_worksheet_uv', $data);	
	} 
	function view_worksheet_infrared(){
		$data['assignment'] = $this->uri->segment(3);
		$data['test_request'] = $this->uri->segment(4);
		$test_request =$this->uri->segment(4);

		$sql = "SELECT * FROM test_request WHERE id =$test_request";
		$query = $this->db->query($sql);
		$result =$query->result_array();

		$data['results']=$result[0];

		$query_e=$this->db->get_where('identification_infrared', array('test_request' =>$test_request));
	    $results_e=$query_e->result_array();
	    $data['query_e']=$results_e[0];

	    $result_monograph = $this->db->get_where('identification_infrared_monograph', array('test_request_id' => $test_request))->result_array();
	    $data['query_monograph'] = $result_monograph[0];
		//var_dump($results_e);
		// die;

		$this->load->view('test_identification_view_worksheet_infrared', $data);	
	}
	function view_worksheet_tlc(){
		$data['assignment'] = $this->uri->segment(3);
		$data['test_request'] = $this->uri->segment(4);
		$test_request =$this->uri->segment(4);

		$sql = "SELECT * FROM test_request WHERE id =$test_request";
		$query = $this->db->query($sql);
		$result =$query->result_array();

		$data['results']=$result[0];

		$query_e=$this->db->get_where('tlc', array('test_request' =>$test_request));
	    $results_e=$query_e->result_array();
	    $data['query_e']=$results_e[0];

	    $result_monograph = $this->db->get_where('identification_tlc_monograph', array('test_request_id' => $test_request))->result_array();
	    $data['query_monograph'] = $result_monograph[0];
		//var_dump($results_e);
		// die;

		$this->load->view('test_identification_view_worksheet_tlc', $data);	
	}
	function view_worksheet_hplc(){
		$data['assignment'] = $this->uri->segment(3);
		$data['test_request'] = $this->uri->segment(4);
		$test_request =$this->uri->segment(4);

		$sql = "SELECT * FROM test_request WHERE id =$test_request";
		$query = $this->db->query($sql);
		$result =$query->result_array();

		$data['results']=$result[0];

		$query_e=$this->db->get_where('identification_hplc', array('test_request' =>$test_request));
	    $results_e=$query_e->result_array();
	    $data['query_e']=$results_e[0];

	    $result_monograph = $this->db->get_where('identification_hplc_monograph', array('test_request_id' => $test_request))->result_array();
	    $data['query_monograph'] = $result_monograph[0];
		//var_dump($results_e);
		// die;

		$this->load->view('test_identification_view_worksheet_hplc', $data);	
	}
	function view_worksheet_chemical(){
		$data['assignment'] = $this->uri->segment(3);
		$data['test_request'] = $this->uri->segment(4);
		$test_request =$this->uri->segment(4);

		$sql = "SELECT * FROM test_request WHERE id =$test_request";
		$query = $this->db->query($sql);
		$result =$query->result_array();

		$data['results']=$result[0];

		$query_e=$this->db->get_where('identification_chemical_method', array('test_request' =>$test_request));
	    $results_e=$query_e->result_array();
	    $data['query_e']=$results_e[0];

	    $result_monograph = $this->db->get_where('identification_chemical_method_monograph', array('test_request_id' => $test_request))->result_array();
	    $data['query_monograph'] = $result_monograph[0];
		//var_dump($results_e);
		// die;

		$this->load->view('test_identification_view_worksheet_chemical', $data);	
	}
	function view_worksheet_thin_layer(){
		$data['assignment'] = $this->uri->segment(3);
		$data['test_request'] = $this->uri->segment(4);
		$test_request =$this->uri->segment(4);

		$sql = "SELECT * FROM test_request WHERE id =$test_request";
		$query = $this->db->query($sql);
		$result =$query->result_array();

		$data['results']=$result[0];

		$query_e=$this->db->get_where('identification_thin_layer', array('test_request' =>$test_request));
	    $results_e=$query_e->result_array();
	    $data['query_e']=$results_e[0];

	    $result_monograph = $this->db->get_where('identification_thin_layer_monograph', array('test_request_id' => $test_request))->result_array();
	    $data['query_monograph'] = $result_monograph[0];
		//var_dump($results_e);
		// die;

		$this->load->view('test_identification_view_worksheet_thin_layer', $data);	
	}
	function monograph_assay(){
		$data['assignment'] = $this->uri->segment(3);
		$data['test_request'] = $this->uri->segment(4);
		$test_request = $this->uri->segment(4);

		$sql = "SELECT * FROM test_request WHERE id =$test_request";
		$query = $this->db->query($sql);
		$result =$query->result_array();


		$data['results']=$result[0];
				
		$this->load->view('test_identification_monograph_assay_view',$data);
	}
	function monograph_chemical(){
		$data['assignment'] = $this->uri->segment(3);
		$data['test_request'] = $this->uri->segment(4);
		$test_request = $this->uri->segment(4);

		$sql = "SELECT * FROM test_request WHERE id =$test_request";
		$query = $this->db->query($sql);
		$result =$query->result_array();

		$data['results']=$result[0];
				
		$this->load->view('test_identification_monograph_chemical_view',$data);
	}
	function monograph_hplc(){
		$data['assignment'] = $this->uri->segment(3);
		$data['test_request'] = $this->uri->segment(4);
		$test_request = $this->uri->segment(4);

		$sql = "SELECT * FROM test_request WHERE id =$test_request";
		$query = $this->db->query($sql);
		$result =$query->result_array();

		$data['results']=$result[0];
				
		$this->load->view('test_identification_monograph_hplc_view',$data);
	}
	function monograph_infrared(){
		$data['assignment'] = $this->uri->segment(3);
		$data['test_request'] = $this->uri->segment(4);
		$test_request = $this->uri->segment(4);

		$sql = "SELECT * FROM test_request WHERE id =$test_request";		
		$query = $this->db->query($sql);
		$result =$query->result_array();

		$data['results']=$result[0];
				
		$this->load->view('test_identification_monograph_infrared_view',$data);
	}
	function monograph_thin_layer(){
		$data['assignment'] = $this->uri->segment(3);
		$data['test_request'] = $this->uri->segment(4);
		$test_request = $this->uri->segment(4);

		$sql = "SELECT * FROM test_request WHERE id =$test_request";
		$query = $this->db->query($sql);
		$result =$query->result_array();

		$data['results']=$result[0];
				
		$this->load->view('test_identification_monograph_thin_layer_view',$data);
	}
	function monograph_tlc(){
		$data['assignment'] = $this->uri->segment(3);
		$data['test_request'] = $this->uri->segment(4);
		$test_request = $this->uri->segment(4);

		$sql = "SELECT * FROM test_request WHERE id =$test_request";
		$query = $this->db->query($sql);
		$result =$query->result_array();

		$data['results']=$result[0];
				
		$this->load->view('test_identification_monograph_tlc_view',$data);
	}
	function monograph_uv(){
		$data['assignment'] = $this->uri->segment(3);
		$data['test_request'] = $this->uri->segment(4);
		$test_request = $this->uri->segment(4);

		$sql = "SELECT * FROM test_request WHERE id =$test_request";
		$query = $this->db->query($sql);
		$result =$query->result_array();

		$data['results']=$result[0];
				
		$this->load->view('test_identification_monograph_uv_view',$data);
	}
	function save_chemical_monograph(){	

		$this->load->model('test_identification_chemical_model');

		if ($this->input->post('save_chemical_monograph')) {
			$this->test_identification_chemical_model->save_monograph();
		}
	}
	function save_assay_monograph(){	

		$this->load->model('test_identification_model');

		if ($this->input->post('save_assay_monograph')) {
			$this->test_identification_model->save_assay_monograph();
		}
	}
	function save_hplc_monograph(){	

		$this->load->model('test_identification_hplc_model');

		if ($this->input->post('save_hplc_monograph')) {
			$this->test_identification_hplc_model->save_hplc_monograph();
		}
	}
	function save_thin_layer_monograph(){	

		$this->load->model('test_identification_thin_layer_model');

		if ($this->input->post('save_thin_layer_monograph')) {
			$this->test_identification_thin_layer_model->save_thin_layer_monograph();
		}
	}
	function save_tlc_monograph(){	

		$this->load->model('test_identification_model');

		if ($this->input->post('save_tlc_monograph')) {
			$this->test_identification_model->save_tlc_monograph();
		}
	}
	function save_uv_monograph(){	

		$this->load->model('test_identification_model');

		if ($this->input->post('save_uv_monograph')) {
			$this->test_identification_model->save_uv_monograph();
		}
	}
	function save_infrared_monograph(){	

		$this->load->model('test_identification_model');

		if ($this->input->post('save_infrared_monograph')) {
			$this->test_identification_model->save_infrared_monograph();
		}
	}
}
?>