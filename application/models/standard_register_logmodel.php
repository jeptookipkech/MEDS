<?php
class Standard_Register_Logmodel extends CI_Model{
    
    function Standard_Register_Logmodel()
    {
      parent::__construct();
    }
    
     function standard_register_logs_get($id){
    $query = $this->db->get_where('standard_register_log', array('standard_register_id' => $id));
    //return $query->result();
    $results=$query->result_array();


    $data['query']=$results;
    $this->load->view('standard_register_log_view',$data);
}
}
?>