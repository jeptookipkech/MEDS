<?php
class Maintenance_Model extends CI_Model{
 function __construct(){
      parent::__construct();
 }
 
 function Update(){
 
  //Variable Sets
  $id=$this->input->post('id');
  $start=$this->input->post('maintenance_schedule_start');
  $maintenance_requirement=$this->input->post('maintenance_requirement');
  $interval=$this->input->post('maintenance_interval');
  $specification=$this->input->post('maintenance_specification');
  $comments=$this->input->post('comments');
  $next_date=$this->input->post('next_maintenance_schedule_start');
  $status=0;
  //Equipment Insertion
  $data= array(
   'id'=>$id,
   'maintenance_start'=>$start,
   'maintenance_requirement'=>$maintenance_requirement,
   'interval_start'=>$interval,
   'specification'=>$specification,
   'comments'=>$comments,
   'status'=>$status
  
  );
 
  $data_two= array(
   'equipment_maintenance_id'=>$id,
   'start_date'=>$start,
   'requirement'=>$maintenance_requirement,
   'interval'=>$interval,
   'specification'=>$specification,
   'comments'=>$comments,
   'next_date'=>$next_date
  );
  $this->db->update('equipment_maintenance', $data,array('id' => $id));
   $this->db->insert('maintenance',$data_two);
  redirect('maintenance/index/'.$id);
 }
 function maintenanceoutoftolerance(){
 
  //Variable Sets
  $id=$this->input->post('id');
  $out_id=$this->input->post('out_id');
  $start=$this->input->post('maintenance_schedule_start');
  $maintenance_requirement=$this->input->post('maintenance_requirement');
  $interval=$this->input->post('maintenance_interval');
  $specification=$this->input->post('maintenance_specification');
  $comments=$this->input->post('comments');
  $next_date=$this->input->post('next_maintenance_schedule_start');
  $status=0;
  //Equipment Insertion
  $data= array(
   'id'=>$id,
   'maintenance_start'=>$start,
   'maintenance_requirement'=>$maintenance_requirement,
   'interval_start'=>$interval,
   'specification'=>$specification,
   'comments'=>$comments,
   'status'=>$status
  
  );
 
  $data_two= array(
   'equipment_maintenance_id'=>$id,
   'out_id'=>$out_id,
   'start_date'=>$start,
   'requirement'=>$maintenance_requirement,
   'interval'=>$interval,
   'specification'=>$specification,
   'comments'=>$comments,
   'next_date'=>$next_date
  );
  $this->db->update('equipment_maintenance', $data,array('id' => $id));
   $this->db->insert('maintenance',$data_two);
  redirect('maintenance/index/'.$id);
 }
 
 function calibrationoutoftolerance(){
 
  //Variable Sets
  $id=$this->input->post('id');
  $out_id=$this->input->post('out_id');
  $start=$this->input->post('maintenance_schedule_start');
  $maintenance_requirement=$this->input->post('maintenance_requirement');
  $interval=$this->input->post('maintenance_interval');
  $specification=$this->input->post('maintenance_specification');
  $comments=$this->input->post('comments');
  $next_date=$this->input->post('next_maintenance_schedule_start');
  $status=0;
  //Equipment Insertion
  $data= array(
   'id'=>$id,
   'maintenance_start'=>$start,
   'maintenance_requirement'=>$maintenance_requirement,
   'interval_start'=>$interval,
   'specification'=>$specification,
   'comments'=>$comments,
   'status'=>$status
  
  );
 
  $data_two= array(
   'c_equipment_maintenance_id'=>$id,
   'c_out_id'=>$out_id,
   'c_start_date'=>$start,
   'c_requirement'=>$maintenance_requirement,
   'c_interval'=>$interval,
   'c_specification'=>$specification,
   'c_comments'=>$comments,
   'c_next_date'=>$next_date
  );
  $this->db->update('equipment_maintenance', $data,array('id' => $id));
   $this->db->insert('maintenance',$data_two);
  redirect('maintenance/index/'.$id);
 }
 
 function Calibration(){
  //Variable Sets
 
  $id=$this->input->post('id');
  $start=$this->input->post('calibration_schedule_start');
  $calibration_requirement=$this->input->post('calibration_requirement');
  $interval=$this->input->post('calibration_interval');
  $specification=$this->input->post('calibration_specification');
  $comments=$this->input->post('comments');
  $next_date=$this->input->post('next_calibration_schedule_start');
  

  //Equipment Insertion
  $data= array(
   'id'=>$id,
   'calibration_start'=>$start,
   'calibration_requirement'=>$calibration_requirement,
   'calibration_interval_start'=>$interval,
   'calibration_specification'=>$specification,
   'comments'=>$comments,
   'status'=>$status
   
  );
  
  $data_two= array(
   'c_equipment_maintenance_id'=>$id,
   'c_start_date'=>$start,
   'c_next_date'=>$next_date,
   'c_requirement'=>$calibration_requirement,
   'c_interval'=>$interval,
   'c_specification'=>$specification,
   'c_comments'=>$comments
  );
  $this->db->update('equipment_maintenance', $data,array('id' => $id));
  $this->db->insert('calibration',$data_two);
  redirect('maintenance/index/'.$id);
 }

}
?>
