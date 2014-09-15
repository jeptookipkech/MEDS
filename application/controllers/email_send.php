<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email_Send extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('reset_pass','',TRUE);
 }

 function index(){
   //This method will have the credentials validation
   $this->load->library('form_validation');
   $this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean|callback_check_database');
   if($this->form_validation->run() == FALSE){
     //Field validation failed.  User redirected to Password Reset page
     $this->load->view('reset_password_form');
   }
 }

 function check_database($email){
   //Field validation succeeded.  Validate against database
   $email=$this->input->post('email');
   
   //query the database
    $result=$this->reset_pass->email($email);
   
   if($result)
   {
     $this->reset_pass->reset_email($email);
   }else{
   $this->form_validation->set_message('check_database', 'Error! That Email Address Does not Exist');
    return false;
   }
    
    
    
   }
}
?>