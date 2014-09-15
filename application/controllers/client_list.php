<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client_List extends CI_Controller {
    
  function Client_List()
   {
     parent::__construct();
   }	
  
  function Get(){
      $this->load->model('client_listmodel');
      
      $data['query'] = 
      $this->client_listmodel->client_list_get();
      
      $this->load->view('client_list_view',$data);
      
  }
  function logs(){
    
    $id = $this->uri->segment(3);    
    $this->load->model('client_log_model');
    
    $data['query'] = 
      $this->client_log_model->client_log_list_get($id);
     
      
  }
}
?>