<?php
class Assignment_Model extends CI_Model{
 function __construct()
 {
  parent::__construct();
 }
 function process(){
  
  $data_query=$this->db->select('new_quantity')->get('test_request')->result();
  $nw_qty= $data_query[0]->new_quantity;

  // echo $nw_qty;
  // die;

if($nw_qty==0 || $nw_qty=="" || $nw_qty=="NULL" ){

  $difference="";
  $reference_number= $this->input->post('reference_number');

  $user_id = $this->input->post('user_id');
  $test_request_id = $this->input->post('tr_id');
  $analyst_name= $this->input->post('analyst');
  $client_id= $this->input->post('client_id');
  $request_type= $this->input->post('request_type');
  $sample_quantity= $this->input->post('sample_quantity');
  $samples_issued= $this->input->post('samples_issued');

 //function that calculates the remainder
  $difference=$sample_quantity-$samples_issued;

 //Data Insertion
  $data = array( 
   'reference_number'=>$reference_number,
   'analyst_name'=>$analyst_name,
   'assigner_name'=>$this->input->post('user_name'),
   'test_request_id'=>$test_request_id,
   'user_id'=>$user_id,
   'client_id'=>$client_id,
   'sample_issued'=>$samples_issued
   );
  
  $data_two = array(
   'test_request_id'=>$test_request_id,
   'assigner_id'=>$user_id
  );
  
  $data_three = array(
   'assignment_name'=>$analyst_name,
   'quantity_remaining'=>$difference,
   'new_quantity'=>$difference
   
  );
  $data_four = array(
   'analyst_name'=>$analyst_name
   
  );
 $this->db->insert('assignment',$data);
 $this->db->update('user', $data_two,array('username' => $analyst_name));
 $this->db->update('test_request', $data_three,array('id' => $test_request_id));
 $this->db->update('test', $data_four,array('test_request_id' => $test_request_id));
}else{

  $difference="";
  $reference_number= $this->input->post('reference_number');

  $user_id = $this->input->post('user_id');
  $test_request_id = $this->input->post('tr_id');
  $analyst_name= $this->input->post('analyst');
  $client_id= $this->input->post('client_id');
  $request_type= $this->input->post('request_type');
  $sample_quantity= $this->input->post('sample_quantity');
  $samples_issued= $this->input->post('samples_issued');

 //function that calculates the remainder
  $difference=$nw_qty-$samples_issued;

 //Data Insertion
  $data = array( 
   'reference_number'=>$reference_number,
   'analyst_name'=>$analyst_name,
   'assigner_name'=>$this->input->post('user_name'),
   'test_request_id'=>$test_request_id,
   'user_id'=>$user_id,
   'client_id'=>$client_id,
   'sample_issued'=>$samples_issued
   );
  
  $data_two = array(
   'test_request_id'=>$test_request_id,
   'assigner_id'=>$user_id
  );
  
  $data_three = array(
   'assignment_name'=>$analyst_name,
   'quantity_remaining'=>$difference,
   'new_quantity'=>$difference
   
  );
  $data_four = array(
   'analyst_name'=>$analyst_name
   
  );
 $this->db->insert('assignment',$data);
 $this->db->update('user', $data_two,array('username' => $analyst_name));
 $this->db->update('test_request', $data_three,array('id' => $test_request_id));
 $this->db->update('test', $data_four,array('test_request_id' => $test_request_id));
 }
}
}
?>
