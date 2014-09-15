<?php
class Update_Calibration_Requirement_Recordmodel extends CI_Model {
// model constructor function
function __construct() {
    parent::__construct(); // call parent constructor
    $this->load->database();
}


function Update($id)
{
    $new_data = array(
    'id_number'=>$this->input->post('id_number'),
    'description'=>$this->input->post('description'),
    'manufacturer'=>$this->input->post('manufacturer'),
    'model'=>$this->input->post('model'),
    'serial_number'=>$this->input->post('serial_number'),
    'calibration_verification_req'=>$this->input->post('calibration_verification_requirement'),
    'calibration_verification_freq'=>$this->input->post('calibration_verification_frequency')
    );
    $this->db->update('cv_requirement_list', $new_data,array('id' => $id));
    
    redirect('calibration_requirement_records/Get');
}
}
?>