<?php
class Reagents_Recordsmodel extends CI_Model{
    
    function Reagents_Recordsmodel()
    {
      parent::__construct();
    }
    function reagents_record_list_getall(){
        $this->load->database();
        $query=$this->db->get('reagents_inventory_record');
        return $query->result();
    }
    function reagents_record_list_get(){
       $query = $this->db->select('*')->from('reagents_inventory_record')->get();
    return $query->result();
    }
     function expired(){
        $sql = "SELECT * FROM reagents_inventory_record WHERE status = '1'";
        $query = $this->db->query($sql);
        return $query ->result();


    }
    function damaged(){
        $sql = "SELECT * FROM reagents_inventory_record WHERE status = '2'";
         $query = $this->db->query($sql);
        return $query ->result();
    }
    function exhausted(){
        $sql = "SELECT * FROM reagents_inventory_record WHERE status = '3'";
         $query = $this->db->query($sql);
        return $query ->result();
    }
}
?>