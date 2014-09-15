<?php
class Temperature_Humidity_Listmodel extends CI_Model{

	function Temperature_Humidity_Listmodel(){
	parent::__construct();
	}

	function get_freezer_records(){
		$sql="SELECT * FROM humiditytemp WHERE ht_location='Freezer'";
		$query=$this->db->query($sql);
		return $query->result();
	}
	function get_sample_store_records(){
		
		$sql="SELECT * FROM humiditytemp WHERE ht_location='Sample Store'";
		$query=$this->db->query($sql);
		return $query->result();
	}
	
	function get_laboratory_area_records(){
		
		$sql="SELECT * FROM humiditytemp WHERE ht_location='Laboratory Working Area'";
		$query=$this->db->query($sql);
		return $query->result();
	}
	function get_instrument_room_records(){
		
		$sql="SELECT * FROM humiditytemp WHERE ht_location='Instrument Room'";
		$query=$this->db->query($sql);
		return $query->result();
	}
	function get_refrigerator_records(){
		
		$sql="SELECT * FROM humiditytemp WHERE ht_location='Refrigerator'";
		$query=$this->db->query($sql);
		return $query->result();
	}
}
?>