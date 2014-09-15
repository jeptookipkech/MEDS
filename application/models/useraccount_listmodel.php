<?php
class Useraccount_Listmodel extends CI_Model{
    
    function Useraccount_Listmodel()
    {
      parent::__construct();
    }
    function accounts_list_getall(){
        $this->load->database();
        $query=$this->db->get('user');
        return $query->result();
    }
    function accounts_list_get(){
        
        $this->db->where('acc_status',1);
        $query=$this->db->get('user');
        return $query->result();
    }
}
?>