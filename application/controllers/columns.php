<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Columns extends CI_Controller {
    
function Columns()
 {
   parent::__construct();
 }	
function Get(){
    $this->load->model('columns_model');
    
        $data['query'] = 
        $this->columns_model->columns_get();
    
        $this->load->view('columns_list',$data);
    
    }
function GetA(){
        $this->load->model('columns_model');
        
        $data['query']=
        $this->columns_model->columns_get_assigned();
	
        $this->load->view('assigned_columns_list',$data);
    
    }
function GetD(){
    $this->load->model('columns_model');
    
        $data['query'] = 
        $this->columns_model->columns_get_decommissioned();
    
        $this->load->view('decommissioned_columns_list',$data);
    
    }

function issue(){
    $id= $this->uri->segment(3);
     $type_id= 5;

    $data['request']=
    $this->db->select('columns.id AS cid,columns.issue_state,columns.column_type,columns.serial_number,columns.column_dimensions,columns.manufacturer,columns.column_status,columns.column_number,columns.issued_to,columns.assignment_id')->get_where('columns', array('id' => $id))->result_array();
    $query=$this->db->get_where('user', array('user_type' => $type_id));
    $results=$query->result_array();
    
    $data['query']=$results;
    //var_dump($results);
    //die;
    
    $this->load->view('column_issue',$data);
    $this->load->helper(array('form'));
    
    }
    function submit_issue(){
    $this->load->model('columns_model');        
    
    if($this->input->post('submit')){
        $this->columns_model->issue();                
    }
    redirect('columns/GetA');
    
    }
}
?>