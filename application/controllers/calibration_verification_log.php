<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calibration_Verification_Log extends CI_Controller {
    
function Calibration_Verification_Log()
 {
   parent::__construct();
 }	

function Logs(){
    $id = $this->uri->segment(3);

    $this->load->model('calibration_requirement_log_model');
    $this->calibration_requirement_log_model->calibration_verification_log_list_get($id);    
}
}
?>