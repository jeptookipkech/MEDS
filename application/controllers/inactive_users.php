<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inactive_Users extends CI_Controller {
    
function Inactivated_Users()
 {
   parent::__construct();
 }	

function Get(){
    $this->load->model('inactive_accounts_listmodel');
    
    $data['query'] = 
        $this->inactive_accounts_listmodel->inactive_accounts_list_get();
	
        $this->load->view('inactive_user_account_list',$data);
    
}
}
?>