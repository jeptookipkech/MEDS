<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client_Details extends CI_Controller {
    
function client_details()
 {
   parent::__construct();
 }	

function records(){
	$client_id = $this->uri->segment(3);
    
    $this->load->model('client_listmodel');
    
    $data['query'] = 
        $this->client_listmodel->client_requests_get($client_id);
  
        $this->load->view('client_account_details',$data);
    
}
function invoices(){
	$client_id = $this->uri->segment(3);
    $data['client_id']=$this->uri->segment(3);
    
    $this->load->model('client_listmodel');
   
    $data['query'] =
    	$this->client_listmodel->client_invoices($client_id);

        $this->load->view('client_account_invoices',$data);
    
}

}
?>