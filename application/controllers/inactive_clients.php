<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inactive_Clients extends CI_Controller {
    
function Inactive_Clients()
 {
   parent::__construct();
 }	

function Get(){
    $this->load->model('inactive_clients_model');
    
    $data['query'] = 
        $this->inactive_clients_model->inactive_clients_list_get();
	
        $this->load->view('inactive_client_list',$data);
    
}
}
?>