<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class View_Equipment_Maintenance_Logs extends CI_Controller {
    
function View_Equipment_Maintenance_Logs()
 {
   parent::__construct();
 }	

function Logs(){
    $id = $this->uri->segment(3);

    $this->load->model('equipment_maintenance_log_listmodel');
    $this->equipment_maintenance_log_listmodel->log_list_get($id);    
}
}
?>