<?php
class Humidity_Listmodel extends CI_Model{

    function Temperature_Humidity_Listmodel(){
      parent::__construct();
    }

    function get_sample_store_humidity_record_list(){
        $name='Sample Store';
        
        $query =$this->db->select('ht_id,ht_location,min_humidity,min_humidity_corrected,max_humidity,max_humidity_corrected,ht_date');
        $query =$this->db->from('humiditytemp');
        $this->db->where('ht_location', $name);
       
        $query = $this->db->get();        
        return $query->result();
    }
   
    function get_instrument_room_record_list(){
        $name='Instrument Room';
        
        $query =$this->db->select('ht_id,ht_location,min_humidity,min_humidity_corrected,max_humidity,max_humidity_corrected,ht_date');
        $query =$this->db->from('humiditytemp');
        $this->db->where('ht_location', $name);
       
        $query = $this->db->get();        
        return $query->result();
    }
}
?>