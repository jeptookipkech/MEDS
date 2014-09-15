<?php
class Update_Requestmodel extends CI_Model {
// model constructor function
function __construct() {
    parent::__construct(); // call parent constructor
    $this->load->database();
}


function Update($trid){
        $test_request_id= $trid;
        // $user_type_id = $utid;

        $t=$this->input->post('test');
        $tests=implode(',',$t);

    $new_data = array(
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
        'applicant_ref_number'=>$this->input->post('applicant_reference_number'),
        'sample_source'=>$this->input->post('sample_source'),
        'testing_reason'=>$this->input->post('reason'),
        'other_reason'=>$this->input->post('other_reason'),
        'test_required'=>$tests,
        'other_test_required'=>$this->input->post('other_test'),
        'test_specification'=>$this->input->post('specification'),
        'other_specification'=>$this->input->post('other_specification'),
        'authorizer_designation'=>$this->input->post('designation'),
        'authorizer_name'=>$this->input->post('authorizer_name'),
        'authorizer_designation'=>$this->input->post('authorizer_designation'),
        'laboratory_number'=>$this->input->post('laboratory_number'),
        'findings_comments'=>$this->input->post('findings_comments'),
        'received_by'=>$this->input->post('received_by'),
        'date_authorized'=>$this->input->post('date_authorized'),
        'date_received'=>$this->input->post('date_received')
        
    );
    $this->db->update('test_request', $new_data,array('id' => $test_request_id));
    
    redirect('home');
}
}
?>