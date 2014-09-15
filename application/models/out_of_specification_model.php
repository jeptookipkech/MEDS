<?php
class Assay_Model extends CI_Model{
   
   function __construct()
   {
    parent::__construct();
   }

   function process(){
     $assignment_id=$this->input->post('assignment_id');
     $test_request_id=$this->input->post('tr_id');
     
     //Sample Insertion
    $data = array(
     
     'assignment_id'=>$assignment_id,
     'test_request_id'=>$test_request_id,
     'reference_number'=>$this->input->post('reference_number'),
     'measurement_out_side_linear_range'=>$this->input->post('measurement_out_side_linear_range'),
     'values_below_limit_of_detection_or_quantitation'=>$this->input->post('values_below_limit_of_detection_or_quantitation'),
     'blank_value_ignored'=>$this->input->post('blank_value_ignored'),
     'environmental_conditions'=>$this->input->post('environmental_conditions'),
     'system_suitability_test_missing_or_failed'=>$this->input->post('system_suitability_test_missing_or_failed'),
     'instrument_calibration_missing'=>$this->input->post('instrument_calibration_missing'),
     'wrong_instrument_parameters'=>$this->input->post('wrong_instrument_parameters'),
     'wrong_instrument_used'=>$this->input->post('wrong_instrument_used'),
     'deviation_from_the_specified_method'=>$this->input->post('deviation_from_the_specified_method'),
     'measurement_out_side_linear_range'=>$this->input->post('measurement_out_side_linear_range'),
     'weighing_error'=>$this->input->post('weighing_error'),
     'use_of_wrong_reagents'=>$this->input->post('use_of_wrong_reagents'),
     'impurity_of_solvents'=>$this->input->post('impurity_of_solvents'),
     'improper_storage_of_reagents'=>$this->input->post('improper_storage_of_reagents'),
     'improper_storage_of_solutions'=>$this->input->post('improper_storage_of_solutions'),
     'solutions_or_reaggents_expired'=>$this->input->post('solutions_or_reaggents_expired'),
     'reagents_not_dissolved_completely'=>$this->input->post('reagents_not_dissolved_completely'),
     'error_during_filtration'=>$this->input->post('error_during_filtration'),
     'carry_over_of_reagents'=>$this->input->post('carry_over_of_reagents'),
     'wrong_reference_standard_used'=>$this->input->post('wrong_reference_standard_used'),
     'reference_standard_without_required_quality_used'=>$this->input->post('reference_standard_without_required_quality_used'),
     'dilution_error_with_standard_solutions'=>$this->input->post('dilution_error_with_standard_solutions'),
     'inappropriate_storage_of_reference_standard'=>$this->input->post('inappropriate_storage_of_reference_standard'),
     'reference_standard_expired'=>$this->input->post('reference_standard_expired'),
     'carry_over_of_reagents_two'=>$this->input->post('carry_over_of_reagents_two'),
     'calculation_error'=>$this->input->post('calculation_error'),
     'wrong_formula'=>$this->input->post('wrong_formula'),
     'wrong_factor_used'=>$this->input->post('wrong_factor_used'),
     'data_transfer_error'=>$this->input->post('data_transfer_error'),
     'glassware_or_popetting_device_with_wrong_volume'=>$this->input->post('glassware_or_popetting_device_with_wrong_volume'),
     'pipettes_with_broken_top'=>$this->input->post('pipettes_with_broken_top'),
     'uncalibrated_or_substandard_glassware'=>$this->input->post('uncalibrated_or_substandard_glassware'),
     'dilution_error'=>$this->input->post('dilution_error'),
     'carry_over'=>$this->input->post('carry_over'),
     'other_reasons'=>$this->input->post('other_reasons'),
     'reasons_found'=>$this->input->post('reasons_found'),
     'no_reasons_found'=>$this->input->post('no_reasons_found'),
     'investigated_by'=>$this->input->post('investigated_by'),
     'date_investigated'=>$this->input->post('date_investigated'),
     'approved_by'=>$this->input->post('approved_by'),
     'date_approved'=>$this->input->post('date_approved')

    );
    
     $this->db->insert('out_of_specification',$data);
     redirect('test/index/'.$assignment_id.'/'.$test_request_id);
   }
}
?>
