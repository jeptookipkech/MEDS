<?php
class Inactive_Clients_Model extends CI_Model{
    
    function Inactive_Clients_Model()
    {
      parent::__construct();
    }
    function inactive_client_lsist_getall(){
        $this->load->database();
        $query=$this->db->get('client');
        return $query->result();
    }
    function inactive_clients_list_get(){
        $this->db->where('status',2);
        $query=$this->db->get('client');
        return $query->result();
    }
}
?>