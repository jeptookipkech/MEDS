<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Temperature_Humidity_Details extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function Get(){
 $ht_id = $this->uri->segment(3);
 $this->load->database();
 $query = $this->db->get_where('humiditytemp', array('ht_id' => $ht_id));
 $results=$query->result_array();
 $data['query']=$results[0];
 $this->load->view('humidtemp_detailsform',$data);
 }

 function Update(){
  $ht_id = $this->input->post('ht_id');
  /*echo $ht_id;
  die;*/
  $this->load->model('temperature_humidity_detailsmodel');        
  if($this->input->post('update_humidtemp')){

  $this->temperature_humidity_detailsmodel->details($ht_id);  
  }

}
 function sample_stores(){
 	 $ht_id = $this->input->post('ht_id');
  /*echo $ht_id;
  die;*/
  $this->load->model('temperature_humidity_detailsmodel');        
  if($this->input->post('update_humidtemp')){

  $this->temperature_humidity_detailsmodel->sample_stores_details($ht_id);  
 }
}
 function lab(){
 	 $ht_id = $this->input->post('ht_id');
  /*echo $ht_id;
  die;*/
  $this->load->model('temperature_humidity_detailsmodel');        
  if($this->input->post('update_humidtemp')){

  $this->temperature_humidity_detailsmodel->lab_details($ht_id);  
 }
}
 function instrument_room(){
 	 $ht_id = $this->input->post('ht_id');
  /*echo $ht_id;
  die;*/
  $this->load->model('temperature_humidity_detailsmodel');        
  if($this->input->post('update_humidtemp')){

  $this->temperature_humidity_detailsmodel->instrument_room_details($ht_id);  
 }
}
 function refrigerator(){
 	 $ht_id = $this->input->post('ht_id');
  /*echo $ht_id;
  die;*/
  $this->load->model('temperature_humidity_detailsmodel');        
  if($this->input->post('update_humidtemp')){

  $this->temperature_humidity_detailsmodel->refrigerator_details($ht_id);  
 }

}
}
?>
