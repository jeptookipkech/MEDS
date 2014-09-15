<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reagents_Inventory extends CI_Controller {
function __construct()
 {
   parent::__construct();
 }
function index(){
	$this->load->view('reagents_inventory_record_form');
        }

function save(){
	$this->load->model('reagents_inventorymodel');        
	
	if($this->input->post('submit')){
		$this->reagents_inventorymodel->process();
	
	}
	redirect('reagents_inventory_record/Get');
	}	
}
?>