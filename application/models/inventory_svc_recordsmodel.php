<?php
class Inventory_Svc_Recordsmodel extends CI_Model{
    
    function Inventory_Recordsmodel()
    {
      parent::__construct();
    }
    function inventory_record_list_getall(){
        $this->load->database();
        $query=$this->db->get('inventory_svc');
        return $query->result();
    }
    function inventory_record_list_get(){
       $query = $this->db->select('*')->from('inventory_svc')->get();
    return $query->result();
    }
}
?>