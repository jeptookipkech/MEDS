<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Deactivated_Client_List extends CI_Controller {
    
function Deactivated_Client_List()
 {
   parent::__construct();
 }	

function Get(){
    $this->load->model('deactivated_client_listmodel');
    
    $data['query'] = 
        $this->deactivated_client_listmodel->deactivated_client_list_get();
	
        $this->load->view('deactivated_client_list',$data);
    
}
}
?>