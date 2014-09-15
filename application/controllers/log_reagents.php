<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Log_Reagents extends CI_Controller {
    
function Log_Reagents()
 {
   parent::__construct();
 }	

function Logs(){
    $id = $this->uri->segment(3);

    $this->load->model('log_reagents_listmodel');
    $this->log_reagents_listmodel->log_reagents_list_get($id);    
}
}
?>