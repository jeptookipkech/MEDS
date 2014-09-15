<?php
class Update_Usermodel extends CI_Model {
// model constructor function
function __construct() {
    parent::__construct(); // call parent constructor
    $this->load->database();
}


function Update($id){
    
    $user_type=$this->input->post('role');
    
    if($user_type==1){
    $role='MEDS System Administrator';
    }if($user_type==2){
    $role='Laboratory Supervisor';
    }if($user_type==3){
    $role='MEDS Client';
    }if($user_type==5){
    $role='Laboratory Analyst';
    }if($user_type==7){
    $role='Laboratory Assistant ';
    }if($user_type==8){
    $role='Quality Assurance Manager';
    }if($user_type==6){
    $role='Documentation';
    }
    
    $new_data = array(
        'role'=>$role,
        'user_type'=>$user_type,
        'acc_status'=>$this->input->post('status')
    );
    $this->db->update('user', $new_data,array('id' => $id));
    
    redirect('user_accounts/Get');
}
}
?>