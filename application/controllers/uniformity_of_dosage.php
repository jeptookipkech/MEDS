<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Uniformity_of_Dosage extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function unit_single_component_worksheet() {
        
    $assignment_id= $this->uri->segment(3);
    $test_request_id=$this->uri->segment(4);
    

    $data['request']=
     $this->db->select('assignment.id AS a,assignment.test_request_id,assignment.user_id,assignment.client_id,assignment.reference_number,assignment.assigner_name,assignment.analyst_name,assignment.sample_issued')->get_where('assignment', array('id' => $assignment_id))->result_array();

    
    $query=$this->db->select('test_request.id AS tr,test_request.client_id,test_request.assignment_name,test_request.active_ingredients,
    test_request.brand_name,test_request.applicant_address,test_request.date_time,test_request.manufacturer_name,
    test_request.manufacturer_address,test_request.batch_lot_number,test_request.sample_source,test_request.expiry_date,
    test_request.date_manufactured,test_request.quantity_type,test_request.sample_source,test_request.laboratory_number,
    test_request.applicant_name,test_request.quantity_remaining,test_request.quantity_submitted,test_request.reference_number,
    test_request.applicant_ref_number,test_request.identification,test_request.friability,test_request.dissolution,
    test_request.assay,test_request.test_specification,test_request.disintegration,test_request.ph_alkalinity,
    test_request.full_monograph,test_request.content_uniformity,test_request.microbiology,
    test_request.request_status')->get_where('test_request', array('id' => $test_request_id));
    

    $results=$query->result_array();
    $data['query']=$results[0];
    
    
    $this->load->view('uniformity_of_dosage_unit_single_component',$data);
    $this->load->helper(array('form'));
    }

    function uv_single_wavelength_worksheet() {
        
    $assignment_id= $this->uri->segment(3);
    $test_request_id=$this->uri->segment(4);
    $status=0; 

    $data['request']=
    $this->db->select('assignment.id AS a,assignment.test_request_id,assignment.user_id,assignment.client_id,assignment.reference_number,
    assignment.assigner_name,assignment.analyst_name,
    assignment.sample_issued')->get_where('assignment', array('id' => $assignment_id))->result_array();

    $data['sql_equipment']=
    $this->db->select('equipment_maintenance.description,equipment_maintenance.id_number,
    equipment_maintenance.status,equipment_maintenance.manufacturer,
    equipment_maintenance.model')->get_where('equipment_maintenance', array('status' => $status))->result_array();

    $data['sql_standards']=
    $this->db->select('standard_register.reference_number,standard_register.item_description,
    standard_register.batch_number,standard_register.manufacturer_supplier,
    standard_register.status')->get_where('standard_register', array('status' => $status))->result_array();

    $data['sql_columns']=
    $this->db->select('columns.column_type,columns.serial_number,columns.column_dimensions,
    columns.manufacturer,columns.column_number')->get_where('columns', array('status' => $status))->result_array();

    
    $data['uniformity_of_dosage_unit_single_component_uv']=
    $this->db->select('*')->get_where('uniformity_of_dosage_unit_single_component_uv', array('test_request_id' => $test_request_id))->result_array();
    
    $query=$this->db->select('test_request.id AS tr,test_request.client_id,test_request.assignment_name,test_request.active_ingredients,
    test_request.brand_name,test_request.applicant_address,test_request.date_time,test_request.manufacturer_name,
    test_request.manufacturer_address,test_request.batch_lot_number,test_request.sample_source,test_request.expiry_date,
    test_request.date_manufactured,test_request.quantity_type,test_request.sample_source,test_request.laboratory_number,
    test_request.applicant_name,test_request.quantity_remaining,test_request.quantity_submitted,test_request.reference_number,
    test_request.applicant_ref_number,test_request.identification,test_request.friability,test_request.dissolution,
    test_request.assay,test_request.test_specification,test_request.disintegration,test_request.ph_alkalinity,
    test_request.full_monograph,test_request.content_uniformity,test_request.microbiology,
    test_request.request_status')->get_where('test_request', array('id' => $test_request_id));
    

    $results=$query->result_array();
    $data['query']=$results[0];
    
    // var_dump($results);
    // die;
 
    $this->load->view('uniformity_of_dosage_unit_single_component_uv_single_wavelength',$data);
    $this->load->helper(array('form'));
    }

    
    function save(){
	   $this->load->model('uniformity_of_dosage_model');

        if ($this->input->post('submit')) {
            $this->uniformity_of_dosage->process();
        }                
	}
    function uniformity_of_dosage_unit_single_component_monograph(){
       $this->load->model('uniformity_of_dosage_model');

        if ($this->input->post('submit')) {
            $this->uniformity_of_dosage_model->process_monograph();
        }                
    }
    function uniformity_of_dosage_unit_single_component_uv_single_wavelength_monograph(){
       $this->load->model('uniformity_of_dosage_model');

        if ($this->input->post('submit')) {
            $this->uniformity_of_dosage_model->process_monograph();
        }                
    }
    

}