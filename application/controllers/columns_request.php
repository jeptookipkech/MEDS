<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Columns_Request extends CI_Controller {
function __construct()
 {
   parent::__construct();
   $this->load->model('columns_model');   
 }
function index(){
	$this->load->helper(array('form'));
	$this->load->view('column_request_form');
	//This method will have the credentials validation
	
        }

function save(){
    
    if($this->input->post('submit')){
        
        $this->columns_model->process();
    }
    redirect('columns/Get');
    }
}
?>