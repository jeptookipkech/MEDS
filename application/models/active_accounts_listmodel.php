<?php
class Active_Accounts_Listmodel extends CI_Model{
    
    function Active_Accounts_Listmodel()
    {
      parent::__construct();
    }
    function active_accounts_list_getall(){
        $this->load->database();
        $query=$this->db->get('user');
        return $query->result();
    }
    function active_accounts_list_get(){
        $this->db->where('acc_status',1);
        $query=$this->db->get('user');
        return $query->result();
    }
}
?>