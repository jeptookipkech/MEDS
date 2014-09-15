<?php
class Standard_Vial_Cardmodel extends CI_Model{
 function __construct()
    {
      parent::__construct();
    }
    
 function process(){
  
  //Variable Sets
  
  $id_number=$this->input->post('id_number');
  $item=$this->input->post('item');
  $batch_number=$this->input->post('batch_number');
  $source=$this->input->post('source');
  $units=$this->input->post('units');
  $location=$this->input->post('location');
  $type=$this->input->post('type');
  $expiry_date=$this->input->post('expiry_date');
  $reorder=$this->input->post('reorder');
  $reference_number=$this->input->post('reference_number');
  $received_by=$this->input->post('received_by');
  $balance=$this->input->post('balance');
  $status=$this->input->post('status');

  if ($status ==0) {
     $status = "0";
      }
  if ($status ==1) {
     $status = "1";
      }

  if ($status ==2) {
     $status = "2";
      }
  if ($status ==3) {
     $status = "3";
      }

  
  
  //Data Insertion
  $data= array(
   
   
   
   'id_number'=>$id_number,
   'item'=>$item,
   'batch_number'=>$batch_number,
   'source'=>$source,
   'units'=>$units,
   'location'=>$location,
   'type'=>$type,
   'expiry_date'=>$expiry_date,
   'reorder'=>$reorder,
   'reference_number'=>$reference_number,
   'received_by'=>$received_by,
   'balance'=>$balance,
   'status'=>$status

  );
  $this->db->insert('standard_vial_card',$data);
  
 }
 function assignprocess($id){
  $id;
  //Variable Sets
   
  $id_number=$this->input->post('id_number');
  $item=$this->input->post('item');
  $batch_number=$this->input->post('batch_number');
  $source=$this->input->post('source');
  $units=$this->input->post('units');
  $location=$this->input->post('location');
  $type=$this->input->post('type');
  $expiry_date=$this->input->post('expiry_date');
  $reorder=$this->input->post('reorder');
  $reference_number=$this->input->post('reference_number');
  $received_by=$this->input->post('received_by');
  $balance=$this->input->post('balance');
  
  
  //Data Insertion
  $data= array(
   
   
   'standard_reg_id'=>$id,
   'id_number'=>$id_number,
   'item'=>$item,
   'batch_number'=>$batch_number,
   'source'=>$source,
   'units'=>$units,
   'location'=>$location,
   'type'=>$type,
   'expiry_date'=>$expiry_date,
   'reorder'=>$reorder,
   'reference_number'=>$reference_number,
   'received_by'=>$received_by,
   'balance'=>$balance

  );
  $this->db->insert('standard_vial_card',$data);
  
 }
}
?>
