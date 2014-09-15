<?php
class Test_Requestlistmodel extends CI_Model{
    
    function Test_Requestlistmodel()
    {
      parent::__construct();
    }
    function test_request_listget(){
        $trid = $this->uri->segment(3);
        $utid = $this->uri->segment(4);
        $dp_id = $this->uri->segment(5);

         
         if($utid==6 && $dp_id==0 || $dp_id==8){
            $sql="select * from test_request where test_request_id='1'";
            $query=$this->db->query($sql);
            return $query->result();
        }
        else if($utid==5 && $dp_id==2){
            $sql="SELECT * FROM test_request
            JOIN user ON user.test_request_id=test_request.id
            JOIN assignment ON assignment.test_request_id=user.test_request_id where  assignment.test_request_id=user.test_request_id AND assignment.analyst_name=user.username AND user.test_request_id=$trid AND user.department_id=$dp_id";
            $query=$this->db->query($sql);
            return $query->result();
        }
        else if($utid==5 && $dp_id==3){
            $sql="SELECT * FROM test_request
            JOIN user ON user.test_request_id=test_request.id
            JOIN assignment ON assignment.test_request_id=user.test_request_id where  assignment.test_request_id=user.test_request_id AND assignment.analyst_name=user.username AND user.test_request_id=$trid AND user.department_id=$dp_id";
            $query=$this->db->query($sql);
            return $query->result();
        }
        elseif($utid==5 && $dp_id==4){
            $sql="SELECT * FROM test_request
            JOIN user ON user.test_request_id=test_request.id
            JOIN assignment ON assignment.test_request_id=user.test_request_id where  assignment.test_request_id=user.test_request_id AND assignment.analyst_name=user.username AND user.test_request_id=$trid AND user.department_id=$dp_id";
            $query=$this->db->query($sql);
            return $query->result();

        }
        else{
        
            $this->db->select('*');
            $this->db->from('assignment');
            $this->db->join('test_request', 'test_request.assignment_id = assignment.id');
            $query = $this->db->get();
            return $query->result();
        }
    }
    function test_request_list_get(){
         $trid = $this->uri->segment(3);
         $utid = $this->uri->segment(4);
         $dp_id = $this->uri->segment(5);
         //$department_id=;
         
         if($utid==6||$utid==7){
            $sql="SELECT assignment.id AS a,assignment.test_request_id,assignment.user_id,assignment.client_id,assignment.reference_number,assignment.assigner_name,assignment.analyst_name,assignment.sample_issued,
            test_request.id AS tr,test_request.client_id,test_request.assignment_name,test_request.active_ingredients,test_request.manufacturer_name,test_request.manufacturer_address,test_request.batch_lot_number,
            test_request.sample_source,test_request.expiry_date,test_request.date_manufactured,test_request.quantity_type,test_request.sample_source,test_request.laboratory_number,test_request.applicant_name,
            test_request.quantity_remaining,test_request.quantity_submitted,test_request.applicant_ref_number
            FROM assignment JOIN test_request ON test_request.id=assignment.test_request_id";
            $query=$this->db->query($sql);
            return $query->result();

            //$rid=$result[0]['test_request.id'];
        }
        elseif($utid==5 && $dp_id==2){
            $sql="SELECT * FROM test_request
            JOIN user ON user.test_request_id=test_request.id
            JOIN assignment ON assignment.test_request_id=user.test_request_id where assignment.test_request_id=test_request.id  AND assignment.analyst_name=user.username AND user.test_request_id=$trid AND user.department_id=$dp_id";
            $query=$this->db->query($sql);
            return $query->result();

        }
        elseif($utid==5 && $dp_id==3){
            $sql="SELECT * FROM test_request
            JOIN user ON user.test_request_id=test_request.id
            JOIN assignment ON assignment.test_request_id=user.test_request_id where assignment.test_request_id=test_request.id  AND assignment.analyst_name=user.username AND user.test_request_id=$trid AND user.department_id=$dp_id";
            $query=$this->db->query($sql);
            return $query->result();

        }
        elseif($utid==5 && $dp_id==4){
            $sql="SELECT * FROM test_request
            JOIN user ON user.test_request_id=test_request.id
            JOIN assignment ON assignment.test_request_id=user.test_request_id where  assignment.test_request_id=user.test_request_id AND assignment.analyst_name=user.username AND user.test_request_id=$trid AND user.department_id=$dp_id";
            $query=$this->db->query($sql);
            return $query->result();

        }
        else{
        
            $this->db->select(' assignment.id AS a,assignment.test_request_id,assignment.user_id,assignment.client_id,assignment.reference_number,assignment.assigner_name,assignment.analyst_name,assignment.sample_issued,
            test_request.id AS tr,test_request.client_id,test_request.assignment_name,test_request.active_ingredients,test_request.manufacturer_name,test_request.manufacturer_address,test_request.batch_lot_number,
            test_request.sample_source,test_request.expiry_date,test_request.date_manufactured,test_request.quantity_type,test_request.sample_source,test_request.laboratory_number,test_request.applicant_name,
            test_request.quantity_remaining,test_request.quantity_submitted,test_request.applicant_ref_number');
            $this->db->from('assignment');
            $this->db->join('test_request', 'test_request.assignment_name = assignment.analyst_name');
            $query = $this->db->get();
            return $query->result();
        }
    }
    function test_request_list_getc(){
         $trid = $this->uri->segment(3);
         $utid = $this->uri->segment(4);
         $dp_id = $this->uri->segment(5);
         
         if($utid==6||$utid==7){
            $sql="SELECT * FROM test_request WHERE quantity_remaining='0'";
            $query=$this->db->query($sql);
            return $query->result();
        }
        elseif($utid==5 && $dp_id==2){
            $sql="SELECT * FROM test_request
            JOIN user ON user.test_request_id=test_request.id
            JOIN assignment ON assignment.test_request_id=user.test_request_id where  assignment.test_request_id=test_request.id  AND assignment.analyst_name=user.username AND user.test_request_id=$trid AND user.department_id=$dp_id";
            $query=$this->db->query($sql);
            return $query->result();

        }
        elseif($utid==5 && $dp_id==3){
            $sql="SELECT * FROM test_request
            JOIN user ON user.test_request_id=test_request.id
            JOIN assignment ON assignment.test_request_id=user.test_request_id where assignment.test_request_id=test_request.id  AND assignment.analyst_name=user.username AND user.test_request_id=$trid AND user.department_id=$dp_id";
            $query=$this->db->query($sql);
            return $query->result();

        }
        elseif($utid==5 && $dp_id==4){
            $sql="SELECT * FROM test_request
            JOIN user ON user.test_request_id=test_request.id
            JOIN assignment ON assignment.test_request_id=user.test_request_id where  assignment.test_request_id=user.test_request_id AND assignment.analyst_name=user.username AND user.test_request_id=$trid AND user.department_id=$dp_id";
            $query=$this->db->query($sql);
            return $query->result();

        }
        elseif($utid==5 && $dp_id==4){
            $sql="SELECT * FROM test_request
            JOIN user ON user.test_request_id=test_request.id
            JOIN assignment ON assignment.test_request_id=user.test_request_id where  assignment.test_request_id=user.test_request_id AND assignment.analyst_name=user.username AND user.test_request_id=$trid AND user.department_id=$dp_id";
            $query=$this->db->query($sql);
            return $query->result();

        }
        else{
        
            $this->db->select('*');
            $this->db->from('assignment');
            $this->db->join('test_request', 'test_request.assignment_name = assignment.analyst_name');
            $query = $this->db->get();
            return $query->result();
        }
    }
    function test_request_list_getq(){
         $trid = $this->uri->segment(3);
         $utid = $this->uri->segment(4);
         $dp_id = $this->uri->segment(5);
         
         if($utid==6||$utid==7){
            $sql="SELECT * FROM test_request WHERE quantity_remaining='0'";
            $query=$this->db->query($sql);
            return $query->result();
        }
        elseif($utid==5 && $dp_id==2){
            $sql="SELECT * FROM test_request
            JOIN user ON user.test_request_id=test_request.id
            JOIN assignment ON assignment.test_request_id=user.test_request_id where  assignment.test_request_id=user.test_request_id AND assignment.analyst_name=user.username AND user.test_request_id=$trid AND user.department_id=$dp_id";
            $query=$this->db->query($sql);
            return $query->result();

        }
        elseif($utid==5 && $dp_id==3){
            $sql="SELECT * FROM test_request
            JOIN user ON user.test_request_id=test_request.id
            JOIN assignment ON assignment.test_request_id=user.test_request_id where  assignment.test_request_id=user.test_request_id AND assignment.analyst_name=user.username AND user.test_request_id=$trid AND user.department_id=$dp_id";
            $query=$this->db->query($sql);
            return $query->result();

        }
        elseif($utid==5 && $dp_id==4){
            $sql="SELECT * FROM test_request
            JOIN user ON user.test_request_id=test_request.id
            JOIN assignment ON assignment.test_request_id=user.test_request_id where  assignment.test_request_id=user.test_request_id AND assignment.analyst_name=user.username AND user.test_request_id=$trid AND user.department_id=$dp_id";
            $query=$this->db->query($sql);
            return $query->result();

        }
        elseif($utid==5 && $dp_id==4){
            $sql="SELECT * FROM test_request
            JOIN user ON user.test_request_id=test_request.id
            JOIN assignment ON assignment.test_request_id=user.test_request_id where  assignment.test_request_id=user.test_request_id AND assignment.analyst_name=user.username AND user.test_request_id=$trid AND user.department_id=$dp_id";
            $query=$this->db->query($sql);
            return $query->result();

        }
        else{
        
            $this->db->select('*');
            $this->db->from('assignment');
            $this->db->join('test_request', 'test_request.assignment_name = assignment.analyst_name');
            $query = $this->db->get();
            return $query->result();
        }
    }
    function test_request_list_get_unassigned($test_request_id,$user_type_id,$department_id){
         $trid = $test_request_id;
         $utid = $user_type_id;
         $dp_id =$department_id;
         
        if($utid==6||$utid==7){
            $sql="SELECT * FROM test_request WHERE quantity_remaining!='0'";
            $query=$this->db->query($sql);
            return $query->result();
            
        }elseif($utid==5 && $dp_id==2){
            $sql="SELECT * FROM test_request
            JOIN user ON user.test_request_id=test_request.id
            JOIN assignment ON assignment.test_request_id=user.test_request_id where  assignment.test_request_id=user.test_request_id  AND assignment.analyst_name=user.username AND user.test_request_id=$trid AND user.department_id=$dp_id";
            $query=$this->db->query($sql);
            return $query->result();

        }elseif($utid==5 && $dp_id==3){
            $sql="SELECT * FROM test_request
            JOIN user ON user.test_request_id=test_request.id
            JOIN assignment ON assignment.test_request_id=user.test_request_id where  assignment.test_request_id=user.test_request_id AND assignment.analyst_name=user.username AND user.test_request_id=$trid AND user.department_id=$dp_id";
            $query=$this->db->query($sql);
            return $query->result();

        }elseif($utid==5 && $dp_id==4){
            $sql="SELECT * FROM test_request
            JOIN user ON user.test_request_id=test_request.id
            JOIN assignment ON assignment.test_request_id=user.test_request_id where  assignment.test_request_id=user.test_request_id AND assignment.analyst_name=user.username AND user.test_request_id=$trid AND user.department_id=$dp_id";
            $query=$this->db->query($sql);
            return $query->result();

        }
    }
}
?>