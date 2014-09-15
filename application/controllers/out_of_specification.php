<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Assay extends CI_Controller {

    function __construct() {
        parent::__construct();
    }
    function outofspecification(){
    $assignment_id= $this->uri->segment(3);
    $test_request_id=$this->uri->segment(4);
    $test_type_id=$this->uri->segment(5);
    $status=0; 

    $data['hplc_internal_monograph']=
    $this->db->select('assay_monograph_hplc_internal_method.id AS m,
            assay_monograph_hplc_internal_method.assignment_id,
            assay_monograph_hplc_internal_method.test_request_id,
            assay_monograph_hplc_internal_method.assay_hplc_internal_method_id,
            assay_monograph_hplc_internal_method.monograph')->get_where('assay_monograph_hplc_internal_method', array('id' => $test_type_id))->result_array();
    
    $data['hplc_internal_method']=
    $this->db->select('*')->get_where('assay_hplc_internal_method', array('id' => $test_type_id))->result_array();
    
    $data['hplc_internal_method_reagents']=
    $this->db->select('*')->get_where('assay_hplc_internal_method_reagents', array('assay_hplc_internal_method_id' => $test_type_id))->result_array();

    $data['hplc_internal_method_peak_area_chromatograms']=
    $this->db->select('*')->get_where('assay_hplc_internal_method_peak_area_chromatograms', array('assay_hplc_internal_method_id' => $test_type_id))->result_array();

    $data['hplc_internal_method_chromatograms']=
    $this->db->select('*')->get_where('assay_hplc_internal_method_chromatograms', array('assay_hplc_internal_method_id' => $test_type_id))->result_array();
    
    $data['hplc_internal_method_chromatography_checklist']=
    $this->db->select('*')->get_where('assay_hplc_internal_method_chromatography_checklist', array('assay_hplc_internal_method_id' => $test_type_id))->result_array();

    $data['hplc_internal_method_chromatographic_conditions']=
    $this->db->select('*')->get_where('assay_hplc_internal_method_chromatographic_conditions', array('assay_hplc_internal_method_id' => $test_type_id))->result_array();

    $data['request']=
    $this->db->select('assignment.id AS a,assignment.test_request_id,assignment.user_id,assignment.client_id,assignment.reference_number,assignment.assigner_name,assignment.analyst_name,assignment.sample_issued')->get_where('assignment', array('id' => $assignment_id))->result_array();

    $data['sql_equipment']=
    $this->db->select('equipment_maintenance.description,equipment_maintenance.id_number,equipment_maintenance.status,equipment_maintenance.manufacturer,equipment_maintenance.model')->get_where('equipment_maintenance', array('status' => $status))->result_array();

    $data['sql_standards']=
    $this->db->select('standard_register.reference_number,standard_register.item_description,standard_register.batch_number,standard_register.manufacturer_supplier,standard_register.status')->get_where('standard_register', array('status' => $status))->result_array();

    $data['sql_columns']=
    $this->db->select('columns.column_type,columns.serial_number,columns.column_dimensions,columns.manufacturer,columns.column_number')->get_where('columns', array('status' => $status))->result_array();


    $query=$this->db->select('test_request.id AS tr,test_request.client_id,test_request.test_type_id,test_request.assignment_name,test_request.active_ingredients,test_request.brand_name,test_request.applicant_address,test_request.date_time,test_request.manufacturer_name,test_request.manufacturer_address,test_request.batch_lot_number,
        test_request.sample_source,test_request.expiry_date,test_request.date_manufactured,test_request.quantity_type,
        test_request.sample_source,test_request.laboratory_number,test_request.applicant_name,
        test_request.quantity_remaining,test_request.quantity_submitted,test_request.reference_number,
        test_request.applicant_ref_number,test_request.identification,test_request.friability,
        test_request.dissolution,test_request.assay,test_request.test_specification,
        test_request.disintegration,test_request.ph_alkalinity,test_request.full_monograph,test_request.content_uniformity,
        test_request.microbiology,test_request.request_status')->get_where('test_request', array('id' => $test_request_id));
     

    $results=$query->result_array();
    $data['query']=$results[0];
    $this->load->view('out_of_specification_investigation_view',$data);
    $this->load->helper(array('form'));

    }
   
    function save(){
	   $this->load->model('out_of_specification_model');

        if ($this->input->post('submit')) {
            $this->out_of_specification_model->process();
        }                
	}
    
}