<?php
class Calibration_Requirement_Recordsmodel extends CI_Model{
    
    function Calibration_Requirement_Recordsmodel()
    {
      parent::__construct();
    }
    function calibration_requirement_list_getall(){
        $this->load->database();
        $query=$this->db->get('cv_requirement_list');
        return $query->result();
    }
    function calibration_requirement_list_get(){
       $query = $this->db->select('*')->from('cv_requirement_list')->get();
    return $query->result();
    }
}
?>