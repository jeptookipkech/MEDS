<?php
class Finance_Model extends CI_Model{
    
    function Finance_Model(){
      parent::__construct();
    }

    function invoice_listget(){
                 
            $this->db->select('*');
            $this->db->from('invoice');
            $query = $this->db->get();
            return $query->result();
    }

    function process(){
     
     //Variable Sets
     $client_id=$this->input->post('client_id');
     $reference_number=$this->input->post('reference_number');
     $serial_number=$this->input->post('serial_number');
     $item_code=$this->input->post('item_code');
     $description=$this->input->post('description');
     $quantity=$this->input->post('quantity');
     $unit_price=$this->input->post('unit_price');
     $amount=$this->input->post('amount');
     
     //Data Insertion
     $data= array(
       
      'client_id'=>$client_id,
      'reference_number'=>$reference_number,
      'serial_number'=>$serial_number,
      'description'=>$description,
      'item_code'=>$item_code,
      'quantity'=>$quantity,
      'unit_price'=>$unit_price,
      'amount'=>$amount
      
     );
     $this->db->insert('invoice',$data);
     redirect('finance/index');
    }
}
?>