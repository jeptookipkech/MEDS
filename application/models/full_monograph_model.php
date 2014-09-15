<?php
class Full_Monograph_Model extends CI_Model{
   
   function __construct()
   {
    parent::__construct();
   }

   function process(){

     $data_one = array(
     
     'assignment_id'=>$this->input->post('assignment_id'),
     'test_request_id'=>$this->input->post('tr_id'),
     'reference_number'=>$this->input->post('reference_number'),
     'w_tablets_containers'=>$this->input->post('w_tablets_containers'),
     'w_tablets_containers_state'=>$this->input->post('w_tablets_containers_state'),
     'bf_rotation_one'=>$this->input->post('bf_rotation_one'),
     'af_rotation_one'=>$this->input->post('af_rotation_one'),
     'w_container'=>$this->input->post('w_container'),
     'bf_rotation_two'=>$this->input->post('bf_rotation_two'),
     'af_rotation_two'=>$this->input->post('af_rotation_two'),
     'w_tablets'=>$this->input->post('w_tablets'),
     'w_tablets_state'=>$this->input->post('w_tablets_state'),
     'bf_rotation_three'=>$this->input->post('bf_rotation_three'),
     'af_rotation_three'=>$this->input->post('af_rotation_three'),
     'first_try_lw'=>$this->input->post('first_try_lw'),
     'second_try_lw'=>$this->input->post('second_try_lw'),
     'third_try_lw'=>$this->input->post('third_try_lw'),
     'method'=>$this->input->post('method'),
     'specification'=>$this->input->post('specification'),
     'results'=>$this->input->post('results'),
     'remarks'=>$this->input->post('remarks')

    );
    $this->db->insert('assay',$data_one);
    
  //Sample Insertion
    $data_twp = array(
     'assignment_id'=>$this->input->post('assignment_id'),
     'test_request_id'=>$this->input->post('tr_id'),
     'reference_number'=>$this->input->post('reference_number'),
     'time'=>$this->input->post('time'),
     'revolutions'=>$this->input->post('revolutions'),
     'w_tablets_containers'=>$this->input->post('w_tablets_containers'),
     'w_tablets_containers_bf_rotaion'=>$this->input->post('w_tablets_containers_bf_rotaion'),
     'w_tablets_containers_af_rotation'=>$this->input->post('w_tablets_containers_af_rotation'),
     'w_containers_bf_rotation'=>$this->input->post('w_containers_bf_rotation'),
     'w_containers_af_rotation'=>$this->input->post('w_containers_af_rotation'),
     'w_tablets_bf_rotation'=>$this->input->post('w_tablets_bf_rotation'),
     'w_tablets_af_rotation'=>$this->input->post('w_tablets_af_rotation'),
     'loss_in_weight'=>$this->input->post('loss_in_weight'),
     'specification'=>$this->input->post('specification'),
     'method'=>$this->input->post('method'),
     'results'=>$this->input->post('results'),
     'remarks'=>$this->input->post('remarks')
    );
    $this->db->insert('friability',$data_two);

     $data_three = array(
     'assignment_id'=>$this->input->post('assignment_id'),
     'test_request_id'=>$this->input->post('tr_id'),
     'reference_number'=>$this->input->post('reference_number'),
     'w_tablets_containers'=>$this->input->post('w_tablets_containers'),
     'w_tablets_containers_state'=>$this->input->post('w_tablets_containers_state'),
     'bf_rotation_one'=>$this->input->post('bf_rotation_one'),
     'af_rotation_one'=>$this->input->post('af_rotation_one'),
     'w_container'=>$this->input->post('w_container'),
     'bf_rotation_two'=>$this->input->post('bf_rotation_two'),
     'af_rotation_two'=>$this->input->post('af_rotation_two'),
     'w_tablets'=>$this->input->post('w_tablets'),
     'w_tablets_state'=>$this->input->post('w_tablets_state'),
     'bf_rotation_three'=>$this->input->post('bf_rotation_three'),
     'af_rotation_three'=>$this->input->post('af_rotation_three'),
     'first_try_lw'=>$this->input->post('first_try_lw'),
     'second_try_lw'=>$this->input->post('second_try_lw'),
     'third_try_lw'=>$this->input->post('third_try_lw'),
     'method'=>$this->input->post('method'),
     'specification'=>$this->input->post('specification'),
     'results'=>$this->input->post('results'),
     'remarks'=>$this->input->post('remarks')

    );
    $this->db->insert('uniformity_of_content',$data_three);

    $data_four = array(
    'assignment_id'=>$this->input->post('assignment_id'),
    'test_request_id'=>$this->input->post('tr_id'), 
     ''=>$this->input->post(''),
     
    );
    $this->db->insert('ph_alkalinity',$data_four);
     
  }
}
?>
