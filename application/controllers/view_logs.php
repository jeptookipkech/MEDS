<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class View_Logs extends CI_Controller {
    
function View_Logs()
 {
   parent::__construct();
 }	

function Logs(){
    $id = $this->uri->segment(3);

    $this->load->model('log_listmodel');
    $this->log_listmodel->log_list_get($id);    
}
}
?>