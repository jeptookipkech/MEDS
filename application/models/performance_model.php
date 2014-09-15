<?php
class Performance_Model extends CI_Model{
    
    function Performance_Model()
    {
      parent::__construct();
    }
    function maintenance_list($id){
        
        $sql="select * from maintenance where equipment_maintenance_id='$id'";
        $query=$this->db->query($sql);
        return $query->result();
       
    }
}
?>
