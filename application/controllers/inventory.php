<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inventory extends CI_Controller {
function __construct()
 {
   parent::__construct();
 }
function index(){
         $id=$this->uri->segment(3);
         $this->load->model('inventory_model');
         $data ['query']=$this ->inventory_model->getDetails($id);
         $this->load->view('inventory_record_form',$data);

        }

function save(){
        /* 
        echo $id;
        echo $data['item_name'];
        die();

     */
    $id=$this->uri->segment(3);
    $reagent_id = $this->input->post('id');
    $item_name = $this->input->post('item_name');
	$this->load->model('inventory_model');        
	
	if($this->input->post('submit_i')){

		$this->inventory_model->process($item_name,$id);
	
	}
	redirect('inventory_record/Get/'.$reagent_id.'/'.$item_name);
	}	
}
?>