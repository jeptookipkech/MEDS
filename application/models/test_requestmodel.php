<?php
class Test_Requestmodel extends CI_Model{
 function __construct()
 {
  parent::__construct();
 }
 function process(){
  $test_req=$this->input->post('test_req');
  $user_type_id=$this->input->post('id');
  
  // $data=$this->db->select_max('id')->get('client_ref')->result();
  // $e= $data[0]->id;
  // $test_type_id= $e++;
  

  $data=$this->db->select_max('id')->get('client_ref')->result();
  $request_type= 'MED/CL/#'.$data[0]->id;
  //$new_code= 'MED/CL/#'.$data[0]->id;
  $new_code=$applicant_reference_number=$this->input->post('applicant_reference_number');
  $client_id_data=$this->db->select_max('id')->get('client')->result();
  $client_id= $client_id_data[0]->id;
  
  //$old_ref=$this->getRefNo();
  //$old_ref_no=$old_ref[0]->applicant_ref_number;


//Sample Insertion
  $data_two = array(

   'reference_number'=>$this->input->post('reference_number'),
   'active_ingredients'=>$this->input->post('active_ingredients'),
   'manufacturer_name'=>$this->input->post('manufacturer_name'),
   'manufacturer_address'=>$this->input->post('manufacturer_address'),
   'brand_name'=>$this->input->post('brand_name'),
   'marketing_authorization_number'=>$this->input->post('marketing_authorization_number'),
   'batch_lot_number'=>$this->input->post('batch_lot_number'),
   'manufacture_date'=>$this->input->post('date_of_manufacture'),
   'expiry_date'=>$this->input->post('expiry_retest_date'),
   'storage_conditions'=>$this->input->post('storage_conditions'),
   'quantity_submitted'=>$this->input->post('quantity_submitted'),
   'quantity_remaining'=>$this->input->post('quantity_submitted'),
   'applicant_ref_number'=>$this->input->post('applicant_reference_number'),
   'sample_source'=>$this->input->post('sample_source')
   
  );
  $this->db->insert('sample',$data_two);
   
 //Test Reason Insertion
  $data_three = array(
   'test'=>$this->input->post('reason'),
   'specification'=>$this->input->post('specify_text1')
  );
  $this->db->insert('test_reason',$data_three);
  
  //Test Insertion
   //$data_four = array(
   //'test'=>$tests,
   //'specification'=>$this->input->post('specify_text2')
  //);
  //$this->db->insert('test',$data_four);
  
  //Specification Insertion
   $data_five = array(
   'specification'=>$this->input->post('specification'),
   'other'=>$this->input->post('other')
  );
  $this->db->insert('specification',$data_five);
  
  //Authorizer Details Insertion
   $data_six = array( 
   'authorizer_name'=>$this->input->post('authorizing_name'),
   'authorizer_designation'=>$this->input->post('designation')
   
  );
  $this->db->insert('authorizer',$data_six);
  
  //Inspection Insertion
   $data_seven = array(
   'findings_comments'=>$this->input->post('findings_comment'),
  );
   $this->db->insert('inspection',$data_seven); 
  
  //Laboratory Insertion
   $data_eight = array(
   'findings_comments'=>$this->input->post('findings_comment'),
   'received_by'=>$this->input->post('received_by'),
   'date_received'=>$this->input->post('date_received'),
   'authorizer_name'=>$this->input->post('authorizer_name'),
   'date_authorized'=>$this->input->post('date_authorized'),
   'lab_reg_number'=>$this->input->post('lab_reg_number')
  );
  $this->db->insert('laboratory',$data_eight);
 
 
 
 //Test_request Data Insertion
 $this->post();
 //$this->output->enable_profiler();
}

function post(){
  
  $test_req=$this->input->post('test_req');
  $user_type_id=$this->input->post('id');
  
  
 //Client Insertion
  $data_one = array(
   'applicant_name'=>$this->input->post('applicant_name'),
   'applicant_address'=>$this->input->post('applicant_address')
  );
  $this->db->insert('client',$data_one);
  
 $data=$this->db->select_max('id')->get('client_ref')->result();
  $request_type= 'MED/CL/#'.$data[0]->id;
  $new_code=$this->input->post('applicant_reference_number');
  $client_id_data=$this->db->select_max('id')->get('client')->result();
  $client_id= $client_id_data[0]->id;
  
  $data_ntr=$this->db->select_max('id')->get('test_request')->result();
  $test_request_id= $data_ntr[0]->id;
  $test_request_id++;  
 
  //$old_ref=$this->getRefNo();
  //$old_ref_no=$old_ref[0]->applicant_ref_number;
  //
  
$user_id = $this->input->post('user_id');  
$applicant_reference_number=$this->input->post('applicant_reference_number');
$data= $this->db->where('applicant_ref_number',$applicant_reference_number)->get('test_request')->num_rows();

if($data==1){

$assay=$this->input->post('hplc_internal_method');
 
  if($assay='6a'){
    $actual_test=6;
  }
  if($assay='6b'){
    $actual_test=6;
  }

 $data = array(

   'request_type'=>$request_type,
   'client_id'=>$client_id,
   'reference_number'=>$this->input->post('reference_number'),
   'applicant_name'=>$this->input->post('applicant_name'),
   'applicant_address'=>$this->input->post('applicant_address'),
   'active_ingredients'=>$this->input->post('active_ingredients'),
   'manufacturer_name'=>$this->input->post('manufacturer_name'),
   'manufacturer_address'=>$this->input->post('manufacturer_address'),
   'brand_name'=>$this->input->post('brand_name'),
   'marketing_authorization_number'=>$this->input->post('marketing_authorization_number'),
   'batch_lot_number'=>$this->input->post('batch_lot_number'),
   'date_manufactured'=>$this->input->post('date_of_manufacture'),
   'expiry_date'=>$this->input->post('expiry_retest_date'),
   'storage_conditions'=>$this->input->post('storage_conditions'),
   'quantity_submitted'=>$this->input->post('quantity_submitted'),
   'quantity_remaining'=>$this->input->post('quantity_submitted'),
   'quantity_type'=>$this->input->post('quantity_type'),
   'applicant_ref_number'=>$new_code,
   'sample_source'=>$this->input->post('sample_source'),
   'testing_reason'=>$this->input->post('reason'),
   'other_reason'=>$this->input->post('other_reason'),
   'other_test_required'=>$this->input->post('other_test'),
   'other_specification'=>$this->input->post('other_specification'),
   'identification'=>$this->input->post('identification'),
   'dissolution'=>$this->input->post('dissolution'),  
   'friability'=>$this->input->post('friability'),  
   'assay'=>$actual_test,  
   'disintegration'=>$this->input->post('disintegration'),  
   'content_uniformity'=>$this->input->post('content_uniformity'),  
   'ph_alkalinity'=>$this->input->post('ph_alkalinity'), 
   'full_monograph'=>$this->input->post('full_monograph'), 
   'microbiology'=>$this->input->post('microbiology'),    
   'test_specification'=>$this->input->post('specification'),
   'authorizer_name'=>$this->input->post('authorizing_name'),
   'authorizer_designation'=>$this->input->post('designation'),
   'date_authorized'=>$this->input->post('date_authorized'),
   'findings_comments'=>$this->input->post('findings_comment'),
   'received_by'=>$this->input->post('received_by'),
   'date_received'=>$this->input->post('date_received'),
   'laboratory_number'=>$this->input->post('lab_reg_number')
   );
  
  $datab = array(
   'test_request_id'=>$test_request_id, 
   'user_id'=>$user_id,
   'client_id'=>$client_id,
   'identification'=>$this->input->post('identification'),
   'dissolution'=>$this->input->post('dissolution'),  
   'friability'=>$this->input->post('friability'),  
   'assay'=>$this->input->post('assay'),  
   'disintegration'=>$this->input->post('disintegration'),  
   'content_uniformity'=>$this->input->post('content_uniformity'),  
   'ph_alkalinity'=>$this->input->post('ph_alkalinity'), 
   'full_monograph'=>$this->input->post('full_monograph'), 
   'microbiology'=>$this->input->post('microbiology'),
  );
  $this->db->insert('test_request',$data);
  $this->db->insert('test',$datab);
 


}else{
$data = array(
   'request_type'=>$request_type, 
   'client_id'=>$client_id,
   'reference_number'=>$this->input->post('reference_number'),
   'applicant_name'=>$this->input->post('applicant_name'),
   'applicant_address'=>$this->input->post('applicant_address'),
   'active_ingredients'=>$this->input->post('active_ingredients'),
   'manufacturer_name'=>$this->input->post('manufacturer_name'),
   'manufacturer_address'=>$this->input->post('manufacturer_address'),
   'brand_name'=>$this->input->post('brand_name'),
   'marketing_authorization_number'=>$this->input->post('marketing_authorization_number'),
   'batch_lot_number'=>$this->input->post('batch_lot_number'),
   'date_manufactured'=>$this->input->post('date_of_manufacture'),
   'expiry_date'=>$this->input->post('expiry_retest_date'),
   'storage_conditions'=>$this->input->post('storage_conditions'),
   'quantity_submitted'=>$this->input->post('quantity_submitted'),
   'quantity_remaining'=>$this->input->post('quantity_submitted'),
   'quantity_type'=>$this->input->post('quantity_type'),
   'applicant_ref_number'=>$this->input->post('applicant_reference_number'),
   'sample_source'=>$this->input->post('sample_source'),
   'testing_reason'=>$this->input->post('reason'),
   'other_reason'=>$this->input->post('other_reason'),
   'other_test_required'=>$this->input->post('other_test'),
   'other_specification'=>$this->input->post('other_specification'),
   'identification'=>$this->input->post('identification'),
   'dissolution'=>$this->input->post('dissolution'),  
   'friability'=>$this->input->post('friability'),  
   'assay'=>$actual_test,  
   'disintegration'=>$this->input->post('disintegration'),  
   'content_uniformity'=>$this->input->post('content_uniformity'),  
   'ph_alkalinity'=>$this->input->post('ph_alkalinity'), 
   'full_monograph'=>$this->input->post('full_monograph'), 
   'microbiology'=>$this->input->post('microbiology'),      
   'test_specification'=>$this->input->post('specification'),
   'authorizer_name'=>$this->input->post('authorizing_name'),
   'authorizer_designation'=>$this->input->post('designation'),
   'date_authorized'=>$this->input->post('date_authorized'),
   'findings_comments'=>$this->input->post('findings_comment'),
   'received_by'=>$this->input->post('received_by'),
   'date_received'=>$this->input->post('date_received'),
   'laboratory_number'=>$this->input->post('lab_reg_number')
   );

  $datab = array(
   'test_request_id'=>$test_request_id, 
   'user_id'=>$user_id,
   'client_id'=>$client_id,
   'identification'=>$this->input->post('identification'),
   'dissolution'=>$this->input->post('dissolution'),  
   'friability'=>$this->input->post('friability'),  
   'assay'=>$this->input->post('assay'),  
   'disintegration'=>$this->input->post('disintegration'),  
   'content_uniformity'=>$this->input->post('content_uniformity'),  
   'ph_alkalinity'=>$this->input->post('ph_alkalinity'), 
   'full_monograph'=>$this->input->post('full_monograph'), 
   'microbiology'=>$this->input->post('microbiology'),
  );
  $this->db->insert('test_request',$data);
  $this->db->insert('test',$datab);

 if($this->getClient($client_id)==1){
  echo '';
 }else{ 
  $data_client = array(
   'client_id'=>$client_id,
   'client_ref_no'=>$new_code


   );
  $this->db->insert('client_ref',$data_client);
 }
}
redirect('test_request_list/GetA/'.$test_req.'/'.$user_type_id);
}


function getClient(){
 $applicant_reference_number=$this->input->post('applicant_reference_number');
$data= $this->db->where('client_ref_no',$applicant_reference_number)->get('client_ref')->num_rows();
if($data=='1'){
 return 1;
}else{
 return 0;
}
}

 function getRefNo(){
 $applicant_reference_number=$this->input->post('applicant_reference_number');
$data= $this->db->select('applicant_ref_number')->where('applicant_ref_number',$applicant_reference_number)->group_by('applicant_ref_number')->get('test_request')->result();
return $data;

}

}
?>
