<?php
class Full_Monograph extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function worksheet() {
        
    $assignment_id= $this->uri->segment(3);
    $test_request_id=$this->uri->segment(4);

     $data['request']=
     $this->db->select('assignment.id AS a,assignment.test_request_id,assignment.user_id,assignment.client_id,assignment.reference_number,assignment.assigner_name,assignment.analyst_name,assignment.sample_issued')->get_where('assignment', array('id' => $assignment_id))->result_array();

    $query=$this->db->select('test_request.id AS tr,test_request.client_id,test_request.assignment_name,test_request.active_ingredients,test_request.manufacturer_name,test_request.manufacturer_address,test_request.batch_lot_number,
    test_request.sample_source,test_request.expiry_date,test_request.date_manufactured,test_request.quantity_type,test_request.sample_source,test_request.laboratory_number,test_request.applicant_name,
    test_request.quantity_remaining,test_request.quantity_submitted,test_request.applicant_ref_number,test_request.identification,test_request.friability,test_request.dissolution,test_request.assay,test_request.test_specification,
    test_request.disintegration,test_request.ph_alkalinity,test_request.full_monograph,test_request.content_uniformity,test_request.microbiology,test_request.request_status')->get_where('test_request', array('id' => $test_request_id));
    

    $results=$query->result_array();
    $data['query']=$results[0];
    
    $this->load->view('full_monograph_view',$data);
    $this->load->helper(array('form'));
    }
    function save(){
	   $this->load->model('full_monograph_model');

        if ($this->input->post('submit')) {
            $this->full_monograph_model->process();
        }             
	}

}