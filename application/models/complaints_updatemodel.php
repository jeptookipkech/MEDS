<?php
class Complaints_Updatemodel extends CI_Model{
 function Complaints_Updatemodel(){
   parent::__construct();
 }

function details($cid){
 $approved_id=1;
 $new_data = array(
  
  'ref_no'=>$this->input->post('ref_no'),
  'client_name'=>$this->input->post('client_name'),
  'received_by'=>$this->input->post('received_by'),
  'address'=>$this->input->post('address'),  
  'telephone_no'=>$this->input->post('telephone_no'),
  'email'=>$this->input->post('email'),
  'order_ref_no'=>$this->input->post('order_ref_no'),
  'complaint_nature'=>$this->input->post('complaint_nature'),
  'complaint_details'=>$this->input->post('complaint_details'),
  'responsible_person'=>$this->input->post('responsible_person'),
  'action_taken'=>$this->input->post('action_taken'),
  'who'=>$this->input->post('user'),
  'investigated_by'=>$this->input->post('investigated_by'),
  'approved'=>$this->input->post('approved_id')
 );

 $this->db->update('complaints', $new_data,array('cid' => $cid));
 redirect( 'complaints_list/get_unassigned');

 }
}
?>