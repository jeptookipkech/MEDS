<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Columns_Log extends CI_Controller {
    
  function Columns_Log(){
     parent::__construct();
   }	

  function Logs(){
      $id = $this->uri->segment(3);
  
      $this->load->model('columns_log_model');
      $this->columns_log_model->column_log_list_get($id);    
  }
}
?>