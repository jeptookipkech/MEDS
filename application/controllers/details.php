<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Details extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }

  function Get(){
  $cid = $this->uri->segment(3);
  $data=array();
  $this->load->database();
  $query = $this->db->get_where('complaints', array('cid' => $cid));
  $results=$query->result_array();
 
  $data['query']=$results[0];
 
  $this->load->view('details',$data);
  //$this->load->view('complaints_details_approved',$data);
 }
 function GetA(){
  $cid = $this->uri->segment(3);
  $data=array();
  $this->load->database();
  $query = $this->db->get_where('complaints', array('cid' => $cid));
  $results=$query->result_array();
 
  $data['query']=$results[0];
 
  $this->load->view('complaints_details_approved',$data);
 }

 function Update(){

  $cid = $this->input->post('cid');

  $this->load->model('get_details');        
  
  if($this->input->post('update_complaint')){

  $this->get_details->details($cid);  
 }


}

}

?>
