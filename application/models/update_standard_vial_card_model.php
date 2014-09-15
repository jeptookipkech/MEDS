<?php
class Update_Standard_Vial_Card_Model extends CI_Model {
// model constructor function
function __construct() {
    parent::__construct(); // call parent constructor
    $this->load->database();
}


function Update($id)
{
    $new_data = array(
        
        'id_number'=>$this->input->post('id_number'),
        'item'=>$this->input->post('item'),
        'batch_number'=>$this->input->post('batch_number'),
        'source'=>$this->input->post('source'),
        'units'=>$this->input->post('units'),
        'location'=>$this->input->post('location'),
        'type'=>$this->input->post('type'),
        'expiry_date'=>$this->input->post('expiry_date'),
        'reorder'=>$this->input->post('reorder'),
        'status'=>$this->input->post('status'),
        'reference_number'=>$this->input->post('reference_number'),
        'issued_by'=>$this->input->post('issued_by'),
        'received_by'=>$this->input->post('received_by'),
        'balance'=>$this->input->post('balance')
        
    );
    $this->db->update('standard_vial_card', $new_data,array('id' => $id));
    
    redirect('standard_vial_card_records/Get');
}
}
?>