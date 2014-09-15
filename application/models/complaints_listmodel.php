<?php
class Complaints_Listmodel extends CI_Model{

	function Complaints_Listmodel(){
      parent::__construct();
    }

	function get_record_list(){
		
		$sql1 = "select * from complaints where approved = '1'";
		$query = $this->db->query($sql1);		
		return $query->result();
	}

	function unassigned_complaints(){

	$sql="select * from complaints where approved='0'";
        $query=$this->db->query($sql);
        return $query->result();
	}
}

?>