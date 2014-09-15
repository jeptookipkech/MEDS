<?php
class Issue_model extends CI_Model{
 function __construct()
    {
      parent::__construct();
    }
    
 function process($item_name){
    
  //Variable Sets
  $quantity_issued=$this->input->post('quantity_issued');
  $issued_by=$this->input->post('issued_by');
  $issued_to=$this->input->post('issued_to');
  $balance=$this->input->post('balance');
 
  
  //Data Insertion
  $data= array(
   'quantity_issued'=>$quantity_issued,
   'issued_by'=>$issued_by,
   'issued_to'=>$issued_to,
   'balance'=>$balance
   
  );
  $this->db->update('inventory', $data,array('reagent_name' => $item_name));
  
 }
}
?>