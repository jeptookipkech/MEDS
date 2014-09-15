<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Complaints extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }
  function index()
  {
   $this->load->view('complaints');
  }
  function submit(){
   $this->load->model('complaints_model');
   if ($this->input->post('save_complaint')) {
    $this->complaints_model->process();
   }
  }
}
?>