<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_Client extends CI_Controller {
function __construct()
 {
   parent::__construct();
 }
function index(){
    $this->load->view('new_client_form');
    $this->load->helper(array('form'));
}

function Save(){
    $this->load->model('new_clientmodel');        
	
    if($this->input->post('submit')){
        $this->new_clientmodel->process();                
    }
    redirect('client_list/Get');
    }	
}
?>