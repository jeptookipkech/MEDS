<?php
class Content_Uniformity extends CI_Controller {

    function __construct() {
        parent::__construct();
    }
    
    function monograph_content_uniformity_uv_two_components() {
        
    $assignment_id= $this->uri->segment(3);
    $test_request_id=$this->uri->segment(4);

     $data['request']=
     $this->db->select('assignment.id AS a,assignment.test_request_id,assignment.user_id,assignment.client_id,assignment.reference_number,assignment.assigner_name,assignment.analyst_name,assignment.sample_issued')->get_where('assignment', array('id' => $assignment_id))->result_array();

    $query=$this->db->select('test_request.id AS tr,test_request.client_id,test_request.assignment_name,test_request.active_ingredients,test_request.manufacturer_name,test_request.manufacturer_address,test_request.batch_lot_number,
    test_request.sample_source,test_request.expiry_date,test_request.date_manufactured,test_request.quantity_type,test_request.sample_source,test_request.laboratory_number,test_request.applicant_name,
    test_request.quantity_remaining,test_request.quantity_submitted,test_request.reference_number,test_request.applicant_ref_number,test_request.identification,test_request.friability,test_request.dissolution,test_request.assay,test_request.test_specification,
    test_request.disintegration,test_request.ph_alkalinity,test_request.full_monograph,test_request.content_uniformity,test_request.microbiology,test_request.request_status')->get_where('test_request', array('id' => $test_request_id));
    

    $results=$query->result_array();
    $data['query']=$results[0];
    
    $this->load->view('content_uniformity_uv_two_components_monograph_view',$data);
    $this->load->helper(array('form'));
    }
    function uniformity_of_dosage_unit_single_component_uv_single_wavelength() {
        
    $assignment_id= $this->uri->segment(3);
    $test_request_id=$this->uri->segment(4);

     $data['request']=
     $this->db->select('assignment.id AS a,assignment.test_request_id,assignment.user_id,assignment.client_id,assignment.reference_number,assignment.assigner_name,assignment.analyst_name,assignment.sample_issued')->get_where('assignment', array('id' => $assignment_id))->result_array();

    $query=$this->db->select('test_request.id AS tr,test_request.client_id,test_request.assignment_name,test_request.active_ingredients,test_request.manufacturer_name,test_request.manufacturer_address,test_request.batch_lot_number,
    test_request.sample_source,test_request.expiry_date,test_request.date_manufactured,test_request.quantity_type,test_request.sample_source,test_request.laboratory_number,test_request.applicant_name,
    test_request.quantity_remaining,test_request.quantity_submitted,test_request.reference_number,test_request.applicant_ref_number,test_request.identification,test_request.friability,test_request.dissolution,test_request.assay,test_request.test_specification,
    test_request.disintegration,test_request.ph_alkalinity,test_request.full_monograph,test_request.content_uniformity,test_request.microbiology,test_request.request_status')->get_where('test_request', array('id' => $test_request_id));
    

    $results=$query->result_array();
    $data['query']=$results[0];
    
    $this->load->view('uniformity_of_dosage_unit_single_component_uv_single_wavelength_view',$data);
    $this->load->helper(array('form'));
    }
    function monograph_content_uniformity_uv_single_component() {
        
    $assignment_id= $this->uri->segment(3);
    $test_request_id=$this->uri->segment(4);

     $data['request']=
     $this->db->select('assignment.id AS a,assignment.test_request_id,assignment.user_id,assignment.client_id,assignment.reference_number,assignment.assigner_name,assignment.analyst_name,assignment.sample_issued')->get_where('assignment', array('id' => $assignment_id))->result_array();

    $query=$this->db->select('test_request.id AS tr,test_request.client_id,test_request.assignment_name,test_request.active_ingredients,test_request.manufacturer_name,test_request.manufacturer_address,test_request.batch_lot_number,
    test_request.sample_source,test_request.expiry_date,test_request.date_manufactured,test_request.quantity_type,test_request.sample_source,test_request.laboratory_number,test_request.applicant_name,
    test_request.quantity_remaining,test_request.quantity_submitted,test_request.reference_number,test_request.applicant_ref_number,test_request.identification,test_request.friability,test_request.dissolution,test_request.assay,test_request.test_specification,
    test_request.disintegration,test_request.ph_alkalinity,test_request.full_monograph,test_request.content_uniformity,test_request.microbiology,test_request.request_status')->get_where('test_request', array('id' => $test_request_id));
    

    $results=$query->result_array();
    $data['query']=$results[0];
    
    $this->load->view('content_uniformity_uv_single_component_monograph_view',$data);
    $this->load->helper(array('form'));
    }
    function monograph_content_uniformity_titration_single_component() {
        
    $assignment_id= $this->uri->segment(3);
    $test_request_id=$this->uri->segment(4);

     $data['request']=
     $this->db->select('assignment.id AS a,assignment.test_request_id,assignment.user_id,assignment.client_id,assignment.reference_number,assignment.assigner_name,assignment.analyst_name,assignment.sample_issued')->get_where('assignment', array('id' => $assignment_id))->result_array();

    $query=$this->db->select('test_request.id AS tr,test_request.client_id,test_request.assignment_name,test_request.active_ingredients,test_request.manufacturer_name,test_request.manufacturer_address,test_request.batch_lot_number,
    test_request.sample_source,test_request.expiry_date,test_request.date_manufactured,test_request.quantity_type,test_request.sample_source,test_request.laboratory_number,test_request.applicant_name,
    test_request.quantity_remaining,test_request.quantity_submitted,test_request.reference_number,test_request.applicant_ref_number,test_request.identification,test_request.friability,test_request.dissolution,test_request.assay,test_request.test_specification,
    test_request.disintegration,test_request.ph_alkalinity,test_request.full_monograph,test_request.content_uniformity,test_request.microbiology,test_request.request_status')->get_where('test_request', array('id' => $test_request_id));
    

    $results=$query->result_array();
    $data['query']=$results[0];
    
    $this->load->view('content_uniformity_titration_single_component_monograph_view',$data);
    $this->load->helper(array('form'));
    }
    function monograph_content_uniformity_titration_two_components() {
        
    $assignment_id= $this->uri->segment(3);
    $test_request_id=$this->uri->segment(4);

     $data['request']=
     $this->db->select('assignment.id AS a,assignment.test_request_id,assignment.user_id,assignment.client_id,assignment.reference_number,assignment.assigner_name,assignment.analyst_name,assignment.sample_issued')->get_where('assignment', array('id' => $assignment_id))->result_array();

    $query=$this->db->select('test_request.id AS tr,test_request.client_id,test_request.assignment_name,test_request.active_ingredients,test_request.manufacturer_name,test_request.manufacturer_address,test_request.batch_lot_number,
    test_request.sample_source,test_request.expiry_date,test_request.date_manufactured,test_request.quantity_type,test_request.sample_source,test_request.laboratory_number,test_request.applicant_name,
    test_request.quantity_remaining,test_request.quantity_submitted,test_request.reference_number,test_request.applicant_ref_number,test_request.identification,test_request.friability,test_request.dissolution,test_request.assay,test_request.test_specification,
    test_request.disintegration,test_request.ph_alkalinity,test_request.full_monograph,test_request.content_uniformity,test_request.microbiology,test_request.request_status')->get_where('test_request', array('id' => $test_request_id));
    

    $results=$query->result_array();
    $data['query']=$results[0];
    
    $this->load->view('content_uniformity_titration_two_components_monograph_view',$data);
    $this->load->helper(array('form'));
    }
    function monograph_content_uniformity_hplc_single_component() {
        
    $assignment_id= $this->uri->segment(3);
    $test_request_id=$this->uri->segment(4);

     $data['request']=
     $this->db->select('assignment.id AS a,assignment.test_request_id,assignment.user_id,assignment.client_id,assignment.reference_number,assignment.assigner_name,assignment.analyst_name,assignment.sample_issued')->get_where('assignment', array('id' => $assignment_id))->result_array();

    $query=$this->db->select('test_request.id AS tr,test_request.client_id,test_request.assignment_name,test_request.active_ingredients,test_request.manufacturer_name,test_request.manufacturer_address,test_request.batch_lot_number,
    test_request.sample_source,test_request.expiry_date,test_request.date_manufactured,test_request.quantity_type,test_request.sample_source,test_request.laboratory_number,test_request.applicant_name,
    test_request.quantity_remaining,test_request.quantity_submitted,test_request.reference_number,test_request.applicant_ref_number,test_request.identification,test_request.friability,test_request.dissolution,test_request.assay,test_request.test_specification,
    test_request.disintegration,test_request.ph_alkalinity,test_request.full_monograph,test_request.content_uniformity,test_request.microbiology,test_request.request_status')->get_where('test_request', array('id' => $test_request_id));
    

    $results=$query->result_array();
    $data['query']=$results[0];
    
    $this->load->view('content_uniformity_hplc_single_component_monograph_view',$data);
    $this->load->helper(array('form'));
    }
    function monograph_content_uniformity_hplc_two_components() {
        
    $assignment_id= $this->uri->segment(3);
    $test_request_id=$this->uri->segment(4);

     $data['request']=
     $this->db->select('assignment.id AS a,assignment.test_request_id,assignment.user_id,assignment.client_id,assignment.reference_number,assignment.assigner_name,assignment.analyst_name,assignment.sample_issued')->get_where('assignment', array('id' => $assignment_id))->result_array();

    $query=$this->db->select('test_request.id AS tr,test_request.client_id,test_request.assignment_name,test_request.active_ingredients,test_request.manufacturer_name,test_request.manufacturer_address,test_request.batch_lot_number,
    test_request.sample_source,test_request.expiry_date,test_request.date_manufactured,test_request.quantity_type,test_request.sample_source,test_request.laboratory_number,test_request.applicant_name,
    test_request.quantity_remaining,test_request.quantity_submitted,test_request.reference_number,test_request.applicant_ref_number,test_request.identification,test_request.friability,test_request.dissolution,test_request.assay,test_request.test_specification,
    test_request.disintegration,test_request.ph_alkalinity,test_request.full_monograph,test_request.content_uniformity,test_request.microbiology,test_request.request_status')->get_where('test_request', array('id' => $test_request_id));
    

    $results=$query->result_array();
    $data['query']=$results[0];
    
    $this->load->view('content_uniformity_hplc_two_components_monograph_view',$data);
    $this->load->helper(array('form'));
    }
    function weight_variation_single_component_monograph() {
        
    $assignment_id= $this->uri->segment(3);
    $test_request_id=$this->uri->segment(4);

     $data['request']=
     $this->db->select('assignment.id AS a,assignment.test_request_id,assignment.user_id,assignment.client_id,assignment.reference_number,assignment.assigner_name,assignment.analyst_name,assignment.sample_issued')->get_where('assignment', array('id' => $assignment_id))->result_array();

    $query=$this->db->select('test_request.id AS tr,test_request.client_id,test_request.assignment_name,test_request.active_ingredients,test_request.manufacturer_name,test_request.manufacturer_address,test_request.batch_lot_number,
    test_request.sample_source,test_request.expiry_date,test_request.date_manufactured,test_request.quantity_type,test_request.sample_source,test_request.laboratory_number,test_request.applicant_name,
    test_request.quantity_remaining,test_request.quantity_submitted,test_request.reference_number,test_request.applicant_ref_number,test_request.identification,test_request.friability,test_request.dissolution,test_request.assay,test_request.test_specification,
    test_request.disintegration,test_request.ph_alkalinity,test_request.full_monograph,test_request.content_uniformity,test_request.microbiology,test_request.request_status')->get_where('test_request', array('id' => $test_request_id));
    

    $results=$query->result_array();
    $data['query']=$results[0];
    
    $this->load->view('content_uniformity_monograph_view',$data);
    $this->load->helper(array('form'));
    }
    function weight_variation_two_components_monograph() {
        
    $assignment_id= $this->uri->segment(3);
    $test_request_id=$this->uri->segment(4);

     $data['request']=
     $this->db->select('assignment.id AS a,assignment.test_request_id,assignment.user_id,assignment.client_id,assignment.reference_number,assignment.assigner_name,assignment.analyst_name,assignment.sample_issued')->get_where('assignment', array('id' => $assignment_id))->result_array();

    $query=$this->db->select('test_request.id AS tr,test_request.client_id,test_request.assignment_name,test_request.active_ingredients,test_request.manufacturer_name,test_request.manufacturer_address,test_request.batch_lot_number,
    test_request.sample_source,test_request.expiry_date,test_request.date_manufactured,test_request.quantity_type,test_request.sample_source,test_request.laboratory_number,test_request.applicant_name,
    test_request.quantity_remaining,test_request.quantity_submitted,test_request.reference_number,test_request.applicant_ref_number,test_request.identification,test_request.friability,test_request.dissolution,test_request.assay,test_request.test_specification,
    test_request.disintegration,test_request.ph_alkalinity,test_request.full_monograph,test_request.content_uniformity,test_request.microbiology,test_request.request_status')->get_where('test_request', array('id' => $test_request_id));
    

    $results=$query->result_array();
    $data['query']=$results[0];
    
    $this->load->view('weight_variation_two_components_monograph_view',$data);
    $this->load->helper(array('form'));
    }
    function worksheet() {
        
        $assignment_id= $this->uri->segment(3);
        $test_request_id=$this->uri->segment(4);
        
        $data['request']=
        $this->db->select('assignment.id AS a,assignment.test_request_id,assignment.user_id,assignment.client_id,assignment.reference_number,assignment.assigner_name,assignment.analyst_name,assignment.sample_issued')->get_where('assignment', array('id' => $assignment_id))->result_array();

        $query=$this->db->select('test_request.id AS tr,test_request.client_id,test_request.assignment_name,test_request.active_ingredients,test_request.manufacturer_name,test_request.manufacturer_address,test_request.batch_lot_number,
        test_request.sample_source,test_request.expiry_date,test_request.date_manufactured,test_request.quantity_type,test_request.sample_source,test_request.laboratory_number,test_request.applicant_name,
        test_request.quantity_remaining,test_request.quantity_submitted,test_request.reference_number,test_request.applicant_ref_number,test_request.identification,test_request.friability,test_request.dissolution,test_request.assay,test_request.test_specification,
        test_request.disintegration,test_request.ph_alkalinity,test_request.full_monograph,test_request.content_uniformity,test_request.microbiology,test_request.request_status')->get_where('test_request', array('id' => $test_request_id));
    

        $results=$query->result_array();
        $data['query']=$results[0];
        
        $this->load->view('content_uniformity_view',$data);
        $this->load->helper(array('form'));
    }
    
    function worksheet_uniformity_of_dosage_unit_single_component() {
        
    $assignment_id= $this->uri->segment(3);
    $test_request_id=$this->uri->segment(4);
    $status=0; 

    $data['uniformity_monograph_weight_variation_single_component']=$this->db->select('*')->get_where('uniformity_monograph_weight_variation_single_component', array('uniformity_monograph_weight_variation_single_component.test_request_id' => $test_request_id))->result_array();
    

    $data['request']=
    $this->db->select('assignment.id AS a,assignment.test_request_id,assignment.user_id,assignment.client_id,assignment.reference_number,assignment.assigner_name,assignment.analyst_name,assignment.sample_issued')->get_where('assignment', array('id' => $assignment_id))->result_array();

    $data['sql_equipment']=
    $this->db->select('equipment_maintenance.description,equipment_maintenance.id_number,equipment_maintenance.status,equipment_maintenance.manufacturer,equipment_maintenance.model')->get_where('equipment_maintenance', array('status' => $status))->result_array();

    $data['sql_standards']=
    $this->db->select('standard_register.reference_number,standard_register.item_description,standard_register.batch_number,standard_register.manufacturer_supplier,standard_register.status')->get_where('standard_register', array('status' => $status))->result_array();

    $data['sql_columns']=
    $this->db->select('columns.column_type,columns.serial_number,columns.column_dimensions,columns.manufacturer,columns.column_number')->get_where('columns', array('status' => $status))->result_array();

    $data['request']=
    $this->db->select('assignment.id AS a,assignment.test_request_id,assignment.user_id,assignment.client_id,assignment.reference_number,assignment.assigner_name,assignment.analyst_name,assignment.sample_issued')->get_where('assignment', array('id' => $assignment_id))->result_array();

    $query=$this->db->select('test_request.id AS tr,test_request.client_id,test_request.test_type_id,test_request.assignment_name,test_request.active_ingredients,test_request.brand_name,test_request.applicant_address,test_request.date_time,test_request.manufacturer_name,test_request.manufacturer_address,test_request.batch_lot_number,
    test_request.sample_source,test_request.expiry_date,test_request.date_manufactured,test_request.quantity_type,test_request.sample_source,test_request.laboratory_number,test_request.applicant_name,
    test_request.quantity_remaining,test_request.quantity_submitted,test_request.pack_size,test_request.reference_number,test_request.applicant_ref_number,test_request.identification,test_request.friability,test_request.dissolution,test_request.assay,test_request.test_specification,
    test_request.disintegration,test_request.ph_alkalinity,test_request.full_monograph,test_request.content_uniformity,test_request.microbiology,test_request.request_status')->get_where('test_request', array('id' => $test_request_id));
    

    $results=$query->result_array();
    $data['query']=$results[0];
    
    // var_dump($results);
    // die;
 
    $this->load->view('uniformity_of_dosage_unit_single_component_view',$data);
    $this->load->helper(array('form'));
    }



    function worksheet_weight_variation_single() {
        
    $assignment_id= $this->uri->segment(3);
    $test_request_id=$this->uri->segment(4);
    $status=0; 

    $data['uniformity_monograph_weight_variation_single_component']=$this->db->select('*')->get_where('uniformity_monograph_weight_variation_single_component', array('uniformity_monograph_weight_variation_single_component.test_request_id' => $test_request_id))->result_array();
    

    $data['request']=
    $this->db->select('assignment.id AS a,assignment.test_request_id,assignment.user_id,assignment.client_id,assignment.reference_number,assignment.assigner_name,assignment.analyst_name,assignment.sample_issued')->get_where('assignment', array('id' => $assignment_id))->result_array();

    $data['sql_equipment']=
    $this->db->select('equipment_maintenance.description,equipment_maintenance.id_number,equipment_maintenance.status,equipment_maintenance.manufacturer,equipment_maintenance.model')->get_where('equipment_maintenance', array('status' => $status))->result_array();

    $data['sql_standards']=
    $this->db->select('standard_register.reference_number,standard_register.item_description,standard_register.batch_number,standard_register.manufacturer_supplier,standard_register.status')->get_where('standard_register', array('status' => $status))->result_array();

    $data['sql_columns']=
    $this->db->select('columns.column_type,columns.serial_number,columns.column_dimensions,columns.manufacturer,columns.column_number')->get_where('columns', array('status' => $status))->result_array();

    $data['request']=
    $this->db->select('assignment.id AS a,assignment.test_request_id,assignment.user_id,assignment.client_id,assignment.reference_number,assignment.assigner_name,assignment.analyst_name,assignment.sample_issued')->get_where('assignment', array('id' => $assignment_id))->result_array();

    $query=$this->db->select('test_request.id AS tr,test_request.client_id,test_request.test_type_id,test_request.assignment_name,test_request.active_ingredients,test_request.brand_name,test_request.applicant_address,test_request.date_time,test_request.manufacturer_name,test_request.manufacturer_address,test_request.batch_lot_number,
    test_request.sample_source,test_request.expiry_date,test_request.date_manufactured,test_request.quantity_type,test_request.sample_source,test_request.laboratory_number,test_request.applicant_name,
    test_request.quantity_remaining,test_request.quantity_submitted,test_request.pack_size,test_request.reference_number,test_request.applicant_ref_number,test_request.identification,test_request.friability,test_request.dissolution,test_request.assay,test_request.test_specification,
    test_request.disintegration,test_request.ph_alkalinity,test_request.full_monograph,test_request.content_uniformity,test_request.microbiology,test_request.request_status')->get_where('test_request', array('id' => $test_request_id));
    

    $results=$query->result_array();
    $data['query']=$results[0];
    
    // var_dump($results);
    // die;
 
    $this->load->view('weight_variation_single_view',$data);
    $this->load->helper(array('form'));
    }
    
    function worksheet_content_uniformity_single_component() {
        
    $assignment_id= $this->uri->segment(3);
    $test_request_id=$this->uri->segment(4);
    $status=0; 

    $data['uniformity_monograp_content_uniformity_single_component']=$this->db->select('*')->get_where('uniformity_monograp_content_uniformity_single_component', array('uniformity_monograp_content_uniformity_single_component.test_request_id' => $test_request_id))->result_array();
    

    $data['request']=
    $this->db->select('assignment.id AS a,assignment.test_request_id,assignment.user_id,assignment.client_id,assignment.reference_number,assignment.assigner_name,assignment.analyst_name,assignment.sample_issued')->get_where('assignment', array('id' => $assignment_id))->result_array();

    $data['sql_equipment']=
    $this->db->select('equipment_maintenance.description,equipment_maintenance.id_number,equipment_maintenance.status,equipment_maintenance.manufacturer,equipment_maintenance.model')->get_where('equipment_maintenance', array('status' => $status))->result_array();

    $data['sql_standards']=
    $this->db->select('standard_register.reference_number,standard_register.item_description,standard_register.batch_number,standard_register.manufacturer_supplier,standard_register.status')->get_where('standard_register', array('status' => $status))->result_array();

    $data['sql_columns']=
    $this->db->select('columns.column_type,columns.serial_number,columns.column_dimensions,columns.manufacturer,columns.column_number')->get_where('columns', array('status' => $status))->result_array();

    $data['request']=
    $this->db->select('assignment.id AS a,assignment.test_request_id,assignment.user_id,assignment.client_id,assignment.reference_number,assignment.assigner_name,assignment.analyst_name,assignment.sample_issued')->get_where('assignment', array('id' => $assignment_id))->result_array();

    $query=$this->db->select('test_request.id AS tr,test_request.client_id,test_request.test_type_id,test_request.assignment_name,test_request.active_ingredients,test_request.brand_name,test_request.applicant_address,test_request.date_time,test_request.manufacturer_name,test_request.manufacturer_address,test_request.batch_lot_number,
    test_request.sample_source,test_request.expiry_date,test_request.date_manufactured,test_request.quantity_type,test_request.sample_source,test_request.laboratory_number,test_request.applicant_name,
    test_request.quantity_remaining,test_request.quantity_submitted,test_request.pack_size,test_request.reference_number,test_request.applicant_ref_number,test_request.identification,test_request.friability,test_request.dissolution,test_request.assay,test_request.test_specification,
    test_request.disintegration,test_request.ph_alkalinity,test_request.full_monograph,test_request.content_uniformity,test_request.microbiology,test_request.request_status')->get_where('test_request', array('id' => $test_request_id));
    

    $results=$query->result_array();
    $data['query']=$results[0];
    
    // var_dump($results);
    // die;
 
    $this->load->view('content_uniformity_single_component_view',$data);
    $this->load->helper(array('form'));
    }
     function worksheet_weight_variation_two_components() {
        
    $assignment_id= $this->uri->segment(3);
    $test_request_id=$this->uri->segment(4);
    $status=0; 

    $data['uniformity_monograph_weight_variation_two_components']=$this->db->select('*')->get_where('uniformity_monograph_weight_variation_two_components', array('uniformity_monograph_weight_variation_two_components.test_request_id' => $test_request_id))->result_array();
    

    $data['request']=
    $this->db->select('assignment.id AS a,assignment.test_request_id,assignment.user_id,assignment.client_id,assignment.reference_number,assignment.assigner_name,assignment.analyst_name,assignment.sample_issued')->get_where('assignment', array('id' => $assignment_id))->result_array();

    $data['sql_equipment']=
    $this->db->select('equipment_maintenance.description,equipment_maintenance.id_number,equipment_maintenance.status,equipment_maintenance.manufacturer,equipment_maintenance.model')->get_where('equipment_maintenance', array('status' => $status))->result_array();

    $data['sql_standards']=
    $this->db->select('standard_register.reference_number,standard_register.item_description,standard_register.batch_number,standard_register.manufacturer_supplier,standard_register.status')->get_where('standard_register', array('status' => $status))->result_array();

    $data['sql_columns']=
    $this->db->select('columns.column_type,columns.serial_number,columns.column_dimensions,columns.manufacturer,columns.column_number')->get_where('columns', array('status' => $status))->result_array();

    $data['request']=
    $this->db->select('assignment.id AS a,assignment.test_request_id,assignment.user_id,assignment.client_id,assignment.reference_number,assignment.assigner_name,assignment.analyst_name,assignment.sample_issued')->get_where('assignment', array('id' => $assignment_id))->result_array();

    $query=$this->db->select('test_request.id AS tr,test_request.client_id,test_request.test_type_id,test_request.assignment_name,test_request.active_ingredients,test_request.brand_name,test_request.applicant_address,test_request.date_time,test_request.manufacturer_name,test_request.manufacturer_address,test_request.batch_lot_number,
    test_request.sample_source,test_request.expiry_date,test_request.date_manufactured,test_request.quantity_type,test_request.sample_source,test_request.laboratory_number,test_request.applicant_name,
    test_request.quantity_remaining,test_request.quantity_submitted,test_request.pack_size,test_request.reference_number,test_request.applicant_ref_number,test_request.identification,test_request.friability,test_request.dissolution,test_request.assay,test_request.test_specification,
    test_request.disintegration,test_request.ph_alkalinity,test_request.full_monograph,test_request.content_uniformity,test_request.microbiology,test_request.request_status')->get_where('test_request', array('id' => $test_request_id));
    

    $results=$query->result_array();
    $data['query']=$results[0];
    
    // var_dump($results);
    // die;
 
    $this->load->view('weight_variation_two_components_view',$data);
    $this->load->helper(array('form'));
    }

    function worksheet_titration() {
        
    $assignment_id= $this->uri->segment(3);
    $test_request_id=$this->uri->segment(4);

     $data['request']=
     $this->db->select('assignment.id AS a,assignment.test_request_id,assignment.user_id,assignment.client_id,assignment.reference_number,assignment.assigner_name,assignment.analyst_name,assignment.sample_issued')->get_where('assignment', array('id' => $assignment_id))->result_array();

    $query=$this->db->select('test_request.id AS tr,test_request.client_id,test_request.assignment_name,test_request.active_ingredients,test_request.manufacturer_name,test_request.manufacturer_address,test_request.batch_lot_number,
    test_request.sample_source,test_request.expiry_date,test_request.date_manufactured,test_request.quantity_type,test_request.sample_source,test_request.laboratory_number,test_request.applicant_name,
    test_request.quantity_remaining,test_request.quantity_submitted,test_request.reference_number,test_request.applicant_ref_number,test_request.identification,test_request.friability,test_request.dissolution,test_request.assay,test_request.test_specification,
    test_request.disintegration,test_request.ph_alkalinity,test_request.full_monograph,test_request.content_uniformity,test_request.microbiology,test_request.request_status')->get_where('test_request', array('id' => $test_request_id));
    

    $results=$query->result_array();
    $data['query']=$results[0];
    
    // var_dump($results);
    // die;
 
    $this->load->view('content_uniformity_titration_view',$data);
    $this->load->helper(array('form'));
    }
    function save(){
    $this->content_uniformity_model->process();                
    }
    function save_weight_variation_single_component_monograph(){
       $this->load->model('content_uniformity_model');

        if ($this->input->post('submit')) {
            $this->content_uniformity_model->process_monograph_weight_variation_single_component();
        }                
    }
    function save_weight_variation_two_components_monograph(){
       $this->load->model('content_uniformity_model');

        if ($this->input->post('submit')) {
            $this->content_uniformity_model->process_monograph_weight_variation_two_components();
        }                
    }
    function save_hplc_content_uniformity_single_component_monograph(){
       $this->load->model('content_uniformity_model');

        if ($this->input->post('submit')) {
            $this->content_uniformity_model->process_monograph_content_uniformity_hplc_single_component();
        }                
    }
    function save_hplc_content_uniformity_two_components_monograph(){
       $this->load->model('content_uniformity_model');

        if ($this->input->post('submit')) {
            $this->content_uniformity_model->process_monograph_content_uniformity_hplc_two_components();
        }                
    }
    function save_titration_content_uniformity_single_component_monograph(){
       $this->load->model('content_uniformity_model');

        if ($this->input->post('submit')) {
            $this->content_uniformity_model->process_monograph_content_uniformity_titration_single_component();
        }                
    }
    function save_titration_content_uniformity_two_components_monograph(){
       $this->load->model('content_uniformity_model');

        if ($this->input->post('submit')) {
            $this->content_uniformity_model->process_monograph_content_uniformity_titration_two_components();
        }                
    }
    function save_uv_content_uniformity_single_component_monograph(){
       $this->load->model('content_uniformity_model');

        if ($this->input->post('submit')) {
            $this->content_uniformity_model->process_monograph_content_uniformity_uv_single_component();
        }                
    }
    function save_uv_content_uniformity_two_components_monograph(){
       $this->load->model('content_uniformity_model');

        if ($this->input->post('submit')) {
            $this->content_uniformity_model->process_monograph_content_uniformity_uv_two_components();
        }                
    }

}