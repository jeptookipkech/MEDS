<?php
class Calibration_Requirementlistmodel extends CI_Model{
 function __construct()
    {
      parent::__construct();
    }
    
 function process(){
  //Variable Sets
  $id=$this->input->post('id_number');
  $description=$this->input->post('description');
  $manufacturer=$this->input->post('manufacturer');
  $model=$this->input->post('model');
  $ser=$this->input->post('serial_number');
  $calib_req=$this->input->post('calibration_verification_requirement');
  $calid_fre=$this->input->post('calibration_verification_frequency');
  
  //Data Insertion
  $data= array(
   'id_number'=>$id,
   'description'=>$description,
   'manufacturer'=>$manufacturer,
   'model'=>$model,
   'serial_number'=>$ser,
   'calibration_verification_req'=>$calib_req,
   'calibration_verification_freq'=>$calid_fre
  );
  $this->db->insert('cv_requirement_list',$data);
  return $this->db->affected_rows();
 }
}
?>
