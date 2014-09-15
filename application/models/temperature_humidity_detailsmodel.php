<?php
class Temperature_Humidity_Detailsmodel extends CI_Model{
 function Humidtemp_Detailsmodel(){

      parent::__construct();
    }

function details($ht_id){
	$id =1;	
	$ht_location=="1";
	$new_data = array(

	  'ht_date'=>$this->input->post('ht_date'),
	  'ht_location'=>$this->input->post('ht_location'),
	  'equipment_used'=>$this->input->post('equipment_used'),
	  'comments'=>$this->input->post('comments'),
	  'min_temp'=>$this->input->post('min_temp'),
	  'min_temp_corrected'=>$this->input->post('min_temp_corrected'),
	  'max_temp'=>$this->input->post('max_temp'),
	  'max_temp_corrected'=>$this->input->post('max_temp_corrected'),
	  'min_humidity'=>$this->input->post('min_humidity'),
	  'min_humidity_corrected'=>$this->input->post('min_humidity_corrected'),
	  'max_humidity'=>$this->input->post('max_humidity'),
	  'max_humidity_corrected'=>$this->input->post('max_humidity_corrected'),
	  'standard_min_temp'=>$this->input->post('standard_min_temp'),
	  'standard_max_temp'=>$this->input->post('standard_max_temp')
	);
	$this->db->update('humiditytemp', $new_data,array('ht_id' => $ht_id));
	redirect( 'temperature_humidity_list/records/'.$id);
}
function lab_details(){
	$id =1;
	$ht_location=="2";
	$new_data = array(

	  'ht_date'=>$this->input->post('ht_date'),
	  'ht_location'=>$this->input->post('ht_location'),
	  'equipment_used'=>$this->input->post('l_equipment_used'),
	  'comments'=>$this->input->post('l_comments'),
	  'min_temp'=>$this->input->post('l_min_temp'),
	  'min_temp_corrected'=>$this->input->post('l_min_temp_corrected'),
	  'max_temp'=>$this->input->post('l_max_temp'),
	  'max_temp_corrected'=>$this->input->post('l_max_temp_corrected'),
	  'min_humidity'=>$this->input->post('l_min_humidity'),
	  'min_humidity_corrected'=>$this->input->post('l_min_humidity_corrected'),
	  'max_humidity'=>$this->input->post('l_max_humidity'),
	  'standard_min_temp'=>$this->input->post('l_standard_min_temp'),
	  'standard_max_temp'=>$this->input->post('l_standard_max_temp'),
	  'max_humidity_corrected'=>$this->input->post('l_max_humidity_corrected')
	);
	$this->db->update('humiditytemp', $new_data,array('ht_id' => $ht_id));
	redirect( 'temperature_humidity_list/records/'.$id);
}
function sample_stores_details(){
	$id =1;
	$ht_location=="3";
	$new_data = array(

	  'ht_date'=>$this->input->post('ht_date'),
	  'ht_location'=>$this->input->post('ht_location'),
	  'equipment_used'=>$this->input->post('s_equipment_used'),
	  'comments'=>$this->input->post('s_'),
	  'min_temp'=>$this->input->post('s_min_temp'),
	  'min_temp_corrected'=>$this->input->post('s_min_temp_corrected'),
	  'max_temp'=>$this->input->post('s_max_temp'),
	  'max_temp_corrected'=>$this->input->post('s_max_temp_corrected'),
	  'min_humidity'=>$this->input->post('s_min_humidity'),
	  'min_humidity_corrected'=>$this->input->post('s_min_humidity_corrected'),
	  'max_humidity'=>$this->input->post('s_max_humidity'),
	  'max_humidity_corrected'=>$this->input->post('s_max_humidity_corrected'),
	  'standard_min_temp'=>$this->input->post('s_standard_min_temp'),
	  'standard_max_temp'=>$this->input->post('s_standard_max_temp')
	);
	$this->db->update('humiditytemp', $new_data,array('ht_id' => $ht_id));
	redirect( 'temperature_humidity_list/records/'.$id);
}
function instrument_room_details(){
	$id =1;
	$ht_location=="4";
	$new_data = array(

	  'ht_date'=>$this->input->post('ht_date'),
	  'ht_location'=>$this->input->post('ht_location'),
	  'equipment_used'=>$this->input->post('i_equipment_used'),
	  'comments'=>$this->input->post('i_comments'),
	  'min_temp'=>$this->input->post('i_min_temp'),
	  'min_temp_corrected'=>$this->input->post('i_min_temp_corrected'),
	  'max_temp'=>$this->input->post('i_max_temp'),
	  'max_temp_corrected'=>$this->input->post('i_max_temp_corrected'),
	  'min_humidity'=>$this->input->post('i_min_humidity'),
	  'min_humidity_corrected'=>$this->input->post('i_min_humidity_corrected'),
	  'max_humidity'=>$this->input->post('i_max_humidity'),
	  'standard_min_temp'=>$this->input->post('i_standard_min_temp'),
	  'standard_max_temp'=>$this->input->post('i_standard_max_temp'),
	  'standard_min_humidity'=>$this->input->post('i_standard_min_humidity'),
	  'standard_max_humidity'=>$this->input->post('i_standard_max_humidity'),
	  'max_humidity_corrected'=>$this->input->post('i_max_humidity_corrected')
	);
	$this->db->update('humiditytemp', $new_data,array('ht_id' => $ht_id));
	redirect( 'temperature_humidity_list/records/'.$id);
}
function refrigerator(){
	$id =1;
	$ht_location=="5";
	$new_data = array(

	  'ht_date'=>$this->input->post('ht_date'),
	  'ht_location'=>$this->input->post('ht_location'),
	  'equipment_used'=>$this->input->post('ref_equipment_used'),
	  'comments'=>$this->input->post('ref_comments'),
	  'min_temp'=>$this->input->post('ref_min_temp'),
	  'min_temp_corrected'=>$this->input->post('ref_min_temp_corrected'),
	  'max_temp'=>$this->input->post('ref_max_temp'),
	  'max_temp_corrected'=>$this->input->post('ref_max_temp_corrected'),
	  'min_humidity'=>$this->input->post('ref_min_humidity'),
	  'min_humidity_corrected'=>$this->input->post('ref_min_humidity_corrected'),
	  'max_humidity'=>$this->input->post('ref_max_humidity'),
	  'standard_min_temp'=>$this->input->post('ref_standard_min_temp'),
	  'standard_max_temp'=>$this->input->post('ref_standard_max_temp'),
	  'max_humidity_corrected'=>$this->input->post('ref_max_humidity_corrected')	
	);
	$this->db->update('humiditytemp', $new_data,array('ht_id' => $ht_id));
	redirect( 'temperature_humidity_list/records/'.$id);
}

	/*$new_data = array(

	  'ht_date'=>$this->input->post('ht_date'),
	  'ht_location'=>$this->input->post('ht_location'),
	  'equipment_used'=>$this->input->post('equipment_used'),
	  'min_temp'=>$this->input->post('min_temp'),
	  'min_temp_corrected'=>$this->input->post('min_temp_corrected'),
	  'max_temp'=>$this->input->post('max_temp'),
	  'max_temp_corrected'=>$this->input->post('max_temp_corrected'),
	  'min_humidity'=>$this->input->post('min_humidity'),
	  'min_humidity_corrected'=>$this->input->post('min_humidity_corrected'),
	  'max_humidity'=>$this->input->post('max_humidity'),
	  'max_humidity_corrected'=>$this->input->post('max_humidity_corrected'),
	  'standard_min_temp'=>$this->input->post('standard_min_temp'),
	  'standard_max_temp'=>$this->input->post('standard_max_temp')
	);*/

/*	$this->db->update('humiditytemp', $new_data,array('ht_id' => $ht_id));
	redirect( 'temperature_humidity_list/records/'.$id);*/

	//}
}
?>