<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index(){
  
   if($this->session->userdata('logged_in')){
     $user=$this->session->userdata;
     $test_request_id=$user['logged_in']['test_request_id'];
     $user_type_id=$user['logged_in']['user_type'];
     $department_id=$user['logged_in']['department_id'];
     $username=$user['logged_in']['username'];
     
     
     $this->load->model('test_requestlistmodel');
    
    $data['query'] = 
        $this->test_requestlistmodel->test_request_list_get_unassigned($test_request_id,$user_type_id,$department_id);
        $this->load->view('test_request_list',$data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login');
   }
 }

 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home');
 }

}

?>
