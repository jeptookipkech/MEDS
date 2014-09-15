<?php
class Calibration_Requirement_Log_model extends CI_Model{
    
    function Calibration_Requirement_Log_model()
    {
      parent::__construct();
    }
    
     function calibration_verification_log_list_get($id){
    $query = $this->db->get_where('cv_requirement_list_log', array('cv_requirement_list_id' => $id));
    //return $query->result();
    $results=$query->result_array();


    $data['query']=$results;
    $this->load->view('calibration_logs_list_view',$data);
}
}
?>