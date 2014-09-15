<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client_Request extends CI_Controller {
function __construct()
 {
   parent::__construct();
   $this->load->model('client_requestmodel');   
 }
 
function check($id){
  echo $this->client_requestmodel->getClient($id);
}
function index(){
  $this->load->helper(array('form'));
  $this->load->view('client_test_request_form');
  //This method will have the credentials validation
  
  }

function save(){
$this->client_requestmodel->process();                
}
function GetAutocomplete($options=array()){
  $this->db->distinct();
  $this->db->select('applicant_name');
  $this->db->like('applicant_name', $options['capplicant_name'],'after');
  $query = $this->db->get('test_request');
  return $query->result();
  }


  function suggestions(){
    $term = $this->input->post('term',TRUE);
    $rows = $this->GetAutocomplete(array('applicant_name' => $term));
    $keywords = array();
    $content_data = array();
    foreach ($rows as $row){
      array_push($keywords, $row->applicant_name);
      array_push($content_data,$row);
    }
    echo json_encode($content_data);
  }
      

function showpost(){
  //$this->output->enable_profiler();
}

}
?>