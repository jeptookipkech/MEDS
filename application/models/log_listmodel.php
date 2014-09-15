<?php
class Log_Listmodel extends CI_Model{
    
    function Log_Listmodel()
    {
      parent::__construct();
    }
    
     function log_list_get($id){
    $query = $this->db->get_where('test_request_log', array('test_request_id' => $id));
    //return $query->result();
    $results=$query->result_array();


    $data['query']=$results;
    $this->load->view('logs_list_view',$data);
}
}
?>