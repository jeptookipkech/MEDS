<?php
class Deactivated_Accounts_Listmodel extends CI_Model{
    
    function Deactivated_Accounts_Listmodel()
    {
      parent::__construct();
    }
    function deactivated_accounts_list_getall(){
        $this->load->database();
        $query=$this->db->get('user');
        return $query->result();
    }
    function deactivated_accounts_list_get(){
        $this->db->where('acc_status',0);
        $query=$this->db->get('user');
        return $query->result();
    }
}
?>