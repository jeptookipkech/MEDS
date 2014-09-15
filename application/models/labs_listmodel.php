<?php
class Labs_Listmodel extends CI_Model{
    
    function Labs_Listmodel()
    {
      parent::__construct();
    }
    function labs_list_getall(){
        $this->load->database();
        $query=$this->db->get('laboratory');
        return $query->result();
    }
    function labs_list_get(){
       $query = $this->db->select('*')->from('laboratory')->get();
    return $query->result();
    }
}
?>