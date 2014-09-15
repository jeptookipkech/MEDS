<?php
class Client_Log_Model extends CI_Model{
    
    function Client_Log_Model()
    {
      parent::__construct();
    }
    
    function client_log_list_get($id){
   
    
    $query = $this->db->get_where('client_log', array('client_id' => $id));
    //return $query->result();
    $results=$query->result_array();


    $data['query']=$results;
    $this->load->view('client_log_view',$data);
    }
}
?>