<?php
class Complaints_Model extends CI_Model{
 function __construct(){

      parent::__construct();
    }
    
 function process(){
  
  //Variable Sets
 
  $ref_no=$this->input->post('ref_no');
  $client_name=$this->input->post('client_name');
  $received_from=$this->input->post('received_from');
  $address=$this->input->post('address');  
  $telephone_no=$this->input->post('telephone_no');
  $email=$this->input->post('email');
  $order_ref_no=$this->input->post('order_ref_no');
  $nature=$this->input->post('complaint_nature');
  $details=$this->input->post('complaint_details');
  $user=$this->input->post('user');
    
  //Data Insertion
  $data= array(
   
    
   'ref_no'=>$ref_no,
   'client_name'=>$client_name,
   'received_by'=>$received_from,
   'address'=>$address,   
   'telephone_no'=>$telephone_no,
   'email'=>$email,
   'order_ref_no'=>$order_ref_no,
   'complaint_nature'=>$nature,
   'complaint_details'=>$details,
   'who'=>$user,
   
  );
  $this->db->insert('complaints',$data);
  redirect('complaints_list/get_unassigned/');
 }

}
?>
