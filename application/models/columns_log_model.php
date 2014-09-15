<?php
class Columns_Log_Model extends CI_Model{
    
    function Columns_Log_Model()
    {
      parent::__construct();
    }
    
     function column_log_list_get($id){
    $query = $this->db->get_where('columns_log', array('columns_id' => $id));
    //return $query->result();
    $results=$query->result_array();


    $data['query']=$results;
    $this->load->view('columns_log_view',$data);
}
}
?>