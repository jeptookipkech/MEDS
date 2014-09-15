<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Active_Users extends CI_Controller {
    
function active_Users()
 {
   parent::__construct();
 }	

function Get(){
    $this->load->model('active_accounts_listmodel');
    
    $data['query'] = 
        $this->active_accounts_listmodel->active_accounts_list_get();
	
        $this->load->view('active_user_account_list',$data);
    
}
}
?>