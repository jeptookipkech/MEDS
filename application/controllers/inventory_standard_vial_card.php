<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inventory_Standard_Vial_Card extends CI_Controller {
function __construct()
 {
   parent::__construct();
 }
function index(){
         $data['id']=$id=$this->uri->segment(3);
         //echo $id;
        }

function save(){

    $svc_id = $this->input->post('id');
    $item_name = $this->input->post('item_name');
	$this->load->model('inventory_svc_model');        
	
	if($this->input->post('submit_i')){
		
        $this->inventory_svc_model->process($item_name);
	
	}
	redirect('inventory_standard_vial_card_record/Get/'.$svc_id);
	}	
}
?>