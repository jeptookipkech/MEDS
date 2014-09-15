<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Outoftolerance extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }
 //Display the form to add out of tolerance details
 function index(){
  $id= $this->uri->segment(3);
  $this->load->model('outoftolerance_listmodel');
  $data['query'] = $this->outoftolerance_listmodel->getdetails($id);
  
  
  $this->load->view('outoftolerance_form',$data);
 }

 //this functions loads the data queried from the model and saves it in the db, get the info from the form and push it to the 'process, function in model
 function submit(){
 
 $this->load->model('outoftolerance_model');

  if ($this->input->post('save_outoftolerance')) {	 
   $this->outoftolerance_model->process();
  }
 }
}
