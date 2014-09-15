<?php
class Update_Deactivated_Usermodel extends CI_Model {
// model constructor function
function __construct() {
    parent::__construct(); // call parent constructor
    $this->load->database();
}


function Update($id)
{
    $new_data = array(
        
        'acc_status'=>$this->input->post('status')
    );
    $this->db->update('user', $new_data,array('id' => $id));
    
    redirect('user_accounts/Get');
}
}
?>