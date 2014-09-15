<?php
class Update_Standard_Register_Model extends CI_Model {
// model constructor function
function __construct() {
    parent::__construct(); // call parent constructor
    $this->load->database();
}


function Update($id){
    $new_data = array(
        
        'reference_number'=>$this->input->post('reference_number'),
        'certificate_number'=>$this->input->post('certificate_number'),
        'msds'=>$this->input->post('msds'),
        'date_received'=>$this->input->post('date_received'),
        'batch_number'=>$this->input->post('batch_lot_number'),
        'location_store'=>$this->input->post('location_store'),
        'physical_appearance'=>$this->input->post('physical_appearance'),
        'intended_use'=>$this->input->post('intended_use'),
        'status'=>$this->input->post('status'),
        'expiry_date'=>$this->input->post('expiry_date'),
        'quantity'=>$this->input->post('quantity'),
        'item_description'=>$this->input->post('item_description')
        
    );
    $this->db->update('standard_register', $new_data,array('id' => $id));
    
    redirect('standard_register_records/Get');
    }
}
?>