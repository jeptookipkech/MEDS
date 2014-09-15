<?php
Class New_Clientmodel extends CI_Model{
 function __construct()
 {
  parent::__construct();
 }
 function process(){
 
 //Data Insertion
  $data = array(
   
   'applicant_name'=>$this->input->post('applicant_name'),
   'applicant_address'=>$this->input->post('applicant_address'),
   'email'=>$this->input->post('email'),
   'telephone'=>$this->input->post('telephone'),
   'location'=>$this->input->post('location'),
   'status'=>$this->input->post('status')
   
  );
  $this->db->insert('client',$data);
 }
}
?>
