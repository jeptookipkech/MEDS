<?php
class Friability_Model extends CI_Model{
   
   function __construct()
   {
    parent::__construct();
   }
   function process_monograph(){
    $assignment_id=$this->input->post('assignment_id');
     $test_request_id=$this->input->post('tr_id');
     
      $data=$this->db->select_max('id')->get('friability')->result();

      $friability_id=$data[0]->id;
      $friability_id++;

     //Sample Insertion
      $data = array(
     
     'assignment_id'=>$assignment_id,
     'test_request_id'=>$test_request_id,
     'friability_id'=>$friability_id,
     'serial_number'=>$this->input->post('serial_number'),
     'monograph'=>$this->input->post('monograph')

    );
    $this->db->insert('friability_monograph',$data);
     redirect('test/index/'.$assignment_id.'/'.$test_request_id);
    
   }

   function process(){
    
     $assignment_id=$this->input->post('assignment_id');
     $test_request_id=$this->input->post('tr_id');
     $status=1;
  //Sample Insertion
    $data = array(
     
     'serial_number'=>$this->input->post('serial_number'),
     'batch_lot_number'=>$this->input->post('batch_lot_number'),
     'time'=>$this->input->post('time'),
     'revolutions'=>$this->input->post('revolutions'),
     'description_one'=>$this->input->post('description_one'),
     'description_two'=>$this->input->post('description_two'),
     'description_three'=>$this->input->post('description_three'),
     'w_tablets_containers_bf_rotation'=>$this->input->post('w_tablets_containers_bf_rotaion'),
     'w_tablets_containers_af_rotation'=>$this->input->post('w_tablets_containers_af_rotation'),
     'w_containers_bf_rotation'=>$this->input->post('w_containers_bf_rotation'),
     'w_containers_af_rotation'=>$this->input->post('w_containers_af_rotation'),
     'w_tablets_bf_rotation'=>$this->input->post('w_tablets_bf_rotation'),
     'w_tablets_af_rotation'=>$this->input->post('w_tablets_af_rotation'),
     'loss_in_weight'=>$this->input->post('loss_in_weight'),
     'actual'=>$this->input->post('actual'),
     'comment'=>$this->input->post('comment'),
     'specification'=>$this->input->post('specification'),
     'method'=>$this->input->post('method'),
     'results'=>$this->input->post('results'),
     'remarks'=>$this->input->post('remarks'),
     'test_status'=>$status
    );

    $data_two = array(
     
     'assignment_id'=>$assignment_id,
     'test_request_id'=>$test_request_id,
     'method'=>$this->input->post('method'),
     'specification'=>$this->input->post('specification'),
     'results'=>$this->input->post('results')

    );
    $this->db->insert('coa',$data_two);
    $this->db->update('friability', $data,array('test_request_id' => $test_request_id));
    redirect('test/index/'.$assignment_id.'/'.$test_request_id);
  }
}
?>
