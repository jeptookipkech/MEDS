<?php
class Get_Details extends CI_Model{
 function Get_Details(){
   parent::__construct();
 }

function details($cid){
 $approved_id=1;
 $new_data = array(
  
  'responsible_person'=>$this->input->post('responsible_person'),
  'action_taken'=>$this->input->post('action_taken'),
  'investigated_by'=>$this->input->post('investigated_by'),
  'status'=>$this->input->post('status'),
  'approved'=>$approved_id
 );

 $this->db->update('complaints', $new_data,array('cid' => $cid));
 redirect( 'complaints_list/records');

 }
}
?>