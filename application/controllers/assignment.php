<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Assignment extends CI_Controller {
function __construct()
 {
   parent::__construct();
 }
function index(){
    $id= $this->uri->segment(3);
    $type_id= 5;
    
    //$data=array();
    //$this->load->database();
    
    //$query=$this->db->select('*');
    //$query=$this->db->get_where('user',array('user_type'=> $type_id));
    //$query = $this->db->get_where('test_request', array('id' => $id));
    //$results=$query->result_array();
    
    $data['request']=
    $this->db->select('test_request.id AS tid,test_request.client_id,test_request.request_type,test_request.quantity_submitted,test_request.quantity_type')->get_where('test_request', array('id' => $id))->result_array();
    $query=$this->db->get_where('user', array('user_type' => $type_id));
    $results=$query->result_array();
    
    $data['query']=$results;
    //var_dump($results);
    //die;
    
    $this->load->view('assignment_form',$data);
    $this->load->helper(array('form'));
}

function save(){
    
    $this->load->model('assignment_model');        
	
    if($this->input->post('submit')){
        $this->assignment_model->process();                
    }
    redirect('test_request_list/GetA');
}
function Get(){
    $this->load->model('new_assignmentmodel');
    
    $data['query'] = 
        $this->new_assignmentmodel->assignment_list_getall();
	
        $this->load->view('assignment_list',$data);
}
}
?>