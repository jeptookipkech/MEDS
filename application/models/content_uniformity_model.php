<?php
class Content_Uniformity_Model extends CI_Model{
   
   function __construct()
   {
    parent::__construct();
   }

   function process(){
    
  //Sample Insertion
     $data = array(
     
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
    $this->db->update('content_uniformity', $data,array('test_request_id' => $test_request_id));
    redirect('test/index/'.$assignment_id.'/'.$test_request_id);
     
  }
  function process_monograph_weight_variation_single_component(){
    $assignment_id=$this->input->post('assignment_id');
    $test_request_id=$this->input->post('tr_id');
     
      $weight_variation_single_component_monograph='';
      
      $data=$this->db->select_max('id')->get('weight_variation_hplc_single_component')->result();

      $weight_variation_hplc_single_component_id=$data[0]->id;
      $weight_variation_hplc_single_component_id++;

     //Sample Insertion
      $data = array(
     
     'assignment_id'=>$assignment_id,
     'test_request_id'=>$test_request_id,
     'weight_variation_hplc_single_component_id'=>$weight_variation_hplc_single_component_id,
     'serial_number'=>$this->input->post('serial_number'),
     'monograph'=>$this->input->post('monograph')

    );
     $this->db->insert('uniformity_monograph_weight_variation_single_component',$data);
     redirect('test/index/'.$assignment_id.'/'.$test_request_id);
    
  }
  function process_monograph_weight_variation_two_components(){
    $assignment_id=$this->input->post('assignment_id');
    $test_request_id=$this->input->post('tr_id');
     
      $weight_variation_two_components_monograph='';
      
      $data=$this->db->select_max('id')->get('weight_variation_hplc_two_components')->result();

      $weight_variation_hplc_two_components_id=$data[0]->id;
      $weight_variation_hplc_two_components_id++;

     //Sample Insertion
      $data = array(
     
     'assignment_id'=>$assignment_id,
     'test_request_id'=>$test_request_id,
     'weight_variation_hplc_two_components_id'=>$weight_variation_hplc_two_components_id,
     'serial_number'=>$this->input->post('serial_number'),
     'monograph'=>$this->input->post('monograph')

    );
     $this->db->insert('uniformity_monograph_weight_variation_two_components',$data);
     redirect('test/index/'.$assignment_id.'/'.$test_request_id);
    
  }
  
  function process_monograph_content_uniformity_hplc_single_component(){
    $assignment_id=$this->input->post('assignment_id');
    $test_request_id=$this->input->post('tr_id');
     
      $content_uniformity_hplc_single_component_monograph='';
      
      $data=$this->db->select_max('id')->get('content_uniformity_hplc_single_component')->result();

      $content_uniformity_hplc_single_component_id=$data[0]->id;
      $content_uniformity_hplc_single_component_id++;

     //Sample Insertion
      $data = array(
     
     'assignment_id'=>$assignment_id,
     'test_request_id'=>$test_request_id,
     'content_uniformity_hplc_single_component_id'=>$content_uniformity_hplc_single_component_id,
     'serial_number'=>$this->input->post('serial_number'),
     'monograph'=>$this->input->post('monograph')

    );
     $this->db->insert('uniformity_monograp_content_uniformity_single_component',$data);
     redirect('test/index/'.$assignment_id.'/'.$test_request_id);
    
  }
  function process_monograph_content_uniformity_hplc_two_components(){
    $assignment_id=$this->input->post('assignment_id');
    $test_request_id=$this->input->post('tr_id');
     
      $content_uniformity_hplc_two_components_monograph='';
      
      $data=$this->db->select_max('id')->get('content_uniformity_hplc_two_components')->result();

      $content_uniformity_hplc_two_components_id=$data[0]->id;
      $content_uniformity_hplc_two_components_id++;

     //Sample Insertion
      $data = array(
     
     'assignment_id'=>$assignment_id,
     'test_request_id'=>$test_request_id,
     'content_uniformity_hplc_two_components_id'=>$content_uniformity_hplc_two_components_id,
     'serial_number'=>$this->input->post('serial_number'),
     'monograph'=>$this->input->post('monograph')

    );
     $this->db->insert('uniformity_monograp_content_uniformity_two_components',$data);
     redirect('test/index/'.$assignment_id.'/'.$test_request_id);
    
  }
  function process_monograph_content_uniformity_titration_single_component(){
    $assignment_id=$this->input->post('assignment_id');
    $test_request_id=$this->input->post('tr_id');
     
      $content_uniformity_hplc_two_components_monograph='';
      
      $data=$this->db->select_max('id')->get('content_uniformity_titration_single_component')->result();

      $content_uniformity_titration_single_component_id=$data[0]->id;
      $content_uniformity_titration_single_component_id++;

     //Sample Insertion
      $data = array(
     
     'assignment_id'=>$assignment_id,
     'test_request_id'=>$test_request_id,
     'content_uniformity_titration_single_component_id'=>$content_uniformity_titration_single_component_id,
     'serial_number'=>$this->input->post('serial_number'),
     'monograph'=>$this->input->post('monograph')

    );
     $this->db->insert('uniformity_monograp_content_uniformity_titra_single_component',$data);
     redirect('test/index/'.$assignment_id.'/'.$test_request_id);
    
  }
  function process_monograph_content_uniformity_titration_two_components(){
    $assignment_id=$this->input->post('assignment_id');
    $test_request_id=$this->input->post('tr_id');
     
      $content_uniformity_hplc_two_components_monograph='';
      
      $data=$this->db->select_max('id')->get('content_uniformity_titration_two_components')->result();

      $content_uniformity_titration_two_components_id=$data[0]->id;
      $content_uniformity_titration_two_components_id++;

     //Sample Insertion
      $data = array(
     
     'assignment_id'=>$assignment_id,
     'test_request_id'=>$test_request_id,
     'content_uniformity_titration_two_components_id'=>$content_uniformity_titration_two_components_id,
     'serial_number'=>$this->input->post('serial_number'),
     'monograph'=>$this->input->post('monograph')

    );
     $this->db->insert('uniformity_monograp_content_uniformity_titra_two_components',$data);
     redirect('test/index/'.$assignment_id.'/'.$test_request_id);
    
  }
  function process_monograph_content_uniformity_uv_single_component(){
    $assignment_id=$this->input->post('assignment_id');
    $test_request_id=$this->input->post('tr_id');
     
      $content_uniformity_uv_single_component_monograph='';
      
      $data=$this->db->select_max('id')->get('content_uniformity_uv_single_component')->result();

      $content_uniformity_uv_single_component_id=$data[0]->id;
      $content_uniformity_uv_single_component_id++;

     //Sample Insertion
      $data = array(
     
     'assignment_id'=>$assignment_id,
     'test_request_id'=>$test_request_id,
     'content_uniformity_uv_single_component_id'=>$content_uniformity_uv_single_component_id,
     'serial_number'=>$this->input->post('serial_number'),
     'monograph'=>$this->input->post('monograph')

    );
     $this->db->insert('uniformity_monograp_content_uniformity_uv_single_component',$data);
     redirect('test/index/'.$assignment_id.'/'.$test_request_id);
    
  }
  function process_monograph_content_uniformity_uv_two_components(){
    $assignment_id=$this->input->post('assignment_id');
    $test_request_id=$this->input->post('tr_id');
     
      $content_uniformity_uv_two_components_monograph='';
      
      $data=$this->db->select_max('id')->get('content_uniformity_uv_two_components')->result();

      $content_uniformity_uv_two_components_id=$data[0]->id;
      $content_uniformity_uv_two_components_id++;

     //Sample Insertion
      $data = array(
     
     'assignment_id'=>$assignment_id,
     'test_request_id'=>$test_request_id,
     'content_uniformity_uv_two_components_id'=>$content_uniformity_uv_two_components_id,
     'serial_number'=>$this->input->post('serial_number'),
     'monograph'=>$this->input->post('monograph')

    );
     $this->db->insert('uniformity_monograp_content_uniformity_uv_two_components',$data);
     redirect('test/index/'.$assignment_id.'/'.$test_request_id);
    
  }
}
?>
