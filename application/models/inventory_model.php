<?php
class Inventory_model extends CI_Model{
 function __construct()
    {
      parent::__construct();
    }
    
 function process($item_name, $id){
    
  //Variable Sets
  $requisition=$this->input->post('requisition');
  $lpo=$this->input->post('lpo');
  $received_by=$this->input->post('received_by');
  $issued_by=$this->input->post('issued_by');
  $quantity_issued=$this->input->post('quantity_issued');
  $balance=$this->input->post('balance');
  $svc_id=$this->input->post('id');
 
  
  //Data Insertion
$data= array(
   'requisition'=>$requisition,
   'lpo'=>$lpo,
   'received_by'=>$received_by,
   'issued_by'=>$issued_by,
   'balance'=>$balance,
   'quantity_issued'=>$quantity_issued,
   'reagent_id'=>$svc_id,
   'reagent_name'=>$item_name
  );
  $this->db->insert('inventory',$data);

$data_b= array(
   'quantity'=>$balance
   
  );
  $this->db->update('reagents_inventory_record',$data_b, array('id' => $id));
  
  
 }
 function getDetails($id){
    $sql = "SELECT quantity FROM reagents_inventory_record WHERE id =$id";
    $query=$this->db->query($sql);          
    return $query->result();




 }
}
?>
