<?php
class Complaints_Logmodel extends CI_Model{
    
    function Complaints_Logmodel()
    {
      parent::__construct();
    }
    
     function log($id){
    $query = $this->db->get_where('complaints_log', array('cid' => $id));
    $results=$query->result_array();


    $data['query']=$results;
    $this->load->view('complaints_logform',$data);
}
}
?>