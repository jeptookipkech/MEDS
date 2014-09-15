<?php
class Client_Accountmodel extends CI_Model{
    
    function Client_Accountmodel()
    {
      parent::__construct();
    }
    function client_account_getall(){
        $this->load->database();
        $query=$this->db->get('client');
        return $query->result();
    }
    function client_account_get($client_id){
        $this->db->where('client_id',$client_id);
        $query=$this->db->get('test_request');
        return $query->result();
    }
}
?>