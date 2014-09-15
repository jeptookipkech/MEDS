<?php
class Calibration_Model extends CI_Model{
 function __construct()
    {
      parent::__construct();
    }
    
 function Update(){
  //Variable Sets
  $id=$this->input->post('id');
  $start=$this->input->post('schedule_start');
  $requirement=$this->input->post('requirement');
  $interval=$this->input->post('interval');
  $specification=$this->input->post('specification');
  
  //Equipment Insertion
  $data= array(
   'id'=>$id,
   'calibration_start'=>$start,
   'calibration_requirement'=>$requirement,
   'interval'=>$interval,
   'calibration_specification'=>$specification
  );
  $this->db->update('equipment_maintenance', $data,array('id' => $id));
  redirect('equipment_maintenance_records/Get');
 }
}
?>
