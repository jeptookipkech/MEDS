<?php
class Coa_Model_List extends CI_Model{
	
	function Coa_MOdel_list(){
		
		parent::__construct();
	}
	function records_list(){
		// $sql ="SELECT * FROM coa";
		$sql = "SELECT * FROM test_request WHERE request_status = 1" ;
		$query = $this->db->query($sql);
		return $query->result();
	} 
}
?>