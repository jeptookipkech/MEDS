<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Finance extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }
  function index()
  {
     $this->load->model('finance_model');
     $data['query']=$this->finance_model->invoice_listget();

     $this->load->view('invoice_form',$data);
  }

  function submit(){

   $this->load->model('finance_model');

   if ($this->input->post('submit')){
      $this->finance_model->process();
   }
  }
}
?>