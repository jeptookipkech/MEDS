<?php
class Update_Equipment_Maintenance_Recordmodel extends CI_Model {
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
    'serial_number'=>$this->input->post('serial_number'),
    'model'=>$this->input->post('model'),
    'location'=>$this->input->post('location'),
    'status'=>$this->input->post('status'),
    'maintenance_requirement'=>$this->input->post('maintenance_requirement'),
    'comments'=>$this->input->post('comments'),
    'who'=>$this->input->post('user')
    
    );
    $this->db->update('equipment_maintenance', $new_data,array('id' => $id));
    
    redirect('equipment_maintenance_records/Get');
}
}
?>