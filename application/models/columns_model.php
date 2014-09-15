<?php
class Columns_Model extends CI_Model{
    
    function Columns_Model()
    {
      parent::__construct();
    }
    function column_request_listget(){
         $trid = $this->uri->segment(3);
         $utid = $this->uri->segment(4);
         
         if($trid==0 && $utid==6){
            $sql="select * from columns where assignment_id='0'";
            $query=$this->db->query($sql);
            return $query->result();
        }
        else if($trid==0 && $utid==0){
            $sql="select * from columns where assignment_id='0'";
            $query=$this->db->query($sql);
            return $query->result();
        }
        else{
        
            $this->db->select('*');
            $this->db->from('assignment');
            $this->db->join('columns', 'columns.assignment_id = assignment.id');
            $query = $this->db->get();
            return $query->result();
        }
    }
    function columns_get(){
        $sql="select * from columns where issue_state='0'";
        $query=$this->db->query($sql);
        return $query->result();
    }
    function columns_get_assigned(){
        $sql="select * from columns where issue_state='1'";
        $query=$this->db->query($sql);
        return $query->result();
    }
    function columns_get_decommissioned(){
        $sql="select * from columns where issue_state='2'";
        $query=$this->db->query($sql);
        return $query->result();
    }

    
    function process(){
     
     //Variable Sets
     $column_type=$this->input->post('column_type');
     $serial_number=$this->input->post('serial_number');
     $column_dimensions=$this->input->post('column_dimensions');
     $manufacturer=$this->input->post('manufacturer');
     $column_status=$this->input->post('column_status');
     $column_number=$this->input->post('column_number');
     $comment=$this->input->post('comment');
     
     //Data Insertion
     $data= array(
       
      'column_type'=>$column_type,
      'serial_number'=>$serial_number,
      'column_dimensions'=>$column_dimensions,
      'manufacturer'=>$manufacturer,
      'column_status'=>$column_status,
      'column_number'=>$column_number,
      'reserved_for'=>'N/A',
      'issued_to'=>'N/A',
      'comment'=>$comment
     );
     $this->db->insert('columns',$data);
     
    }
    function issue(){
     
     //Variable Sets
     $state=1;
     $c_id = $this->input->post('c_id');
     $analyst_issued_to=$this->input->post('analyst');
     
     //Data Insertion
     $data= array(
      'issued_to'=>$analyst_issued_to,
      'issue_state'=>$state
     );
     $this->db->update('columns', $data,array('id' => $c_id));
     
    }

}
?>