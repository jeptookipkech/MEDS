<?php
class Standard_Vial_Log_Listmodel extends CI_Model{
    
    function Standard_Vial_Log_Listmodel()
    {
      parent::__construct();
    }
    
     function standard_vial_log_list_get($id){
    $query = $this->db->get_where('standard_vial_card_log', array('standard_vial_card_id' => $id));
    //return $query->result();
    $results=$query->result_array();


    $data['query']=$results;
    $this->load->view('standard_vial_card_logs_list_view',$data);
}
}
?>