<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Standard_Register_Log extends CI_Controller {
    
function Standard_Register_Log()
 {
   parent::__construct();
 }	

function Logs(){
    $id = $this->uri->segment(3);

    $this->load->model('standard_register_logmodel');
    $this->standard_register_logmodel->standard_register_logs_get($id);    
}
}
?>