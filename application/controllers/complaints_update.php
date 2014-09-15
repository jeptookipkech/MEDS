<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Complaints_Update extends CI_Controller {

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
 
  $this->load->view('complaints_updateform',$data);
 }

 function Update(){

  $cid = $this->input->post('cid');

  $this->load->model('complaints_updatemodel');        
  
  if($this->input->post('update_complaint')){

  $this->complaints_updatemodel->details($cid);  
 }


}

}

?>
