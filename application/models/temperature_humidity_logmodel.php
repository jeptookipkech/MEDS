<?php
class Temperature_Humidity_Logmodel extends CI_Model{
    
    function Temperature_Humidity_Logmodel()
    {
      parent::__construct();
    }
    
    function log($id){
    $query = $this->db->get_where('humiditytemp_log', array('ht_id' => $id));
    $results=$query->result_array();


    $data['query']=$results;
    $this->load->view('temperature_humidity_logform',$data);
}
  function log_sample($id){
    $query = $this->db->get_where('humiditytemp_log', array('ht_id' => $id));
    $results=$query->result_array();


    $data['query']=$results;
    $this->load->view('sample_store_humidity_log',$data);
}
  function log_instrument($id){
    $query = $this->db->get_where('humiditytemp_log', array('ht_id' => $id));
    $results=$query->result_array();


    $data['query']=$results;
    $this->load->view('instrument_room_humidity_log',$data);
}
}
?>