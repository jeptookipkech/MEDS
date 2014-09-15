<?php
class Standard_Vial_Cardrecordsmodel extends CI_Model{
    
    function Standard_Vial_Cardrecordsmodel()
    {
      parent::__construct();
    }
    function standard_vial_list_getall(){
        $this->load->database();
        $query=$this->db->get('standard_vial_card');
        return $query->result();
    }
    function standard_vial_list_get(){
      // $query = $this->db->select('*')->from('standard_vial_card')->get();
    //return $query->result();
       $sql = "SELECT * FROM standard_vial_card WHERE status = '0'";
        $query = $this->db->query($sql);
        return $query ->result();
    
    }
    function expired(){
        $sql = "SELECT * FROM standard_vial_card WHERE status = '1'";
        $query = $this->db->query($sql);
        return $query ->result();


    }
    function damaged(){
        $sql = "SELECT * FROM standard_vial_card WHERE status = '2'";
         $query = $this->db->query($sql);
        return $query ->result();
    }
    function pending(){
        $sql = "SELECT * FROM standard_vial_card WHERE status = '3'";
         $query = $this->db->query($sql);
        return $query ->result();
    }

}
?>