<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client_Account extends CI_Controller {
    
function Client_Account()
 {
   parent::__construct();
 }	

function Get(){
    $user=$this->session->userdata;
    $test_request_id=$user['logged_in']['test_request_id'];
    $user_type_id=$user['logged_in']['user_type'];
    $client_id=$user['logged_in']['client_id'];
    
    $this->load->model('client_accountmodel');
 
    $data['query'] = 
        $this->client_accountmodel->client_account_get($client_id);
	
        $this->load->view('client_account_view',$data);
    
}
}
?>