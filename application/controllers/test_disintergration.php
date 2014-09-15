<?php
class Test_Disintergration extends CI_Controller{

	public function Test_Disintergration(){
		parent::__construct();
	}
	function index(){
		$data['assignment'] = $this->uri->segment(3);
		$data['test_request'] = $this->uri->segment(4);
		$test_request = $this->uri->segment(4);

		$sql = "SELECT * FROM test_request WHERE id =$test_request";
		$query = $this->db->query($sql);
		$result =$query->result_array();

		$data['results']=$result[0];

		$query_e=$this->db->get_where('equipment_maintenance', array('status' =>0));
	    $results_e=$query_e->result_array();	    
	    $data['query_e']=$results_e;
				
		$this->load->view('test_disintergration_view',$data);

	}

	function worksheet(){
		$this->load->model('test_disintergration_model');
		
		if ($this->input->post('save_disintergration')) {
		$this->test_disintergration_model->save_worksheet();
		}
	}
	function monograph(){
		$data['assignment'] = $this->uri->segment(3);
		$data['test_request'] = $this->uri->segment(4);
		$test_request = $this->uri->segment(4);

		$sql = "SELECT * FROM test_request WHERE id =$test_request";
		$query = $this->db->query($sql);
		$result =$query->result_array();

		$data['results']=$result[0];
				
		$this->load->view('test_disintergration_monograph_view',$data);
	}
	function save_monograph(){	

		$this->load->model('test_disintergration_model');

		if ($this->input->post('save_vs_monograph')) {
			$this->test_disintergration_model->save_monograph();
		}
	}
	function view_worksheet(){
		$data['assignment'] = $this->uri->segment(3);
		$data['test_request'] = $this->uri->segment(4);
		$test_request =$this->uri->segment(4);

		$sql = "SELECT * FROM test_request WHERE id =$test_request";
		$query = $this->db->query($sql);
		$result =$query->result_array();

		$data['results']=$result[0];

		$query_e=$this->db->get_where('disintegration', array('test_request' =>$test_request));
	    $results_e=$query_e->result_array();
	    $data['query_e']=$results_e[0];

	    $result_monograph = $this->db->get_where('disintegration_monograph', array('test_request_id' => $test_request))->result_array();
	    $data['query_monograph'] = $result_monograph[0];
		//var_dump($results_e);
		// die;

		$this->load->view('test_disintergration_view_worksheet', $data);	
	}	
}
?>