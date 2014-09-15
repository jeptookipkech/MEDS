<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Issue extends CI_Controller {
function __construct()
 {
   parent::__construct();
 }
function index(){
         $data['id']=$id=$this->uri->segment(3);
         $data['item_name']=$id=$this->uri->segment(4);

	$this->load->view('issue_form',$data);
        }

function save(){
        $reagent_id=$this->uri->segment(3);
        $item_name=$this->uri->segment(4);
        
        
        $this->db->select('id');
        $results=$this->db->get('inventory',array('reagent_id'=> $reagent_id)); 
        $results=$results->result_array();
         
        /*echo "<pre>";
        print_r($results);
        echo "</pre>";
        die();
        */
    
        $reagent_id = $this->input->post('id');
        $item_name = $this->input->post('item_name');
	$this->load->model('issue_model');
        
        
	
	if($this->input->post('submit_i')){
		$this->issue_model->process($item_name);
	
	}
	redirect('inventory_record/Get/'.$reagent_id.'/'.$item_name);
	}	
}
?>