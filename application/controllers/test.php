<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {
function __construct()
 {
   parent::__construct();
 }
function index(){
    $id= $this->uri->segment(3);    
    $trid= $this->uri->segment(4);
    $test_type_id= $this->uri->segment(5);
      
    $data['request']=$this->db->select('test_request.id AS tr,test_request.test_type_id,test_request.client_id,test_request.assignment_name,test_request.active_ingredients,test_request.manufacturer_name,test_request.manufacturer_address,test_request.batch_lot_number,
    test_request.sample_source,test_request.expiry_date,test_request.date_manufactured,test_request.quantity_type,test_request.sample_source,test_request.laboratory_number,test_request.applicant_name,
    test_request.quantity_remaining,test_request.quantity_submitted,test_request.applicant_ref_number,test_request.identification,test_request.friability,test_request.dissolution,test_request.assay,test_request.test_specification,
    test_request.disintegration,test_request.ph_alkalinity,test_request.full_monograph,test_request.content_uniformity,test_request.microbiology,test_request.water_method,test_request.related_substances,test_request.loss_drying,test_request.request_status')->get_where('test_request', array('id' => $trid))->result_array();
    
    $data['hplc_internal_method']=$this->db->select('assay_hplc_internal_method.test_status')->get_where('assay_hplc_internal_method', array('test_request_id' => $trid))->result_array();
    $data['assay_hplc_area_method_single_component']=$this->db->select('assay_hplc_area_method_single_component.test_status')->get_where('assay_hplc_area_method_single_component', array('test_request_id' => $trid))->result_array();
    $data['assay_hplc_area_method_two_components']=$this->db->select('assay_hplc_area_method_two_components.test_status')->get_where('assay_hplc_area_method_two_components', array('test_request_id' => $trid))->result_array();
    $data['assay_hplc_area_method_two_components_different_methods']=$this->db->select('assay_hplc_area_method_two_components_different_methods.test_status')->get_where('assay_hplc_area_method_two_components_different_methods', array('test_request_id' => $trid))->result_array();
    $data['assay_hplc_area_method_oral_liquids_single_component']=$this->db->select('assay_hplc_area_method_oral_liquids_single_component.test_status')->get_where('assay_hplc_area_method_oral_liquids_single_component', array('test_request_id' => $trid))->result_array();
    $data['assay_hplc_area_method_oral_liquids_two_components']=$this->db->select('assay_hplc_area_method_oral_liquids_two_components.test_status')->get_where('assay_hplc_area_method_oral_liquids_two_components', array('test_request_id' => $trid))->result_array();
    $data['assay_hplc_area_method_powder_for_oral_liquids']=$this->db->select('assay_hplc_area_method_powder_for_oral_liquids.test_status')->get_where('assay_hplc_area_method_powder_for_oral_liquids', array('test_request_id' => $trid))->result_array();
    $data['assay_hplc_area_method_injection_powder_single_component']=$this->db->select('assay_hplc_area_method_injection_powder_single_component.test_status')->get_where('assay_hplc_area_method_injection_powder_single_component', array('test_request_id' => $trid))->result_array();
    $data['assay_hplc_area_method_injection_powder_two_components']=$this->db->select('assay_hplc_area_method_injection_powder_two_components.test_status')->get_where('assay_hplc_area_method_injection_powder_two_components', array('test_request_id' => $trid))->result_array();
    $data['assay_titration']=$this->db->select('assay_titration.test_status')->get_where('assay_titration', array('test_request_id' => $trid))->result_array();
    $data['assay_indometric_titration']=$this->db->select('assay_indometric_titration.test_status')->get_where('assay_indometric_titration', array('test_request_id' => $trid))->result_array();
    $data['assay_ultraviolet_single_component']=$this->db->select('assay_ultraviolet_single_component.test_status')->get_where('assay_ultraviolet_single_component', array('test_request_id' => $trid))->result_array();
    $data['assay_ultraviolet_two_components']=$this->db->select('assay_ultraviolet_two_components.test_status')->get_where('assay_ultraviolet_two_components', array('test_request_id' => $trid))->result_array();
    $data['assay_karl_fisher_water_method']=$this->db->select('assay_karl_fisher_water_method.test_status')->get_where('assay_karl_fisher_water_method', array('test_request_id' => $trid))->result_array();

    $data['weight_variation_hplc_single_component']=$this->db->select('weight_variation_hplc_single_component.test_status')->get_where('weight_variation_hplc_single_component', array('test_request_id' => $trid))->result_array();
    $data['weight_variation_hplc_two_components']=$this->db->select('weight_variation_hplc_two_components.test_status')->get_where('weight_variation_hplc_two_components', array('test_request_id' => $trid))->result_array();
    $data['content_uniformity_hplc_single_component']=$this->db->select('content_uniformity_hplc_single_component.test_status')->get_where('content_uniformity_hplc_single_component', array('test_request_id' => $trid))->result_array();
    $data['content_uniformity_hplc_two_components']=$this->db->select('content_uniformity_hplc_two_components.test_status')->get_where('content_uniformity_hplc_two_components', array('test_request_id' => $trid))->result_array();
    $data['content_uniformity_titration_single_component']=$this->db->select('content_uniformity_titration_single_component.test_status')->get_where('content_uniformity_titration_single_component', array('test_request_id' => $trid))->result_array();
    $data['content_uniformity_titration_two_components']=$this->db->select('content_uniformity_titration_two_components.test_status')->get_where('content_uniformity_titration_two_components', array('test_request_id' => $trid))->result_array();
    $data['content_uniformity_uv_single_component']=$this->db->select('content_uniformity_uv_single_component.test_status')->get_where('content_uniformity_uv_single_component', array('test_request_id' => $trid))->result_array();
    $data['content_uniformity_uv_two_components']=$this->db->select('content_uniformity_uv_two_components.test_status')->get_where('content_uniformity_uv_two_components', array('test_request_id' => $trid))->result_array();
    $data['uniformity_of_dosage_unit_single_component']=$this->db->select('uniformity_of_dosage_unit_single_component.test_status')->get_where('uniformity_of_dosage_unit_single_component', array('test_request_id' => $trid))->result_array();
    $data['uniformity_of_dosage_unit_two_components']=$this->db->select('uniformity_of_dosage_unit_two_components.test_status')->get_where('uniformity_of_dosage_unit_two_components', array('test_request_id' => $trid))->result_array();
    $data['uniformity_of_dosage_unit_single_component_uv_single_wavelength']=$this->db->select('uniformity_of_dosage_unit_single_component_uv_single_wavelength.test_status')->get_where('uniformity_of_dosage_unit_single_component_uv_single_wavelength', array('test_request_id' => $trid))->result_array();
    $data['uniformity_of_dosage_unit_two_components_uv_single_wavelength']=$this->db->select('uniformity_of_dosage_unit_two_components_uv_single_wavelength.test_status')->get_where('uniformity_of_dosage_unit_two_components_uv_single_wavelength', array('test_request_id' => $trid))->result_array();
        
    $data['uniformity_monograph_weight_variation_single_component']=$this->db->select('uniformity_monograph_weight_variation_single_component.monograph')->get_where('uniformity_monograph_weight_variation_single_component', array('uniformity_monograph_weight_variation_single_component.test_request_id' => $trid))->result_array();
    $data['uniformity_monograph_weight_variation_two_components']=$this->db->select('uniformity_monograph_weight_variation_two_components.monograph')->get_where('uniformity_monograph_weight_variation_two_components', array('uniformity_monograph_weight_variation_two_components.test_request_id' => $trid))->result_array();
    $data['uniformity_monograp_content_uniformity_single_component']=$this->db->select('uniformity_monograp_content_uniformity_single_component.monograph')->get_where('uniformity_monograp_content_uniformity_single_component', array('uniformity_monograp_content_uniformity_single_component.test_request_id' => $trid))->result_array();
    $data['uniformity_monograp_content_uniformity_two_components']=$this->db->select('uniformity_monograp_content_uniformity_two_components.monograph')->get_where('uniformity_monograp_content_uniformity_two_components', array('uniformity_monograp_content_uniformity_two_components.test_request_id' => $trid))->result_array();
    $data['uniformity_monograp_content_uniformity_titra_single_component']=$this->db->select('uniformity_monograp_content_uniformity_titra_single_component.monograph')->get_where('uniformity_monograp_content_uniformity_titra_single_component', array('uniformity_monograp_content_uniformity_titra_single_component.test_request_id' => $trid))->result_array();
    $data['uniformity_monograp_content_uniformity_titra_two_components']=$this->db->select('uniformity_monograp_content_uniformity_titra_two_components.monograph')->get_where('uniformity_monograp_content_uniformity_titra_two_components', array('uniformity_monograp_content_uniformity_titra_two_components.test_request_id' => $trid))->result_array();
    $data['uniformity_monograp_content_uniformity_uv_single_component']=$this->db->select('uniformity_monograp_content_uniformity_uv_single_component.monograph')->get_where('uniformity_monograp_content_uniformity_uv_single_component', array('uniformity_monograp_content_uniformity_uv_single_component.test_request_id' => $trid))->result_array();
    $data['uniformity_monograp_content_uniformity_uv_two_components']=$this->db->select('uniformity_monograp_content_uniformity_uv_two_components.monograph')->get_where('uniformity_monograp_content_uniformity_uv_two_components', array('uniformity_monograp_content_uniformity_uv_two_components.test_request_id' => $trid))->result_array();
    $data['friability_monograph']=$this->db->select('friability_monograph.monograph')->get_where('friability_monograph', array('friability_monograph.test_request_id' => $trid))->result_array();
    $data['ph_alkalinity_monograph']=$this->db->select('ph_alkalinity_monograph.monograph')->get_where('ph_alkalinity_monograph', array('ph_alkalinity_monograph.test_request_id' => $trid))->result_array();
    $data['monograph_uniformity_of_dosage_unit_single_component_uv']=$this->db->select('uniformity_monograp_uniformity_of_dosage_single_component_uv.monograph')->get_where('uniformity_monograp_uniformity_of_dosage_single_component_uv', array('uniformity_monograp_uniformity_of_dosage_single_component_uv.test_request_id' => $trid))->result_array();
    $data['monograph_uniformity_of_dosage_unit_two_components_uv']=$this->db->select('uniformity_monograp_uniformity_of_dosage_two_components_uv.monograph')->get_where('uniformity_monograp_uniformity_of_dosage_two_components_uv', array('uniformity_monograp_uniformity_of_dosage_two_components_uv.test_request_id' => $trid))->result_array();
    

    $data['assay_monograph_hplc_internal_method']=$this->db->select('assay_monograph_hplc_internal_method.monograph')->get_where('assay_monograph_hplc_internal_method', array('assay_monograph_hplc_internal_method.test_request_id' => $trid))->result_array();
    $data['assay_monograph_hplc_area_method_single_component']=$this->db->select('assay_monograph_hplc_area_method_single_component.monograph')->get_where('assay_monograph_hplc_area_method_single_component', array('assay_monograph_hplc_area_method_single_component.test_request_id' => $trid))->result_array();
    $data['assay_monograph_hplc_area_method_two_components']=$this->db->select('assay_monograph_hplc_area_method_two_components.monograph')->get_where('assay_monograph_hplc_area_method_two_components', array('assay_monograph_hplc_area_method_two_components.test_request_id' => $trid))->result_array();
    $data['assay_monograph_hplc_area_method_two_components_dif_methods']=$this->db->select('assay_monograph_hplc_area_method_two_components_dif_methods.monograph')->get_where('assay_monograph_hplc_area_method_two_components_dif_methods', array('assay_monograph_hplc_area_method_two_components_dif_methods.test_request_id' => $trid))->result_array();
    $data['assay_monograph_hplc_area_method_injection_powder_single_comp']=$this->db->select('assay_monograph_hplc_area_method_injection_powder_single_comp.monograph')->get_where('assay_monograph_hplc_area_method_injection_powder_single_comp', array('assay_monograph_hplc_area_method_injection_powder_single_comp.test_request_id' => $trid))->result_array();
    $data['assay_monograph_hplc_area_method_injection_powder_two_components']=$this->db->select('assay_monograph_hplc_area_method_injection_powder_two_components.monograph')->get_where('assay_monograph_hplc_area_method_injection_powder_two_components', array('assay_monograph_hplc_area_method_injection_powder_two_components.test_request_id' => $trid))->result_array();
    $data['assay_monograph_hplc_area_method_oral_liquids_single_component']=$this->db->select('assay_monograph_hplc_area_method_oral_liquids_single_component.monograph')->get_where('assay_monograph_hplc_area_method_oral_liquids_single_component', array('assay_monograph_hplc_area_method_oral_liquids_single_component.test_request_id' => $trid))->result_array();
    $data['assay_monograph_hplc_area_method_oral_liquids_two_components']=$this->db->select('assay_monograph_hplc_area_method_oral_liquids_two_components.monograph')->get_where('assay_monograph_hplc_area_method_oral_liquids_two_components', array('assay_monograph_hplc_area_method_oral_liquids_two_components.test_request_id' => $trid))->result_array();
    $data['assay_monograph_hplc_area_method_powder_for_oral_liquids']=$this->db->select('assay_monograph_hplc_area_method_powder_for_oral_liquids.monograph')->get_where('assay_monograph_hplc_area_method_powder_for_oral_liquids', array('assay_monograph_hplc_area_method_powder_for_oral_liquids.test_request_id' => $trid))->result_array();
    $data['assay_monograph_titration']=$this->db->select('assay_monograph_titration.monograph')->get_where('assay_monograph_titration', array('assay_monograph_titration.test_request_id' => $trid))->result_array();
    $data['assay_monograph_indometric_titration']=$this->db->select('assay_monograph_indometric_titration.monograph')->get_where('assay_monograph_indometric_titration', array('assay_monograph_indometric_titration.test_request_id' => $trid))->result_array();
    $data['assay_monograph_ultraviolet_single_component']=$this->db->select('assay_monograph_ultraviolet_single_component.monograph')->get_where('assay_monograph_ultraviolet_single_component', array('assay_monograph_ultraviolet_single_component.test_request_id' => $trid))->result_array();
    $data['assay_monograph_ultraviolet_two_components']=$this->db->select('assay_monograph_ultraviolet_two_components.monograph')->get_where('assay_monograph_ultraviolet_two_components', array('assay_monograph_ultraviolet_two_components.test_request_id' => $trid))->result_array();
        

    $data['monograph_identification_assay']=$this->db->select('identification_assay_monograph.monograph')->get_where('identification_assay_monograph', array('identification_assay_monograph.test_request_id' => $trid))->result_array();
    $data['monograph_identification_uv']=$this->db->select('identification_uv_monograph.monograph')->get_where('identification_uv_monograph', array('identification_uv_monograph.test_request_id' => $trid))->result_array();
    $data['monograph_identification_infrared']=$this->db->select('identification_infrared_monograph.monograph')->get_where('identification_infrared_monograph', array('identification_infrared_monograph.test_request_id' => $trid))->result_array();
    $data['monograph_identification_tlc']=$this->db->select('identification_tlc_monograph.monograph')->get_where('identification_tlc_monograph', array('identification_tlc_monograph.test_request_id' => $trid))->result_array();
    $data['monograph_identification_hplc']=$this->db->select('identification_hplc_monograph.monograph')->get_where('identification_hplc_monograph', array('identification_hplc_monograph.test_request_id' => $trid))->result_array();
    $data['monograph_identification_chemical_method']=$this->db->select('identification_chemical_method_monograph.monograph')->get_where('identification_chemical_method_monograph', array('identification_chemical_method_monograph.test_request_id' => $trid))->result_array();
    $data['monograph_identification_thin_layer']=$this->db->select('identification_thin_layer_monograph.monograph')->get_where('identification_thin_layer_monograph', array('identification_thin_layer_monograph.test_request_id' => $trid))->result_array();
    $data['monograph_diss_uv']=$this->db->select('diss_uv_monograph.monograph')->get_where('diss_uv_monograph', array('diss_uv_monograph.test_request_id' => $trid))->result_array();
    $data['monograph_dissolution_normal_hplc']=$this->db->select('diss_normal_hplc_monograph.monograph')->get_where(' diss_normal_hplc_monograph', array('diss_normal_hplc_monograph.test_request_id' => $trid))->result_array();
    $data['monograph_dissolution_enteric_coated']=$this->db->select('diss_enteric_coated_monograph.monograph')->get_where('diss_enteric_coated_monograph', array('diss_enteric_coated_monograph.test_request_id' => $trid))->result_array();
    $data['monograph_dissolution_two_component']=$this->db->select('diss_two_component_monograph.monograph')->get_where('diss_two_component_monograph', array('diss_two_component_monograph.test_request_id' => $trid))->result_array();
    $data['monograph_dissolution_delayed']=$this->db->select('diss_delayed_release_monograph.monograph')->get_where('diss_delayed_release_monograph', array('diss_delayed_release_monograph.test_request_id' => $trid))->result_array();
    $data['monograph_disintegration']=$this->db->select('disintegration_monograph.monograph')->get_where('disintegration_monograph', array('disintegration_monograph.test_request_id' => $trid))->result_array();
    $data['monograph_water_method']=$this->db->select('water_method_monograph.monograph')->get_where('water_method_monograph', array('water_method_monograph.test_request_id' => $trid))->result_array();
    $data['monograph_volumetric_solution']=$this->db->select('volumetric_solution_monograph.monograph')->get_where('volumetric_solution_monograph', array('volumetric_solution_monograph.test_request_id' => $trid))->result_array();
    $data['monograph_loss_drying']=$this->db->select('loss_drying_monograph.monograph')->get_where('loss_drying_monograph', array('loss_drying_monograph.test_request_id' => $trid))->result_array();
    $data['monograph_related_substances']=$this->db->select('related_substances_monograph.monograph')->get_where('related_substances_monograph', array('related_substances_monograph.test_request_id' => $trid))->result_array();
    
    $data['identification_assay']=$this->db->select('identification.status')->get_where('identification', array('identification.test_request' => $trid))->result_array();
    $data['identification_uv']=$this->db->select('identification_uv.status')->get_where('identification_uv', array('identification_uv.test_request' => $trid))->result_array();
    $data['identification_infrared']=$this->db->select('identification.status')->get_where('identification', array('identification.test_request' => $trid))->result_array();
    $data['identification_tlc']=$this->db->select('tlc.status')->get_where('tlc', array('tlc.test_request' => $trid))->result_array();
    $data['identification_hplc']=$this->db->select('identification_hplc.status')->get_where('identification_hplc', array('identification_hplc.test_request' => $trid))->result_array();
    $data['identification_chemical_method']=$this->db->select('identification_chemical_method.status')->get_where('identification_chemical_method', array('identification_chemical_method.test_request' => $trid))->result_array();
    $data['identification_thin_layer']=$this->db->select('identification_thin_layer.status')->get_where('identification_thin_layer', array('identification_thin_layer.test_request' => $trid))->result_array();
    $data['diss_uv']=$this->db->select('diss_data.status')->get_where('diss_data', array('diss_data.test_request' => $trid))->result_array();
    $data['dissolution_normal_hplc']=$this->db->select('diss_normal.status')->get_where('diss_normal', array('diss_normal.test_request' => $trid))->result_array();
    $data['dissolution_enteric_coated']=$this->db->select('diss_enteric_coated.status')->get_where('diss_enteric_coated', array('diss_enteric_coated.test_request' => $trid))->result_array();
    $data['dissolution_two_component']=$this->db->select('diss_two_components.status')->get_where('diss_two_components', array('diss_two_components.test_request' => $trid))->result_array();
    $data['dissolution_delayed']=$this->db->select('diss_delayed_release.status')->get_where('diss_delayed_release', array('diss_delayed_release.test_request' => $trid))->result_array();
    
    $query=$this->db->select('assignment.id AS a,assignment.test_request_id,assignment.user_id,assignment.client_id,assignment.reference_number,assignment.assigner_name,assignment.analyst_name,assignment.sample_issued')->get_where('assignment', array('id' => $id));
    
    $results=$query->result_array();
    $data['query']=$results[0];
    
    $this->load->view('test_conduction',$data);
    $this->load->helper(array('form'));
}

}
?>