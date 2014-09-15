<?php
class User_Log_Model extends CI_Model{
    
    function User_Log_Model(){
      parent::__construct();
    }
    
    function user_log_list_get($id){
    $query = $this->db->get_where('user_log', array('user_id' => $id));
    //return $query->result();
    $results=$query->result_array();


    $data['query']=$results;
    $this->load->view('user_log_view',$data);
    }
}
?>