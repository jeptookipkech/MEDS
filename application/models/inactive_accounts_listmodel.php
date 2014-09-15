<?php
class Inactive_Accounts_Listmodel extends CI_Model{
    
    function Inactive_Accounts_Listmodel()
    {
      parent::__construct();
    }
    function inactive_accounts_list_getall(){
        $this->load->database();
        $query=$this->db->get('user');
        return $query->result();
    }
    function inactive_accounts_list_get(){
        $this->db->where('acc_status',2);
        $query=$this->db->get('user');
        return $query->result();
    }
}
?>