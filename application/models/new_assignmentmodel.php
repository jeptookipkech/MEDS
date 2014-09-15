<?php
class New_Assignmentmodel extends CI_Model{    
    function New_Assignmentmodel()
    {
      parent::__construct();
    }
    function assignment_list_getall(){
        $this->db->select('*');
        $this->db->from('assignment');
        $this->db->join('user', 'user.id = assignment.analyst_id','left');
        $this->db->join('test_request', 'test_request.assignment_id = assignment.id','left');
        
        $query = $this->db->get();
        return $query->result();
    }
    function assignment_list_get($user_id){
        
        $this->db->where('user_id',$user_id);
        $query=$this->db->get('assignment');
        return $query->result();
    }
}
?>