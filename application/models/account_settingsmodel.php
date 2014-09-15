<?php
class Account_Settingsmodel extends CI_Model {
// model constructor function
function __construct() {
    parent::__construct(); // call parent constructor
    $this->load->database();
}


function Update($id){
    $new_data = array(
        
        'fname'=>$this->input->post('fname'),
        'lname'=>$this->input->post('lname'),
        'email'=>$this->input->post('email'),
        'telephone'=>$this->input->post('telephone'),
        'username'=>$this->input->post('username')
        
    );
    $this->db->update('user', $new_data,array('id' => $id));
    
    redirect('test_request_list/GetA');
    }
}
?>