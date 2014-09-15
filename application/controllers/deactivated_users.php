<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Deactivated_Users extends CI_Controller {
    
function Deactivated_Users()
 {
   parent::__construct();
 }	

function Get(){
    $this->load->model('deactivated_accounts_listmodel');
    
    $data['query'] = 
        $this->deactivated_accounts_listmodel->deactivated_accounts_list_get();
	
        $this->load->view('deactivated_user_account_list',$data);
    
}
}
?>