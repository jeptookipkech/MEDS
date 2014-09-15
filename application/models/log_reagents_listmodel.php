<?php
class Log_Reagents_Listmodel extends CI_Model{
    
    function Log_Reagents_Listmodel()
    {
      parent::__construct();
    }
    
     function log_reagents_list_get($id){
    $query = $this->db->get_where('reagents_inventory_record_log', array('reagents_inventory_record_id' => $id));
    //return $query->result();
    $results=$query->result_array();


    $data['query']=$results;
    $this->load->view('log_reagents_list_view',$data);
}
}
?>