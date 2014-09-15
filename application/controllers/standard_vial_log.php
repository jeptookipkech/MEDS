<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Standard_Vial_Log extends CI_Controller {
    
function Standard_Vial_Log()
 {
   parent::__construct();
 }	

function Logs(){
    $id = $this->uri->segment(3);

    $this->load->model('standard_vial_log_listmodel');
    $this->standard_vial_log_listmodel->standard_vial_log_list_get($id);    
}
}
?>