<?php
class Deactivated_Client_Listmodel extends CI_Model{
    
    function Deactivated_Client_Listmodel()
    {
      parent::__construct();
    }
    function deactivated_client_list_getall(){
        $this->load->database();
        $query=$this->db->get('client');
        return $query->result();
    }
    function deactivated_client_list_get(){
        $this->db->where('status',0);
        $query=$this->db->get('client');
        return $query->result();
    }
}
?>