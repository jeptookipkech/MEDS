<?php
class Equipment_Maintenance_Log_Listmodel extends CI_Model{
    
    function Equipment_Maintenance_Log_Listmodel(){
      parent::__construct();
    }
    
    function log_list_get($id){
    $query = $this->db->get_where('equipment_maintenance_log', array('equipment_maintenance_id' => $id));
    $results=$query->result_array();

    $data['query']=$results;
    $this->load->view('equipment_maintenance_logs_list_view',$data);
    }
}
?>